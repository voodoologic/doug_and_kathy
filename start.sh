#!/bin/bash
docker-compose \
  -f ${PWD}/docker-jitsi-meet/docker-compose.yml \
  -f ${PWD}/docker-jitsi-meet/jigasi.yml \
  -f ${PWD}/nginx/docker-compose.yml \
  --log-level DEBUG \
  up

