FROM php:8.2-fpm AS php-base

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install sockets pdo_mysql \
    && docker-php-ext-install pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

FROM composer:latest AS composer-stage

FROM php-base

COPY --from=composer-stage /usr/bin/composer /usr/bin/composer

RUN chmod +x /usr/bin/composer

WORKDIR /var/www/html

COPY . .

CMD ["php-fpm"]

