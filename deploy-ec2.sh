#!/usr/bin/env bash
# ==============================================================================
# EssenTechs Production EC2 Deployment Script
# Domain: essentechs.com
#
# Usage:  bash deploy-ec2.sh [/var/www/essentechs]
#
# The live .env and database/database.sqlite are NOT in git. They are
# backed up before every deploy (to $BACKUP_DIR) and restored if missing,
# so a deploy can never overwrite or delete live data.
# ==============================================================================

set -euo pipefail

PROJECT_DIR="${1:-/var/www/essentechs}"
BACKUP_DIR="${BACKUP_DIR:-$HOME/essentechs-backups}"
KEEP_BACKUPS="${KEEP_BACKUPS:-20}"
STAMP="$(date +%Y%m%d-%H%M%S)"
DB_FILE="database/database.sqlite"

backup_state() {
    mkdir -p "$BACKUP_DIR"
    if [ -f .env ]; then
        cp -p .env "$BACKUP_DIR/env-$STAMP"
    fi
    if [ -f "$DB_FILE" ]; then
        local dest="$BACKUP_DIR/database-$STAMP.sqlite"
        # Prefer sqlite3's online backup (consistent while the site is live); fall back to a copy.
        if command -v sqlite3 >/dev/null 2>&1; then
            sqlite3 "$DB_FILE" ".backup '$dest'" 2>/dev/null || true
        fi
        if [ ! -s "$dest" ]; then
            cp -p "$DB_FILE" "$dest"
        fi
        if [ ! -s "$dest" ] && [ -s "$DB_FILE" ]; then
            echo "❌ Database backup failed; aborting deploy so no data is lost." >&2
            exit 1
        fi
    fi
    if [ -f .env ] && [ ! -s "$BACKUP_DIR/env-$STAMP" ] && [ -s .env ]; then
        echo "❌ .env backup failed; aborting deploy." >&2
        exit 1
    fi
    echo "   Backups saved in $BACKUP_DIR (stamp $STAMP)"
}

update_code() {
    git fetch origin main
    git reset --hard origin/main
}

# Restore live files that git removed (first deploy after they were untracked).
restore_state() {
    if [ ! -f .env ] && [ -f "$BACKUP_DIR/env-$STAMP" ]; then
        cp -p "$BACKUP_DIR/env-$STAMP" .env
        echo "   Restored .env from backup"
    fi
    if [ ! -f "$DB_FILE" ] && [ -f "$BACKUP_DIR/database-$STAMP.sqlite" ]; then
        cp -p "$BACKUP_DIR/database-$STAMP.sqlite" "$DB_FILE"
        echo "   Restored $DB_FILE from backup"
    fi
    if [ ! -f .env ]; then
        echo "❌ .env is missing and no backup exists. Create it (see .env.production.example) and re-run." >&2
        exit 1
    fi
}

prune_backups() {
    for prefix in env- database-; do
        ls -1t "$BACKUP_DIR"/"$prefix"* 2>/dev/null | tail -n +$((KEEP_BACKUPS + 1)) | xargs -r rm -f
    done
}

main() {
    echo "🚀 [1/9] Starting EssenTechs deployment..."
    cd "$PROJECT_DIR"

    echo "💾 [2/9] Backing up live .env and database..."
    backup_state

    php artisan down --retry=15 >/dev/null 2>&1 || true
    trap 'php artisan up >/dev/null 2>&1 || true' EXIT

    echo "📥 [3/9] Pulling latest code from git..."
    update_code
    restore_state

    echo "📦 [4/9] Installing production composer dependencies..."
    composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-req=php+

    echo "🗄️ [5/9] Running database migrations..."
    php artisan migrate --force

    echo "🌱 [6/9] Seeding initial ad landing pages (only if missing)..."
    php artisan db:seed --class=AdLandingPageSeeder --force

    echo "🔗 [7/9] Ensuring public storage symlink..."
    php artisan storage:link || true

    echo "⚡ [8/9] Caching configuration, routes, and views..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache

    echo "🔒 [9/9] Setting file permissions for the web server (including SQLite)..."
    sudo chown -R www-data:www-data storage bootstrap/cache database
    sudo chmod -R 775 storage bootstrap/cache database
    if [ -f "$DB_FILE" ]; then
        sudo chmod 664 "$DB_FILE"
    fi

    # Reload web server & PHP-FPM
    for fpm in php8.5-fpm php8.4-fpm php8.3-fpm php8.2-fpm; do
        if systemctl is-active --quiet "$fpm"; then
            sudo systemctl reload "$fpm"
            break
        fi
    done
    if systemctl is-active --quiet nginx; then
        sudo systemctl reload nginx
    elif systemctl is-active --quiet apache2; then
        sudo systemctl reload apache2
    fi

    # EssenTechs MCP server (only on servers where it is installed as a service)
    if systemctl cat essentechs-mcp.service >/dev/null 2>&1; then
        echo "🤖 Updating and restarting the MCP server..."
        (cd mcp/essentechs-blog && npm ci --omit=dev --no-audit --no-fund)
        sudo systemctl restart essentechs-mcp
    fi

    php artisan up >/dev/null 2>&1 || true
    prune_backups

    echo "✅ [DONE] EssenTechs deployed successfully on EC2!"
    echo "🌐 Visit: https://essentechs.com"
}

# Only run when executed (not when sourced for testing). Wrapping everything in
# main() also means bash has read the whole script before git replaces this file.
if [[ "${BASH_SOURCE[0]}" == "$0" ]]; then
    main "$@"
fi
