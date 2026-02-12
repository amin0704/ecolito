FROM php:8.4-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install \
        pdo_mysql \
        mysqli \
        intl \
        zip \
        opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Permissions
RUN chown -R www-data:www-data /var/www/html
WORKDIR /var/www/html
