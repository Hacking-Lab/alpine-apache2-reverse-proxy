FROM hackinglab/alpine-base-hl:latest
LABEL maintainer="Ivan Buetler <ivan.buetler@hacking-lab.com>"

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
    php83-apache2 \
    php83-cli \
    php83-json \
    php83-phar \
    php83-openssl && \
    mkdir -p /run/apache2 && \
	rm -rf /var/cache/apk/* && \
	chown -R root:root /opt/www

# Expose the ports for apache2 
EXPOSE 80
