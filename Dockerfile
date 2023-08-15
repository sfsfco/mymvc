# Use an official PHP image as the base image
FROM php:8.0-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Enable mod_rewrite and copy the .htaccess file
RUN a2enmod rewrite
COPY public/.htaccess /var/www/html/.htaccess

# Copy your application files into the container
COPY . /var/www/html

# Copy .env file
COPY .env /var/www/html/.env

# Install PHP extensions and dependencies
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        default-mysql-client \
        && \
    docker-php-ext-install pdo pdo_mysql zip && \
    rm -rf /var/lib/apt/lists/*

# Expose port 80 to the host
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]