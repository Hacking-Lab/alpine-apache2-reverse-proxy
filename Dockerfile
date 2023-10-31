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
    php82-apache2 \
    php82-cli \
    php82-json \
    php82-phar \
    php82-openssl && \
    mkdir -p /run/apache2 && \
	rm -rf /var/cache/apk/* && \
	chown -R root:root /opt/www

# Expose the ports for apache2 
EXPOSE 80
