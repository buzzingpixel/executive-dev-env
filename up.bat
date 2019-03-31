@echo off

type nul >> .env
docker-compose -f docker-compose.yml -p executive-dev-env up -d
