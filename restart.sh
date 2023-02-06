#!/usr/bin/bash

docker stop docker-nginx-1 docker-php-1 docker-phpmyadmin-1
docker rm docker-nginx-1 docker-php-1 docker-phpmyadmin-1

docker-compose up -d --build
docker-compose up -d
