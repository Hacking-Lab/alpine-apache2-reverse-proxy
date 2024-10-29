# Alpine Apache2 Reverse Proxy and Backend Service
## Introduction
This is the template alpine apache2 reverse proxy with a sample php enabled backend service of the Hacking-Lab CTF system

## Base
* hackinglab/alpine-base-hl:latest

## Specifications
* with s6 startup handling
* with dynamic user creation
* with or without known passwords for root and non-root user
* with `env` based dynamic ctf flag handling
* with `file` based dynamic ctf flag handling
* reverse proxy is serving files by apache2 in /opt/www
* backend service is serving files by apache2 in /opt/backend

## Build & Test
1. `docker compose -f docker-compose.yml up --build`
2. browse to http://localhost/



