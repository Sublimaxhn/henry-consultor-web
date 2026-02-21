# -------- STAGE 1: Build Vite --------
FROM node:20 AS nodebuilder

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


# -------- STAGE 2: PHP --------
FROM php:8.3-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install zip

COPY . .

# Copiar build generado
COPY --from=nodebuilder /app/public/build ./public/build

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000

CMD php -S 0.0.0.0:10000 public/index.php


