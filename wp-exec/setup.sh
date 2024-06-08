#!/bin/bash

echo "Starting setup script..."

# Wait for the database to be ready
until mysqladmin ping -h "${WORDPRESS_DB_HOST%:*}" --user="${WORDPRESS_DB_USER}" --password="$WORDPRESS_DB_PASSWORD" --silent; do
  echo "Waiting for database connection..."
  sleep 3
done

echo "Database connection established."

# Create the database if it doesn't exist
echo "Creating database if it doesn't exist..."
mysql -h "${WORDPRESS_DB_HOST%:*}" -u"${WORDPRESS_DB_USER}" -p"$WORDPRESS_DB_PASSWORD" -e "CREATE DATABASE IF NOT EXISTS $WORDPRESS_DB_NAME;"

# Verify the database creation and permissions
echo "Verifying database creation and permissions..."
if mysql -h "${WORDPRESS_DB_HOST%:*}" -u"$WORDPRESS_DB_USER" -p"$WORDPRESS_DB_PASSWORD" -e "USE $WORDPRESS_DB_NAME;" 2> /dev/null; then
  echo "Database $WORDPRESS_DB_NAME exists and is accessible."
else
  echo "Error: Unable to access the database $WORDPRESS_DB_NAME."
  exit 1
fi

# Download and install WordPress if not already installed
if [ ! -f wp-config.php ]; then
  echo "Downloading and installing WordPress..."
  wp core download --allow-root
  wp config create --dbname="$WORDPRESS_DB_NAME" --dbuser="$WORDPRESS_DB_USER" --dbpass="$WORDPRESS_DB_PASSWORD" --dbhost="${WORDPRESS_DB_HOST%:*}" --allow-root
  wp core install --url="$WORDPRESS_URL" --title="$WORDPRESS_TITLE" --admin_user="$WORDPRESS_ADMIN_USER" --admin_password="$WORDPRESS_ADMIN_PASSWORD" --admin_email="$WORDPRESS_ADMIN_EMAIL" --skip-email --allow-root
  wp theme activate my-theme --allow-root
fi

echo "Setup complete. Starting Apache..."

# Start Apache in foreground
apache2-foreground
