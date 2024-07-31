FROM php:8.2-apache

RUN apt-get update && apt-get upgrade && apt-get install wget -y

RUN [ -d /etc/apt/keyrings ] || sudo mkdir -m0755 -p /etc/apt/keyrings

RUN wget -O /etc/apt/keyrings/cid-archive-keyring.pgp https://c-i-d.sourceforge.io/keys/cid-archive-keyring.pgp

RUN wget -O /etc/apt/sources.list.d/cid.sources https://c-i-d.sourceforge.io/repo/apt/debian/cid.sources

RUN apt-get update && apt-get install cid -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite

COPY .env /etc/iesa/.env
