# --------- ETAPA 1: Construir Vite ----------
FROM node:20 as nodebuilder

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


# --------- ETAPA 2: PHP ----------
FROM php:8.3-cli

WORKDIR /app

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install zip

# Copiar proyecto
COPY . .

# Copiar carpeta build generada por Node
COPY --from=nodebuilder /app/public/build ./public/build

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000
