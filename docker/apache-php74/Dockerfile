FROM php:7.4-apache

RUN apt -y update && apt -y install openssl mcrypt gettext curl zip unzip git libzip-dev 

RUN docker-php-ext-install zip

RUN pecl install xdebug-2.8.1 \
    && docker-php-ext-enable xdebug

ENV APACHE_DOCUMENT_ROOT /var/www/app

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/app