#!/bin/bash
docker build --no-cache -t hackinglab/alpine-apache2-reverse-proxy:$1.0 -t hackinglab/alpine-apache2-reverse-proxy:$1 -t hackinglab/alpine-apache2-reverse-proxy:latest -f Dockerfile .

docker push hackinglab/alpine-apache2-reverse-proxy
docker push hackinglab/alpine-apache2-reverse-proxy:$1
docker push hackinglab/alpine-apache2-reverse-proxy:$1.0

