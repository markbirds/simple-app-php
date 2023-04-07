# Use the official PHP image as the base image
FROM php:8.1-apache

# Set the working directory
WORKDIR /var/www/html/simple-app-php

# Copy the contents of the current directory to working directory
COPY . .

# Install the required PHP extensions and MySQL/MariaDB client
RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN apt-get install -y mariadb-client

# Expose port 80
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
