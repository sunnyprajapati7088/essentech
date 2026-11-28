#!/usr/bin/env bash
# ==============================================================================
# EssenTechs: nginx speed + security settings for the live site (run AFTER certbot)
#
# Usage (on the server, as your normal user, NOT root):
#   bash nginx-tune.sh [domain]        # default domain: essentechs.com
#
# What it adds (Lighthouse: text compression, cache lifetimes, HTTP/2, headers):
#   1. gzip for CSS/JS/JSON/SVG/XML          -> /etc/nginx/conf.d/essentechs-gzip.conf
#   2. 1-year browser cache for static files -> /etc/nginx/snippets/essentechs-perf.conf
#      (safe: the site adds ?v=<file time> to CSS/JS, so changes still show)
#   3. X-Content-Type-Options, X-Frame-Options, Referrer-Policy headers
#   4. HTTP/2 on the HTTPS listen lines
# Every changed file is backed up to ~/essentechs-backups first. If `nginx -t`
# fails, everything is put back and nginx is not reloaded. Safe to re-run.
# ==============================================================================
set -euo pipefail

DOMAIN="${1:-essentechs.com}"
GZIP_CONF="/etc/nginx/conf.d/essentechs-gzip.conf"
SNIPPET="/etc/nginx/snippets/essentechs-perf.conf"
BACKUP_DIR="${BACKUP_DIR:-$HOME/essentechs-backups}"
STAMP="$(date +%Y%m%d-%H%M%S)"

die() { echo "❌ $*" >&2; exit 1; }
[ "$(id -u)" -ne 0 ] || die "Run this as your normal user (e.g. ubuntu), not root. It uses sudo where needed."
command -v nginx >/dev/null 2>&1 || die "nginx is not installed on this server."
mkdir -p "$BACKUP_DIR"

# Remember what existed before, so a failed test can put everything back.
restore=()      # "backup|target" pairs
remove=()       # new files to delete on failure
save() {        # save <file>: back it up (or mark it as new)
    if sudo test -f "$1"; then
        local b="$BACKUP_DIR/nginx-$(basename "$1")-$STAMP"
        sudo cp -p "$1" "$b"
        restore+=("$b|$1")
    else
        remove+=("$1")
    fi
}
rollback() {
    local pair
    for pair in "${restore[@]}"; do sudo cp -p "${pair%%|*}" "${pair#*|}"; done
    for f in "${remove[@]}"; do sudo rm -f "$f"; done
}

# ------------------------------------------------------------------------------
echo "🗜️  [1/4] gzip for CSS/JS/SVG/JSON..."
# Only add directives that nginx.conf (or another conf.d file) doesn't already
# set, otherwise nginx refuses to start with "duplicate directive".
others=(/etc/nginx/nginx.conf)
for f in /etc/nginx/conf.d/*.conf; do [ -e "$f" ] && [ "$f" != "$GZIP_CONF" ] && others+=("$f"); done
has() { sudo grep -hqE "^[[:space:]]*$1[[:space:]]" "${others[@]}"; }
gz=""
has "gzip"            || gz+=$'gzip on;\n'
has "gzip_vary"       || gz+=$'gzip_vary on;\n'
has "gzip_proxied"    || gz+=$'gzip_proxied any;\n'
has "gzip_comp_level" || gz+=$'gzip_comp_level 6;\n'
has "gzip_min_length" || gz+=$'gzip_min_length 1024;\n'
has "gzip_types"      || gz+=$'gzip_types text/plain text/css text/xml text/javascript application/javascript application/json application/xml application/rss+xml application/manifest+json image/svg+xml image/x-icon;\n'
save "$GZIP_CONF"
printf '# EssenTechs: compress text files (added by nginx-tune.sh)\n%s' "$gz" | sudo tee "$GZIP_CONF" >/dev/null

# ------------------------------------------------------------------------------
echo "📦 [2/4] Cache + security headers snippet..."
sudo mkdir -p "$(dirname "$SNIPPET")"
save "$SNIPPET"
sudo tee "$SNIPPET" >/dev/null <<'NGINX'
# EssenTechs speed + security settings (added by nginx-tune.sh)
add_header X-Content-Type-Options "nosniff" always;
add_header X-Frame-Options "SAMEORIGIN" always;
add_header Referrer-Policy "strict-origin-when-cross-origin" always;

# Static files: cache for a year. CSS/JS URLs carry ?v=<file time>, so a deploy
# still reaches visitors. (A location with add_header does not inherit the
# server-level ones, so they are repeated here.)
location ~* \.(?:css|js|mjs|jpe?g|png|gif|ico|webp|avif|svg|woff2?|ttf|eot|map)$ {
    add_header Cache-Control "public, max-age=31536000, immutable" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header Referrer-Policy "strict-origin-when-cross-origin" always;
    access_log off;
    try_files $uri =404;
}
NGINX

# ------------------------------------------------------------------------------
echo "🌐 [3/4] Adding the snippet and HTTP/2 to the HTTPS server block..."
mapfile -t candidates < <(
    for f in /etc/nginx/sites-enabled/* /etc/nginx/conf.d/*.conf; do
        [ -e "$f" ] && readlink -f "$f"
    done | sort -u
)
nginx_ver="$(nginx -v 2>&1 | grep -oE '[0-9]+\.[0-9]+\.[0-9]+' | head -1)"
# nginx 1.25.1+ uses "http2 on;", older versions use "listen ... http2".
new_http2=0
[ "$(printf '%s\n1.25.1\n' "$nginx_ver" | sort -V | head -1)" = "1.25.1" ] && new_http2=1

found=0
for f in "${candidates[@]}"; do
    sudo grep -q "server_name[^;]*${DOMAIN}" "$f" || continue
    sudo grep -qE "^[[:space:]]*listen[^;]*443" "$f" || continue
    found=1
    tmp="$(mktemp)"
    # In each server block that listens on 443 for the domain: include the
    # snippet just before the closing brace (after the site's own locations,
    # so "deny hidden files" keeps priority), and turn on HTTP/2.
    sudo cat "$f" | awk -v inc="    include ${SNIPPET};" -v dom="$DOMAIN" -v newh2="$new_http2" '
        function flush(   i, ok, hasinc, hash2) {
            ok = is443 && hasdom
            for (i = 1; i <= n; i++) {
                if (index(buf[i], "essentechs-perf.conf")) hasinc = 1
                if (buf[i] ~ /^[[:space:]]*http2[[:space:]]+on/) hash2 = 1
            }
            for (i = 1; i <= n; i++) {
                line = buf[i]
                if (ok && !newh2 && line ~ /^[[:space:]]*listen[^;]*443[^;]*ssl/ && line !~ /http2/)
                    sub(/ssl/, "ssl http2", line)
                if (ok && i == n) {
                    if (newh2 && !hash2) print "    http2 on;"
                    if (!hasinc) print inc
                }
                print line
            }
            n = 0; is443 = 0; hasdom = 0
        }
        {
            line = $0
            if (!inblock && depth == 0 && line ~ /^[[:space:]]*server[[:space:]]*\{/) inblock = 1
            if (inblock) {
                buf[++n] = line
                if (line ~ /^[[:space:]]*listen[^;]*443/) is443 = 1
                if (line ~ /^[[:space:]]*server_name[[:space:]]/ && index(line, dom)) hasdom = 1
            } else print line
            t = line; sub(/#.*/, "", t)
            depth += gsub(/\{/, "{", t) - gsub(/\}/, "}", t)
            if (inblock && depth == 0) { flush(); inblock = 0 }
        }
        END { if (n) flush() }' > "$tmp"
    if ! cmp -s "$tmp" <(sudo cat "$f"); then
        save "$f"
        sudo cp "$tmp" "$f"
        echo "   Updated $f"
    else
        echo "   $f already has these settings"
    fi
    rm -f "$tmp"
done
if [ "$found" -eq 0 ]; then
    rollback
    die "No nginx server block with 'listen 443' and 'server_name ${DOMAIN}' found. Run certbot first:
   sudo certbot --nginx -d ${DOMAIN} -d www.${DOMAIN} --redirect"
fi

# ------------------------------------------------------------------------------
echo "🧪 [4/4] Testing and reloading nginx..."
if ! sudo nginx -t; then
    rollback
    die "nginx config test failed, so every change was put back. The site is unchanged."
fi
sudo systemctl reload nginx
sleep 1

# ------------------------------------------------------------------------------
echo
echo "Checks:"
R=(--resolve "${DOMAIN}:443:127.0.0.1")
css="$(curl -sI "${R[@]}" -H 'Accept-Encoding: gzip' "https://${DOMAIN}/css/style.css" || true)"
home="$(curl -sI "${R[@]}" "https://${DOMAIN}/" || true)"
ok() { if [ "$1" = yes ]; then echo "   ✅ $2"; else echo "   ⚠️  $2: not seen"; fi; }
ok "$(grep -qi '^content-encoding: gzip' <<<"$css" && echo yes)" "CSS is gzip-compressed"
ok "$(grep -qi '^cache-control: public, max-age=31536000' <<<"$css" && echo yes)" "Static files cached for 1 year"
ok "$(grep -qi '^x-content-type-options: nosniff' <<<"$home" && echo yes)" "Security headers on pages"
if curl -sI "${R[@]}" --http2 "https://${DOMAIN}/" 2>/dev/null | head -1 | grep -q "HTTP/2"; then echo "   ✅ HTTP/2"; else echo "   ⚠️  HTTP/2: not seen (check with a browser)"; fi
echo
echo "✅ Done. Backups of changed files are in $BACKUP_DIR"
