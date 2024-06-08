# Use the official WordPress image as the base image
FROM wordpress:6.2.2-php8.0-apache

# Install WP-CLI
RUN apt-get update && apt-get install -y wget less mariadb-client \
    && wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

# Enable Apache modules
RUN a2enmod rewrite

# Copy the wp-app directory
COPY wp-app /var/www/html/wp-app

# Copy the ACF Pro plugin and custom theme into the appropriate directories
COPY wp-content/plugins/advanced-custom-fields-pro /var/www/html/wp-content/plugins/advanced-custom-fields-pro
COPY wp-content/themes/my-theme /var/www/html/wp-content/themes/my-theme

# Copy the wp-config.php file
COPY wp-config /var/www/html/wp-config

# Copy the setup script
COPY wp-exec/setup.sh /usr/local/bin/setup.sh
RUN chmod +x /usr/local/bin/setup.sh

# Copy Apache config
COPY wp-root/apache-config.conf /etc/apache2/conf-available/servername.conf
RUN ln -s /etc/apache2/conf-available/servername.conf /etc/apache2/conf-enabled/servername.conf

# Ensure the ownership and permissions are correct
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/my-theme \
    && chown -R www-data:www-data /var/www/html/wp-content/plugins/advanced-custom-fields-pro

# Set working directory
WORKDIR /var/www/html

# Run the setup script when the container starts
CMD ["setup.sh"]


