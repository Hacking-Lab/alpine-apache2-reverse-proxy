FROM hackinglab/alpine-base-hl:latest
LABEL maintainer="Ivan Buetler <ivan.buetler@hacking-lab.com>"

RUN apk add --no-cache --update \
    openssl \
    apache2 \
    apache2-utils \
    apache2-proxy \
    apache2-ssl \
    apache2-proxy-html \
    libxml2 \
    libxml2-dev \
    curl \
    php83-apache2 \
    php83-cli \
    php83-json \
    php83-phar \
    php83-openssl && \
    mkdir -p /run/apache2

COPY root /

RUN chown -R root:root /opt/www /opt/backend

# Expose the ports for apache2
EXPOSE 80 443
