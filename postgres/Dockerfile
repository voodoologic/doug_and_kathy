FROM ubuntu:18.04
LABEL container=postgres

RUN apt-get update && apt-get install gpg -y
# Add the PostgreSQL PGP key to verify their Debian packages.
# It should be the same key as https://www.postgresql.org/media/keys/ACCC4CF8.asc
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys B97B0AFCAA1A47F044F244A07FCC7D46ACCC4CF8

# Add PostgreSQL's repository. It contains the most recent stable release
#     of PostgreSQL, ``9.3``.
RUN echo "deb http://apt.postgresql.org/pub/repos/apt/ precise-pgdg main" > /etc/apt/sources.list.d/pgdg.list
# Install ``python-software-properties``, ``software-properties-common`` and PostgreSQL 9.3
#  There are some warnings (in red) that show up during the build. You can hide
#  them by prefixing each apt-get statement with DEBIAN_FRONTEND=noninteractive
RUN apt-get install -y postgresql postgresql-contrib

# Note: The official Debian and Ubuntu images automatically ``apt-get clean``
# after each ``apt-get``
RUN locale-gen en_US.UTF-8
RUN update-locale LANG=en_US.UTF-8

# Run the rest of the commands as the ``postgres`` user created by the ``postgres-9.3`` package when it was ``apt-get installed``
USER postgres
ARG POSTGRES_USER
ARG POSTGRES_PASS
ARG POSTGRES_DB
ARG POSTGRES_VERSION
RUN /etc/init.d/postgresql start && \
    psql -U postgres \
    --command "CREATE USER $POSTGRES_USER WITH SUPERUSER PASSWORD '$POSTGRES_PASS';" && \
    createdb -U postgres -O $POSTGRES_USER $POSTGRES_DB

# Adjust PostgreSQL configuration so that remote connections to the
# database are possible.
RUN ls /etc/postgresql/
RUN echo "host all  all    0.0.0.0/0  md5" >> /etc/postgresql/$POSTGRES_VERSION/main/pg_hba.conf

# And add ``listen_addresses`` to ``/etc/postgresql/9.3/main/postgresql.conf``
RUN echo "listen_addresses='*'" >> /etc/postgresql/$POSTGRES_VERSION/main/postgresql.conf

# Expose the PostgreSQL port
EXPOSE 5432

# RUN ln -s /run/postgresql/.s.PGSQL.5432 /var/run/postgresql/.s.PGSQL.5432

# Add VOLUMEs to allow backup of config, logs and databases
VOLUME  ["/etc/postgresql", "/var/log/postgresql", "/var/lib/postgresql"]

# Set the default command to run when starting the container
# /usr/lib/postgresql/$POSTGRES_VERSION/bin/postgres -D /var/lib/postgresql/9.3/main -c config_file=/etc/postgresql/$POSTGRES_VERSION/main/postgresql.conf
CMD ["/usr/lib/postgresql/10/bin/postgres", "-D", "/var/lib/postgresql/10/main", "-c", "config_file=/etc/postgresql/10/main/postgresql.conf"]
