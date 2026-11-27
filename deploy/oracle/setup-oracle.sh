#!/usr/bin/env bash
# ==============================================================================
# EssenTechs: one-time server setup for an Oracle Cloud (or any Ubuntu 22.04/24.04) VM
#
# Usage (as the default "ubuntu" user, NOT root):
#   bash setup-oracle.sh [domain]            # default domain: essentechs.com
#
# Optional env vars:
#   REPO_URL     git URL of the project (default: GitHub HTTPS URL below)
#   PROJECT_DIR  default /var/www/essentechs
#
# What it does:
#   1. Installs nginx, PHP 8.3 + extensions, Composer, Node.js, sqlite3, certbot
#   2. Opens ports 80/443 in Oracle's built-in iptables firewall
#   3. Clones the project and configures nginx (site + /mcp/ proxy)
#   4. Installs the EssenTechs MCP server as a systemd service (essentechs-mcp)
# It does NOT copy live data. Copy .env, database/database.sqlite and
# storage/app/public from the old server, then run deploy-ec2.sh.
# ==============================================================================
set -euo pipefail

DOMAIN="${1:-essentechs.com}"
REPO_URL="${REPO_URL:-https://github.com/sunnyprajapati7088/essentech.git}"
PROJECT_DIR="${PROJECT_DIR:-/var/www/essentechs}"
MCP_ENV_FILE="/etc/essentechs-mcp.env"
PHP_VER="8.3"

if [ "$(id -u)" -eq 0 ]; then
    echo "Run this as the ubuntu user (it uses sudo where needed), not as root." >&2
    exit 1
fi

main() {
    echo "📦 [1/7] Installing packages..."
    sudo apt-get update -y
    sudo apt-get install -y software-properties-common ca-certificates curl git unzip sqlite3 nginx \
        certbot python3-certbot-nginx netfilter-persistent iptables-persistent
    if ! apt-cache show "php${PHP_VER}-fpm" >/dev/null 2>&1; then
        # Ubuntu 22.04 ships PHP 8.1; Laravel 12 here needs 8.3
        sudo add-apt-repository -y ppa:ondrej/php
        sudo apt-get update -y
    fi
    sudo apt-get install -y "php${PHP_VER}-fpm" "php${PHP_VER}-cli" "php${PHP_VER}-sqlite3" "php${PHP_VER}-mbstring" \
        "php${PHP_VER}-xml" "php${PHP_VER}-curl" "php${PHP_VER}-gd" "php${PHP_VER}-zip" "php${PHP_VER}-intl" \
        "php${PHP_VER}-bcmath" composer nodejs npm
    echo "   PHP: $(php -r 'echo PHP_VERSION;')  Node: $(node -v)  Composer: $(composer --version 2>/dev/null | cut -d' ' -f3)"
    local node_major
    node_major="$(node -p 'process.versions.node.split(".")[0]')"
    if [ "$node_major" -lt 18 ]; then
        echo "❌ Node.js $node_major is too old for the MCP server (needs 18+). Use an Ubuntu 24.04 image." >&2
        exit 1
    fi

    echo "🔓 [2/7] Opening ports 80/443 in the VM firewall (Oracle images block them by default)..."
    for port in 80 443; do
        if ! sudo iptables -C INPUT -p tcp --dport "$port" -m state --state NEW -j ACCEPT 2>/dev/null; then
            # Insert before Oracle's catch-all REJECT rule (or append if there is none)
            local reject_line
            reject_line="$(sudo iptables -L INPUT --line-numbers -n | awk '$2=="REJECT"{print $1; exit}')"
            if [ -n "$reject_line" ]; then
                sudo iptables -I INPUT "$reject_line" -p tcp --dport "$port" -m state --state NEW -j ACCEPT
            else
                sudo iptables -A INPUT -p tcp --dport "$port" -m state --state NEW -j ACCEPT
            fi
        fi
    done
    sudo netfilter-persistent save

    echo "📥 [3/7] Getting the code..."
    sudo mkdir -p "$PROJECT_DIR"
    sudo chown "$USER":www-data "$PROJECT_DIR"
    if [ ! -d "$PROJECT_DIR/.git" ]; then
        git clone "$REPO_URL" "$PROJECT_DIR"
    else
        echo "   $PROJECT_DIR already has the repo, skipping clone"
    fi

    echo "🌐 [4/7] Configuring nginx..."
    sudo tee /etc/nginx/sites-available/essentechs >/dev/null <<NGINX
server {
    listen 80 default_server;
    listen [::]:80 default_server;
    server_name ${DOMAIN} www.${DOMAIN} _;

    root ${PROJECT_DIR}/public;
    index index.php;
    charset utf-8;

    # MCP images are sent as base64 (5MB image ≈ 7MB JSON)
    client_max_body_size 20M;

    # EssenTechs MCP server (AI connector): https://${DOMAIN}/mcp/<MCP_ACCESS_KEY>
    location /mcp/ {
        proxy_pass http://127.0.0.1:3333;
        proxy_http_version 1.1;
        proxy_set_header Host \$host;
        proxy_set_header X-Forwarded-For \$proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto \$scheme;
        proxy_buffering off;
        proxy_read_timeout 120s;
    }

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    location ~ \.php\$ {
        fastcgi_pass unix:/run/php/php${PHP_VER}-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;
        include fastcgi_params;
        fastcgi_hide_header X-Powered-By;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
NGINX
    sudo ln -sf /etc/nginx/sites-available/essentechs /etc/nginx/sites-enabled/essentechs
    sudo rm -f /etc/nginx/sites-enabled/default
    sudo nginx -t
    sudo systemctl enable --now nginx "php${PHP_VER}-fpm"
    sudo systemctl reload nginx

    echo "🤖 [5/7] Installing MCP server dependencies..."
    (cd "$PROJECT_DIR/mcp/essentechs-blog" && npm ci --omit=dev --no-audit --no-fund)

    echo "🔑 [6/7] Creating MCP config ($MCP_ENV_FILE)..."
    if [ ! -f "$MCP_ENV_FILE" ]; then
        local key
        key="$(php -r 'echo bin2hex(random_bytes(24));')"
        sudo tee "$MCP_ENV_FILE" >/dev/null <<ENV
ESSENTECHS_API_URL=https://${DOMAIN}
# Must equal BLOG_API_TOKEN in ${PROJECT_DIR}/.env (filled in after you copy .env)
ESSENTECHS_API_TOKEN=
MCP_ACCESS_KEY=${key}
MCP_HTTP_PORT=3333
ENV
        sudo chmod 600 "$MCP_ENV_FILE"
    else
        echo "   $MCP_ENV_FILE already exists, keeping it"
    fi
    sync_mcp_token

    echo "⚙️  [7/7] Installing the essentechs-mcp systemd service..."
    sudo tee /etc/systemd/system/essentechs-mcp.service >/dev/null <<UNIT
[Unit]
Description=EssenTechs MCP server (blogs + ad landing pages)
After=network-online.target nginx.service
Wants=network-online.target

[Service]
Type=simple
User=www-data
Group=www-data
WorkingDirectory=${PROJECT_DIR}/mcp/essentechs-blog
EnvironmentFile=${MCP_ENV_FILE}
ExecStart=/usr/bin/node server.js --http
Restart=always
RestartSec=5
NoNewPrivileges=true
ProtectSystem=full
ProtectHome=true
PrivateTmp=true

[Install]
WantedBy=multi-user.target
UNIT
    sudo systemctl daemon-reload
    sudo systemctl enable essentechs-mcp
    sudo systemctl restart essentechs-mcp

    echo
    echo "✅ Server setup finished."
    echo "Public IP: $(curl -s -4 https://ifconfig.me || echo '<check Oracle console>')"
    echo
    echo "Next steps:"
    echo "  1. Copy live data from the old server into ${PROJECT_DIR}:"
    echo "       .env   database/database.sqlite   storage/app/public/"
    echo "  2. bash ${PROJECT_DIR}/deploy-ec2.sh ${PROJECT_DIR}"
    echo "  3. bash ${PROJECT_DIR}/deploy/oracle/setup-oracle.sh ${DOMAIN}   (re-run: syncs the MCP token)"
    echo "  4. Point DNS A records for ${DOMAIN} and www.${DOMAIN} to this IP, then:"
    echo "       sudo certbot --nginx -d ${DOMAIN} -d www.${DOMAIN}"
    echo "  5. MCP connector URL:  https://${DOMAIN}/mcp/\$(sudo grep MCP_ACCESS_KEY ${MCP_ENV_FILE} | cut -d= -f2)"
}

# Copy BLOG_API_TOKEN from the site's .env into the MCP config (creating one if missing).
sync_mcp_token() {
    local env_file="$PROJECT_DIR/.env"
    if [ ! -f "$env_file" ]; then
        echo "   No $env_file yet; MCP token will be synced when you re-run this after copying .env"
        return
    fi
    if ! grep -q '^BLOG_API_TOKEN=.\{32,\}' "$env_file"; then
        sed -i '/^BLOG_API_TOKEN=/d' "$env_file"
        echo "BLOG_API_TOKEN=$(php -r 'echo bin2hex(random_bytes(32));')" >> "$env_file"
        echo "   Added BLOG_API_TOKEN to $env_file"
        (cd "$PROJECT_DIR" && php artisan config:cache >/dev/null 2>&1 || true)
    fi
    local token
    token="$(grep '^BLOG_API_TOKEN=' "$env_file" | tail -1 | cut -d= -f2-)"
    sudo sed -i "s|^ESSENTECHS_API_TOKEN=.*|ESSENTECHS_API_TOKEN=${token}|" "$MCP_ENV_FILE"
    echo "   MCP token synced with the site's BLOG_API_TOKEN"
}

main "$@"
