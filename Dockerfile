# Use an official PHP image from the Docker Hub
FROM php:7.4-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy the PHP script and HTML form to the container
COPY index.html /var/www/html/
COPY test_connection.php /var/www/html/

# Expose port 80 to be accessible from outside the container
EXPOSE 80
