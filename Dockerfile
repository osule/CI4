FROM php:7.2-apache as builder

LABEL maintainer Oluwafemi Sule <oluwafemisule@outlook.com>

RUN apt-get update; \
    apt-get install -y --no-install-recommends build-essential git less libssl-dev libzip-dev libmcrypt-dev openssh-client zip unzip libxml2-dev; \
    rm -rf /var/lib/apt/lists/*; \
    pecl install mcrypt-1.0.1; \
    docker-php-ext-enable mcrypt; \
    docker-php-ext-configure intl; \
    docker-php-ext-install intl; \
    docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd; \
    docker-php-ext-install pcntl pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /usr/src/app/
COPY composer.json composer.lock ./
RUN composer install
COPY . .

EXPOSE 18080
