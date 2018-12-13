FROM php:5.6-apache

RUN apt-get update \
  && apt-get install -y libfreetype6-dev libmcrypt-dev \
  && docker-php-ext-install pdo_mysql mysqli
COPY ./localhost.conf  /etc/apache2/sites-available/

RUN mkdir -p /var/www/html
RUN chmod -R www-data: /var/www/html

RUN service apache2 restart
WORKDIR /etc/apache2/sites-available/
RUN a2ensite localhost.conf 

