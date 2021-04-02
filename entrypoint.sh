#!/bin/sh
chmod +x env
cp env .env
composer self-update
composer install
# composer update