#!/bin/sh
rm -rf composer.lock
composer update
composer install