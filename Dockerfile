FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy website files to Apache web root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

CMD ["apache2-foreground"]
