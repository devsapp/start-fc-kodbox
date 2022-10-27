#!/usr/bin/env bash
set +e

ln -s /mnt/auto/.kodbox-1.35.031 /wwwroot
mkdir -p /wwwroot/sessions
chown -R root:root /wwwroot

mkdir -p /tmp/log/nginx/
mkdir -p /tmp/var/nginx/
mkdir -p /tmp/var/sessions/

echo "start php-fpm"
php-fpm7.4 -R -c /code/php.ini -y /code/php-fpm.conf

echo "start nginx"
nginx -c /code/nginx.conf -g 'daemon off;'