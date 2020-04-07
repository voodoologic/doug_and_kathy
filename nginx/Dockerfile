#
# Nginx Dockerfile
#
# https://github.com/dockerfile/nginx
#

# Pull base image.
FROM ubuntu:18.04

LABEL container=hatorade-nginx
# Install Nginx.
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update

RUN apt-get install -y nginx wget dnsutils

RUN  rm -rf /var/lib/apt/lists/* && \
  chown -R www-data:www-data /var/lib/nginx

# Define working directory.
WORKDIR /etc/nginx

# Define default command.

# COPY ./nginx.conf /etc/nginx/
# Set the default command to execute
# when creating a new container
# CMD service nginx start
# CMD service nginx start -c /etc/nginx/local.conf
CMD service nginx start -c /etc/nginx/nginx.conf
