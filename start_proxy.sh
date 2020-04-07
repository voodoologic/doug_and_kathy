docker kill $(docker ps -qa)
docker rm $(docker ps -qa)
docker-compose \
  -p doug_and_kathy \
  -f ${PWD}/nginx/cloud-compose.yml \
  up -d \
  --force-recreate

