# Use PHP 8.0 as base image
FROM php:8.0-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    nodejs \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy package.json and package-lock.json
COPY package*.json ./

# Install Node dependencies
RUN npm install

# Copy existing application directory
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Compile assets
RUN npm run production

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/public

# Expose port 8000
EXPOSE 8000

# Start PHP-FPM
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"] 