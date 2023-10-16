FROM hackinglab/alpine-base-hl:3.2
MAINTAINER Ivan Buetler <ivan.buetler@compass-security.com>

# Add the files
ADD root /

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
    php8-apache2 \
    php8-cli \
    php8-json \
    php8-phar \
    php8-openssl && \
    mkdir -p /run/apache2 && \
	rm -rf /var/cache/apk/* && \
	chown -R root:root /opt/www

# Expose the ports for apache2 
EXPOSE 80
