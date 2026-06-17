# Hacking-Lab Alpine Apache2 Reverse Proxy and Backend Service
## Introduction
This is a Hacking-Lab CTF template image with an Apache2 reverse proxy frontend and a sample PHP-enabled Apache2 backend service.

## Base
* hackinglab/alpine-base-hl:latest

## Specifications
* based on `hackinglab/alpine-base-hl`
* with s6 startup handling
* with dynamic user creation
* with or without known passwords for root and non-root user
* with `env` based dynamic ctf flag handling
* with `file` based dynamic ctf flag handling
* frontend Apache2 reverse proxy serves files from `/opt/www`
* backend Apache2 service serves files from `/opt/backend`
* frontend listens on ports `80` and `443`
* backend listens internally on port `8080`

## Configuration
The base image startup scripts use the following environment variables:

* `HL_USER_USERNAME=hacker`
* `HL_USER_PASSWORD=compass`
* `HL_ROOT_PASSWORD=change-me`
* `GOLDNUGGET=FLAG{myflag}`

Override `/etc/apache2/conf-frontend.d/proxy-html.conf` to change the reverse proxy target.

## Build & Test
1. `docker compose -f docker-compose.yml up --build`
2. browse to http://localhost/
