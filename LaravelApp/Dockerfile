FROM php:7.1-apache

EXPOSE 8082

RUN set -ex apk --no-cache add postgresql-dev libpq-dev
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql mbstring

RUN mkdir /var/php -p
WORKDIR /var/php

# composer入れる(2行目はバージョンによってハッシュ値が変わるので作成時の最新のものを入れるべき)
# => https://composer.github.io/pubkeys.html
RUN php -r "readfile('https://getcomposer.org/installer');" > composer-setup.php
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --filename=composer
RUN php -r "unlink('composer-setup.php');"
RUN mv composer /usr/local/bin/composer

RUN apt-get install -y vim zip unzip libzip-dev
RUN pecl install zip

COPY ./config/php.ini /usr/local/etc/php/

RUN composer global require "laravel/installer"
ENV PATH /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/root/.composer/vendor/bin

# laravel new blog
# chmod 777 -R blog/storage
# chmod 777 -R blog/bootstrap/cache

COPY ./config/laravelapp_apache2.conf /etc/apache2/sites-available/000-default.conf
COPY ./config/laravelapp_apache2_ports.conf /etc/apache2/ports.conf
WORKDIR /etc/apache2/mods-enabled
RUN ln -s ../mods-available/rewrite.load rewrite.load

WORKDIR /var/www/html/blog

## After the container is built do below steps.
# composer install
# cp ./src/blog/.env.example ./src/blog/.env
# php artisan key:generate
