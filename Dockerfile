# Use an official PHP image from Docker Hub
FROM php:8.2-apache

# Copy all files from your repo to the Apache web root
COPY . /var/www/html/

# Expose the port Render expects
EXPOSE 10000

# Start Apache in the foreground
CMD ["apache2-foreground"]
