FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

# Install system dependencies
RUN apk update && apk add --no-cache \
    build-base autoconf automake libtool \
    curl \
    libzip-dev \
    zlib-dev \
    icu-dev \
    libpng-dev libjpeg-turbo-dev freetype-dev \
    oniguruma-dev \
    libxml2-dev libxslt-dev \
    sqlite-dev \
    mysql-client \
    nodejs \
    npm \
    git

# Install PHP extensions
RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN docker-php-ext-install -j$(nproc) bcmath
RUN docker-php-ext-install -j$(nproc) exif
RUN docker-php-ext-install -j$(nproc) zip
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install -j$(nproc) opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files FIRST
COPY . .

# Create a default .env file from .env.example
RUN cp .env.example .env

# --- PERMISSION ADJUSTMENT ---
# Ensure storage and bootstrap/cache directories exist and are writable by www-data
# Do this BEFORE running composer install as www-data or npm build.
# Run as root to ensure chown can operate, then switch to www-data.
RUN mkdir -p storage/framework/{sessions,views,cache} storage/logs \
    && mkdir -p bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Set permissions for Composer cache (still good to do)
RUN mkdir -p /var/www/.composer && chown -R www-data:www-data /var/www/.composer

# Switch to www-data user for composer install
USER www-data
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Switch back to root for global npm operations (if needed)
USER root
RUN npm install && npm run build

# Re-ensure permissions AFTER npm build, just in case npm alters anything (unlikely for storage/bootstrap)
# but it's a safe measure.
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache
# --- END PERMISSION ADJUSTMENT ---


# Switch back to www-data for running the application
USER www-data

EXPOSE 9000
CMD ["php-fpm"]