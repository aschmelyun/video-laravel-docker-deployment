FROM php:8.2-fpm-alpine

# Probaly in the future I will change this path to /usr/share/nginx/html/
WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql
