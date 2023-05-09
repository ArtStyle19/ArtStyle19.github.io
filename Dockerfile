FROM php:8.2-apache

COPY . /var/www/html/

WORKDIR /var/www/html/

RUN apt-get update -y
RUN docker-php-ext-install mysqli
