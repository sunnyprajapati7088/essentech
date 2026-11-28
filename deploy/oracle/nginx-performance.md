# nginx changes for Lighthouse (Oracle server)

The `server { }` block that `setup-oracle.sh` writes is missing four things that the
current AWS config (`nginx-essentechs.conf`) already has. Without them, Lighthouse
scores on the Oracle server will drop (Performance: no compression or caching.
Best Practices: no HTTPS). Add these to the server block before switching DNS.

**Quick way:** after certbot has set up HTTPS, run `bash deploy/oracle/nginx-tune.sh`
on the server. It adds gzip, the static-file cache, the security headers and HTTP/2
(sections 1–4 below), backs up every file it changes, and puts everything back if
`nginx -t` fails.

## 1. HTTPS + HTTP/2 (Best Practices: "Uses HTTPS", "HTTP/2")

The block only listens on port 80. Run certbot once DNS points to the server:

```bash
sudo apt-get install -y certbot python3-certbot-nginx
sudo certbot --nginx -d essentechs.com -d www.essentechs.com --redirect
```

Then make the 443 listener use HTTP/2. nginx 1.25+ (Ubuntu 24.04 ships 1.24)
accepts `http2 on;`, and older versions accept `listen 443 ssl http2;`:

```nginx
listen 443 ssl http2;
listen [::]:443 ssl http2;
```

## 2. Gzip for CSS/JS/SVG/JSON (Performance: "Enable text compression")

Ubuntu's default `nginx.conf` only compresses `text/html`. Before this change,
Lighthouse estimated about 250–330 KB of savings per page from compression.

```nginx
gzip on;
gzip_vary on;
gzip_comp_level 6;
gzip_min_length 1024;
gzip_types text/plain text/css text/xml application/json application/javascript
           text/javascript application/xml application/xml+rss image/svg+xml;
```

(Don't list `font/woff2`, because woff2 is already compressed.)

## 3. Long cache for static files (Performance: "Use efficient cache lifetimes")

```nginx
location ~* \.(jpg|jpeg|png|gif|ico|css|js|webp|avif|svg|woff|woff2|ttf|eot)$ {
    expires 1y;
    add_header Cache-Control "public, max-age=31536000, immutable";
    access_log off;
    try_files $uri =404;
}
```

The layouts now add `?v=<file modified time>` to every local CSS/JS file, so
browsers fetch the new file after each deploy even with `immutable`.

## 4. Security headers (Best Practices / general hardening)

Laravel's `SecurityHeaders` middleware already sends HSTS, COOP and
Permissions-Policy. The other three come from nginx on AWS, so add them on Oracle too:

```nginx
add_header X-Content-Type-Options "nosniff" always;
add_header X-Frame-Options "SAMEORIGIN" always;
add_header Referrer-Policy "strict-origin-when-cross-origin" always;
```

Note: a `location` block that has its own `add_header` (like the cache block
above) does not inherit server-level `add_header` lines. Repeat the three lines
inside it if you want them on static files too.

## 5. Server response time (TTFB)

Lighthouse flagged a root-document time of about 600–700 ms (measured locally with
`artisan serve`). On the server:

```bash
php artisan config:cache && php artisan route:cache && php artisan view:cache
```

`deploy-ec2.sh` already runs these three commands. Also check that OPcache is on (`php -i | grep opcache.enable`; it is on by default in Ubuntu php8.3-fpm).
