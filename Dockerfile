FROM php:7.3.0-fpm-alpine3.8

# Install git and composer
RUN apk --update --no-cache add git
RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/composer

# Config php.ini
COPY php.conf/php.ini /usr/local/etc/php
COPY php.conf/php-fpm.conf /usr/local/etc/
COPY php.conf/php-fpm-www.conf /usr/local/etc/php-fpm.d/www.conf
