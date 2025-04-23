FROM php:8.2-apache

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite

# Copy app files into the container
COPY . /var/www/html/

# Optional: open port 80
EXPOSE 80
