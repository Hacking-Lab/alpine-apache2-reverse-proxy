docker build --no-cache -t hackinglab/alpine-apache2-reverse-proxy:3.2.0 -t hackinglab/alpine-apache2-reverse-proxy:3.2 -t hackinglab/alpine-apache2-reverse-proxy:latest -f Dockerfile .

docker push hackinglab/alpine-apache2-reverse-proxy
docker push hackinglab/alpine-apache2-reverse-proxy:3.2
docker push hackinglab/alpine-apache2-reverse-proxy:3.2.0

