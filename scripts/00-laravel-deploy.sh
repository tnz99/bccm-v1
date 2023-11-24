#!/usr/bin/env bash
echo "Running composer"
# composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

# echo "Generate Applicaiton Key..."
# php artisan key:generate

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Caching views"
php artisan view:cache

# echo "Installing migration.."
# php artisan migrate:install

# echo "Running migrations..."
# php artisan migrate --force

# echo "Seeding Admins..."
# php artisan db:seed
