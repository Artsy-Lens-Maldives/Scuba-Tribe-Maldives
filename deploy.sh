#!/bin/sh

cd /var/www/laravel/Scuba-Tribe-Maldives
git pull
composer install --optimize-autoloader
yarn install
yarn run production
php artisan migrate
php artisan optimize
php artisan route:optimize
php artisan cache:clear