#!/bin/bash
export $(cat .env_$1 | xargs)
for ARG do
docker-compose \
  -p doug_and_kathy \
  -f "$PWD/$ARG/docker-compose.yml" \
  up -d \
  --build \
  --force-recreate
done

