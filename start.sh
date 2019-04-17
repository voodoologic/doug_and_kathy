docker kill $(docker ps -qa)
docker rm $(docker ps -qa)
# docker-compose \
#   -p doug_and_kathy \
#   -f ${PWD}/owncloud/docker-compose.yml \
#   up -d \
#   --force-recreate
docker-compose \
  -p doug_and_kathy \
  -f ${PWD}/owncloud/docker-compose.yml \
  -f ./docker-jitsi-meet/docker-compose.yml \
  -f ${PWD}/nginx/docker-compose.yml \
  up -d \
  --force-recreate

