#!/bin/bash
set -x
shift 2
for ARG do
echo $ARG
docker-compose \
  -p doug_and_kathy \
  -f "$PWD/$ARG/docker-compose.yml" \
  up -d \
  --force-recreate
done

