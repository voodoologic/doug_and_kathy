docker kill $(docker ps -q -a)
docker rm $(docker ps -q -a)
docker-compose \
  -p doug_and_kathy \
  -f ./docker-jitsi-meet/docker-compose.yml \
  -f ${PWD}/nginx/docker-compose.yml \
  up -d \
  --force-recreate \

