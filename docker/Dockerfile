FROM php:8.2-apache
RUN apt-get update && apt-get upgrade && apt-get install wget -y

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip
RUN docker-php-ext-install mysqli

RUN [ -d /etc/apt/keyrings ] || sudo mkdir -m0755 -p /etc/apt/keyrings
RUN wget -O /etc/apt/keyrings/cid-archive-keyring.pgp https://c-i-d.sourceforge.io/keys/cid-archive-keyring.pgp
RUN wget -O /etc/apt/sources.list.d/cid.sources https://c-i-d.sourceforge.io/repo/apt/debian/cid.sources
RUN apt-get update && apt-get install cid -y

RUN a2enmod rewrite

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY /app/composer.json /var/www/html
COPY /app/composer.lock /var/www/html

COPY .env /etc/iesa/.env

CMD bash -c "composer install && composer dump-autoload && apache2-foreground"