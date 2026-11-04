#!/usr/bin/env bash
# ==============================================================================
# EssenTechs Production EC2 Deployment Script
# Domain: essentechs.com
# ==============================================================================

set -e

echo "🚀 [1/8] Starting EssenTechs deployment..."

# Navigate to project directory (default: /var/www/essentechs)
PROJECT_DIR="${1:-/var/www/essentechs}"
cd "$PROJECT_DIR"

echo "📥 [2/8] Pulling latest code from git..."
git fetch origin main
git reset --hard origin/main

echo "📦 [3/8] Installing production composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

echo "🗄️ [4/8] Running database migrations..."
php artisan migrate --force

echo "🌱 [5/8] Seeding initial ad landing pages (if needed)..."
php artisan db:seed --class=AdLandingPageSeeder --force

echo "🔗 [6/8] Ensuring public storage symlink..."
php artisan storage:link || true

echo "⚡ [7/8] Caching configuration, routes, and views for high performance..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "🔒 [8/8] Setting proper file permissions for web server..."
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache

# Reload web server & PHP-FPM
if systemctl is-active --quiet php8.3-fpm; then
    sudo systemctl reload php8.3-fpm
elif systemctl is-active --quiet php8.2-fpm; then
    sudo systemctl reload php8.2-fpm
fi

if systemctl is-active --quiet nginx; then
    sudo systemctl reload nginx
elif systemctl is-active --quiet apache2; then
    sudo systemctl reload apache2
fi

echo "✅ [DONE] EssenTechs deployed successfully on EC2!"
echo "🌐 Visit: https://essentechs.com and https://essentechs.com/ads-washing-machine-repair/"
