FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libpq-dev \
    && docker-php-ext-install \
    pdo_pgsql \
    intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

ARG UID=1000
ARG GID=1000

RUN usermod -u ${UID} www-data && \
    groupmod -g ${GID} www-data