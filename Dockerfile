FROM node:20

# Instalar PHP
RUN apt-get update && apt-get install -y \
    php8.3 \
    php8.3-cli \
    php8.3-mbstring \
    php8.3-xml \
    php8.3-bcmath \
    php8.3-curl \
    php8.3-zip \
    unzip \
    curl \
    git

WORKDIR /app

COPY . .

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000
