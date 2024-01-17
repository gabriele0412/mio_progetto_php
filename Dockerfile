FROM php:7.4-apache
RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install pdo pdo_mysql
COPY . /var/www/html

