FROM php:7.2.2-apache

RUN a2enmod rewrite
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN chown www-data:www-data /var/www/html/
EXPOSE 80 8877 3307