FROM php:7.3-apache

RUN apt-get update && apt-get install -y libzip-dev zip unzip

RUN docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer global require laravel/installer

CMD ["apachectl", "-D", "FOREGROUND"]