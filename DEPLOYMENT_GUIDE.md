# Laravel Deployment Guide: Namecheap Stellar Plus (cPanel)

## Pre-Deployment Requirements
- PHP 8.1+ (verify in cPanel → MultiPHP Manager)
- Composer installed (via SSH)
- MySQL database access
- SSH access enabled
- SSL certificate (free via cPanel)

---

## 1. Database Setup

### 1.1 Create MySQL Database
1. **cPanel → MySQL® Databases**
2. Create new database: `username_laravel`
3. Create database user: `username_laraveluser`
4. Set strong password (save it!)
5. Add user to database with **ALL PRIVILEGES**
6. Note: `username_` prefix is auto-added by cPanel

### 1.2 Get Database Connection Info
- **Host**: `localhost` (or check cPanel → MySQL® Databases)
- **Database**: `username_laravel`
- **Username**: `username_laraveluser`
- **Password**: [your password]
- **Port**: `3306` (default)

---

## 2. File Upload & Structure

### 2.1 Upload Laravel Files via FTP/SFTP
```
/home/username/
├── public_html/              ← DO NOT upload Laravel here initially
├── laravel-app/              ← Upload your Laravel app here
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── public/               ← This contains index.php
│   ├── resources/
│   ├── routes/
│   ├── storage/
│   ├── vendor/               ← Will be generated via composer
│   ├── .env.example
│   ├── artisan
│   ├── composer.json
│   └── composer.lock
```

### 2.2 Recommended Structure
**Option A: Subdomain (Recommended)**
```
/home/username/
├── public_html/              ← Keep for main site or redirect
├── altakassus/               ← Laravel root
│   ├── app/
│   ├── public/               ← Point subdomain here
│   └── ...
```

**Option B: Main Domain**
```
/home/username/
├── laravel-app/              ← Laravel root (outside public_html)
│   ├── app/
│   ├── public/               ← Contents will be moved to public_html
│   └── ...
├── public_html/              ← Move public/* contents here
```

---

## 3. SSH Access & Composer Setup

### 3.1 Enable SSH Access
1. **cPanel → SSH Access → Manage SSH Keys**
2. Generate new key or import existing
3. Authorize the key

### 3.2 Connect via SSH
```bash
ssh username@yourdomain.com -p 21098
# Port may vary - check cPanel → SSH Access
```

### 3.3 Install Composer (if not installed)
```bash
cd ~
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mkdir -p ~/bin
mv composer.phar ~/bin/composer
chmod +x ~/bin/composer

# Add to PATH (add to ~/.bashrc)
echo 'export PATH="$HOME/bin:$PATH"' >> ~/.bashrc
source ~/.bashrc

# Verify
composer --version
```

---

## 4. Environment Configuration (.env)

### 4.1 Create .env File
```bash
cd ~/laravel-app  # or your Laravel root directory
cp .env.example .env
nano .env
```

### 4.2 Configure .env
```ini
APP_NAME="Altakassus"
APP_ENV=production
APP_KEY=  # Will be generated in step 5
APP_DEBUG=false  # IMPORTANT: Set to false in production
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=username_laravel
DB_USERNAME=username_laraveluser
DB_PASSWORD=your_secure_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

# Add your mail settings if needed
MAIL_MAILER=smtp
MAIL_HOST=mail.yourdomain.com
MAIL_PORT=465
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your_mail_password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

**Save**: Ctrl+O, Enter, Ctrl+X

---

## 5. Install Dependencies & Run Artisan Commands

### 5.1 Install Composer Dependencies
```bash
cd ~/laravel-app
composer install --optimize-autoloader --no-dev
```

### 5.2 Generate Application Key
```bash
php artisan key:generate
```

### 5.3 Run Database Migrations
```bash
php artisan migrate --force
```

### 5.4 Seed Database (if applicable)
```bash
php artisan db:seed --force
```

### 5.5 Clear & Cache Config
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Cache for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 5.6 Create Storage Link
```bash
php artisan storage:link
```

---

## 6. File Permissions

### 6.1 Set Correct Permissions
```bash
cd ~/laravel-app

# Storage and cache directories
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Set correct ownership (replace 'username' with your cPanel username)
chown -R username:username storage
chown -R username:username bootstrap/cache

# Ensure .env is not publicly readable
chmod 600 .env
```

### 6.2 Verify Permissions
```bash
ls -la storage
ls -la bootstrap/cache
```

---

## 7. Public Directory Setup (index.php Path Fix)

### 7.1 Option A: Subdomain Approach (RECOMMENDED)

**Step 1: Create Subdomain**
1. **cPanel → Domains → Create A New Domain**
2. Domain: `yourdomain.com` (or subdomain like `app.yourdomain.com`)
3. Document Root: `/home/username/laravel-app/public`
4. Click "Submit"

**Step 2: Verify**
- No need to modify index.php
- Laravel's public folder is automatically the web root

---

### 7.2 Option B: Main Domain Setup

**Step 1: Move Public Contents**
```bash
cd ~/laravel-app/public
cp -r * ~/public_html/
cp .htaccess ~/public_html/
```

**Step 2: Update index.php**
```bash
nano ~/public_html/index.php
```

**Change these lines:**
```php
// OLD:
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// NEW:
require __DIR__.'/../laravel-app/vendor/autoload.php';
$app = require_once __DIR__.'/../laravel-app/bootstrap/app.php';
```

**Save**: Ctrl+O, Enter, Ctrl+X

**Step 3: Update Filesystem Config (if using storage/public)**
```bash
nano ~/laravel-app/config/filesystems.php
```

Update the public disk path if needed:
```php
'public' => [
    'driver' => 'local',
    'root' => storage_path('app/public'),
    'url' => env('APP_URL').'/storage',
    'visibility' => 'public',
],
```

---

## 8. DNS Configuration

### 8.1 Point Domain to Namecheap Hosting
1. **Namecheap Dashboard → Domain List → Manage**
2. **Advanced DNS**
3. Add/Update Records:
   - **A Record**: `@` → `[Server IP from cPanel]`
   - **CNAME Record**: `www` → `yourdomain.com`
4. Wait 15-60 minutes for DNS propagation

### 8.2 Verify DNS
```bash
nslookup yourdomain.com
dig yourdomain.com
```

---

## 9. SSL Certificate Setup

### 9.1 Install Free SSL (AutoSSL)
1. **cPanel → SSL/TLS Status**
2. Click "Run AutoSSL"
3. Wait for certificate installation (5-10 minutes)

### 9.2 Force HTTPS (Update .htaccess)
```bash
nano ~/public_html/.htaccess
# or
nano ~/laravel-app/public/.htaccess
```

**Add at the top (before Laravel rules):**
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Force HTTPS
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</IfModule>
```

### 9.3 Update APP_URL in .env
```bash
nano ~/laravel-app/.env
```
Change: `APP_URL=https://yourdomain.com`

```bash
php artisan config:cache
```

---

## 10. Final Verification Checklist

- [ ] Database connection works
- [ ] All Composer dependencies installed
- [ ] `.env` configured correctly
- [ ] Application key generated
- [ ] Migrations run successfully
- [ ] Storage link created
- [ ] Permissions set (775 for storage, bootstrap/cache)
- [ ] Public directory accessible via domain
- [ ] SSL certificate installed and active
- [ ] HTTPS redirect working
- [ ] Assets loading (CSS, JS, images)
- [ ] All routes working
- [ ] Email sending (test contact form)
- [ ] WhatsApp button functional
- [ ] Language switcher working (Arabic/English)

---

## Troubleshooting Section

### 500 Internal Server Error

#### Cause 1: Incorrect File Permissions
```bash
cd ~/laravel-app
chmod -R 775 storage bootstrap/cache
chown -R username:username storage bootstrap/cache
```

#### Cause 2: Missing .env or APP_KEY
```bash
cd ~/laravel-app
# Check .env exists
ls -la .env

# Regenerate key
php artisan key:generate
php artisan config:cache
```

#### Cause 3: Incorrect index.php Paths
```bash
nano ~/public_html/index.php
# Verify paths point to correct Laravel directory
# Should be: ../laravel-app/vendor/autoload.php
```

#### Cause 4: PHP Version Too Low
1. **cPanel → MultiPHP Manager**
2. Select domain
3. Change to PHP 8.1 or 8.2
4. Apply

#### Cause 5: Missing PHP Extensions
**Check required extensions:**
```bash
php -m | grep -E "PDO|mbstring|openssl|tokenizer|xml|ctype|json|bcmath"
```

**Enable in cPanel → MultiPHP INI Editor → Extensions**
- Enable: `mbstring`, `openssl`, `pdo_mysql`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`

#### Cause 6: .htaccess Issues
```bash
nano ~/public_html/.htaccess
# Ensure mod_rewrite is enabled
```

**Check Apache logs:**
```bash
tail -f ~/logs/error_log
# or
tail -f ~/public_html/error_log
```

---

### 404 Errors (All Routes)

#### Cause 1: mod_rewrite Not Enabled
**cPanel → Apache Handlers** (usually enabled by default)

**Check .htaccess exists:**
```bash
ls -la ~/public_html/.htaccess
# or
ls -la ~/laravel-app/public/.htaccess
```

**Laravel's .htaccess should contain:**
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

#### Cause 2: Document Root Incorrect
**cPanel → Domains → Domain Management**
- Verify Document Root points to: `/home/username/laravel-app/public`

#### Cause 3: Cache Issues
```bash
php artisan route:clear
php artisan config:clear
php artisan cache:clear
php artisan route:cache
php artisan config:cache
```

---

### 404 Errors (Specific Routes)

#### Check Route Registration
```bash
php artisan route:list | grep "contractors"
php artisan route:list | grep "conditioning"
```

#### Clear and Recache Routes
```bash
php artisan route:clear
php artisan route:cache
```

---

### Missing Assets (CSS, JS, Images Not Loading)

#### Cause 1: Incorrect APP_URL
```bash
nano ~/laravel-app/.env
# Set: APP_URL=https://yourdomain.com (with https://)
php artisan config:cache
```

#### Cause 2: Mixed Content (HTTP/HTTPS)
**Update .htaccess to force HTTPS** (see Section 9.2)

**Check in browser console (F12):**
- Look for "mixed content" errors
- All assets should load via `https://`

#### Cause 3: Asset Path Issues
**In Blade templates, use:**
```php
{{ asset('css/style.css') }}  // Correct
{{ asset('/css/style.css') }} // Also works

// NOT:
/css/style.css                 // Wrong
```

#### Cause 4: Storage Link Missing
```bash
cd ~/laravel-app
php artisan storage:link
ls -la public/storage  # Should show symlink
```

#### Cause 5: File Permissions
```bash
chmod -R 755 ~/laravel-app/public
```

---

### Database Connection Errors

#### Error: "Access denied for user"
```bash
# Verify database credentials in .env
nano ~/laravel-app/.env

# Test connection
php artisan tinker
>>> DB::connection()->getPdo();
```

#### Error: "Database does not exist"
**cPanel → MySQL® Databases**
- Verify database name matches .env (including `username_` prefix)

#### Fix: Reset Database Connection
```bash
php artisan config:clear
php artisan cache:clear
php artisan migrate:fresh --seed --force  # WARNING: Drops all tables
```

---

### Session/Cache Issues

#### Clear All Caches
```bash
cd ~/laravel-app
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
rm -rf bootstrap/cache/*.php
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

#### Storage Permissions Issue
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

---

### Email Not Sending

#### Test Email Configuration
```bash
php artisan tinker
>>> Mail::raw('Test email', function($msg) { $msg->to('test@example.com')->subject('Test'); });
```

#### Common Issues
1. **Wrong MAIL_HOST**: Use `mail.yourdomain.com`
2. **Wrong PORT**: Use `465` for SSL, `587` for TLS
3. **MAIL_ENCRYPTION**: Should be `ssl` or `tls`
4. **Check cPanel → Email Accounts**: Email must exist

---

### Language Switcher Not Working

#### Check Routes
```bash
php artisan route:list | grep locale
```

#### Verify LaravelLocalization Package
```bash
composer show mcamara/laravel-localization
```

#### Clear Cache
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:cache
```

---

### WhatsApp Button Not Appearing

#### Check File Included
**Verify in layout files:**
```bash
grep -r "whatsapp" ~/laravel-app/resources/views/
```

#### Check Phone Numbers
```bash
nano ~/laravel-app/resources/views/layouts/includes/whatsapp.blade.php
# Verify phone numbers are set correctly
```

---

### Permission Denied Errors

#### Fix Laravel Directories
```bash
cd ~/laravel-app
chmod -R 775 storage
chmod -R 775 bootstrap/cache
chown -R username:username .
```

#### Fix Specific Files
```bash
chmod 600 .env
chmod 644 composer.json composer.lock
chmod 755 artisan
```

---

## Useful Commands Reference

### Artisan Commands
```bash
# Clear all caches
php artisan optimize:clear

# Cache for production
php artisan optimize

# View routes
php artisan route:list

# Check environment
php artisan env

# Run specific migration
php artisan migrate:refresh --path=/database/migrations/filename.php

# Create symbolic link
php artisan storage:link

# Enter interactive shell
php artisan tinker
```

### SSH Commands
```bash
# Check disk space
df -h

# Check PHP version
php -v

# Check installed PHP modules
php -m

# Check file permissions
ls -la

# Monitor error logs
tail -f ~/logs/error_log

# Find large files
du -sh * | sort -h

# Check Apache/HTTP logs
tail -f ~/logs/access_log
```

---

## Performance Optimization (Optional)

### Enable OPcache
**cPanel → MultiPHP INI Editor → Editor Mode**
```ini
opcache.enable=1
opcache.memory_consumption=256
opcache.max_accelerated_files=20000
opcache.revalidate_freq=0
```

### Enable Redis (if available)
```bash
# Install Redis PHP extension via cPanel
# Update .env
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

---

## Security Checklist

- [ ] `APP_DEBUG=false` in production
- [ ] `.env` file has 600 permissions
- [ ] Strong database password
- [ ] All sensitive data in .env (not in config files)
- [ ] SSL certificate active and auto-renewing
- [ ] Regular backups enabled (cPanel → Backups)
- [ ] File permissions set correctly (no 777)
- [ ] `vendor/` directory not publicly accessible
- [ ] `.git/` directory not publicly accessible (or removed)

---

## Backup Strategy

### Automated cPanel Backups
1. **cPanel → Backup Wizard**
2. Enable full account backups (weekly recommended)

### Manual Backups
```bash
# Backup database
php artisan db:backup  # If package installed

# Or manual MySQL dump
mysqldump -u username_laraveluser -p username_laravel > backup.sql

# Backup files
cd ~
tar -czf laravel-backup-$(date +%Y%m%d).tar.gz laravel-app/
```

---

## Support Resources

- **Namecheap Support**: https://www.namecheap.com/support/
- **Laravel Docs**: https://laravel.com/docs
- **cPanel Docs**: https://docs.cpanel.net/
- **Check Error Logs**: `~/logs/error_log`

---

## Quick Command Checklist (Copy & Paste)

```bash
# 1. SSH into server
ssh username@yourdomain.com -p 21098

# 2. Navigate to Laravel directory
cd ~/laravel-app

# 3. Install dependencies
composer install --optimize-autoloader --no-dev

# 4. Setup environment
cp .env.example .env
nano .env  # Edit with your settings

# 5. Generate key
php artisan key:generate

# 6. Run migrations
php artisan migrate --force

# 7. Create storage link
php artisan storage:link

# 8. Set permissions
chmod -R 775 storage bootstrap/cache

# 9. Cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 10. Test
php artisan tinker
>>> echo "Laravel is working!";
>>> exit
```

---

**Deployment Date**: _____________
**Deployed By**: _____________
**Notes**: _____________________________________________

---

Good luck with your deployment! 🚀
