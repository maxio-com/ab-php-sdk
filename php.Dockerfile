FROM php:8.0-fpm-alpine

RUN apk update \
    && apk add bash \
    && apk add autoconf \
    && apk add build-base \
    && apk add --update linux-headers

RUN pecl install xdebug-3.2.1 && docker-php-ext-enable xdebug
RUN pecl install ast && docker-php-ext-enable ast

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

COPY ./config/xdebug.ini.example /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /var/www/html