FROM php:7.4-apache

RUN apt -y update && apt -y install openssl mcrypt gettext curl zip unzip git libzip-dev npm

RUN docker-php-ext-install zip pdo_mysql && docker-php-ext-enable zip pdo_mysql

RUN pecl install xdebug-2.8.1 \
    && docker-php-ext-enable xdebug

ENV APACHE_DOCUMENT_ROOT /var/www/app

RUN a2enmod ssl && a2enmod rewrite
RUN mkdir -p /etc/apache2/ssl
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
COPY ./ssl/*.* /etc/apache2/ssl/
RUN a2ensite default-ssl

WORKDIR /var/www/app
