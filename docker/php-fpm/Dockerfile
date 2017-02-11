FROM php:5.5-fpm

ENV TERM xterm
ENV DOCKER 1
RUN apt-get update \
    && apt-get install -y wget nano less git zip unzip mysql-client libicu-dev

#RUN pecl install xdebug \
#    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN docker-php-ext-install pdo_mysql opcache intl
ADD custom.ini /usr/local/etc/php/conf.d/

RUN wget https://getcomposer.org/composer.phar -O /usr/local/bin/composer \
    && chmod a+x /usr/local/bin/composer

RUN useradd -ms /bin/bash local && usermod -G www-data local

WORKDIR /var/www/html
