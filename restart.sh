#!/usr/bin/bash

docker-compose down

docker-compose up -d --build
docker-compose up -d
