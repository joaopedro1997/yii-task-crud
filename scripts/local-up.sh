#!/usr/bin/env bash
docker-compose -f ./docker-compose.yml up -d --build --force-recreate --remove-orphans
docker exec yii2_app composer install
docker exec yii2_app yii migrate/up