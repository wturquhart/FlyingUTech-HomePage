# Cache Issues - Troubleshooting Guide

## Problem
Changes to files (like footer.php) are not appearing on the live website.

## Solutions Applied

### 1. Cache-Busting Added to Header
The `includes/header.php` file now includes version parameters on CSS files.
This forces browsers to reload CSS when files change.

### 2. Diagnostic Tool Created
Visit `cache-check.php` in your browser to diagnose cache issues:
- Shows file modification times
- Displays current PHP configuration
- Tests if footer.php is being included correctly
- Shows OpCache status

## Step-by-Step Troubleshooting

### Step 1: Clear Browser Cache
- **Chrome/Edge:** Press `Ctrl + F5` (Windows) or `Cmd + Shift + R` (Mac)
- **Firefox:** Press `Ctrl + Shift + R` (Windows) or `Cmd + Shift + R` (Mac)
- **Or:** Open DevTools (F12) ? Right-click refresh button ? "Empty Cache and Hard Reload"

### Step 2: Check You're Editing the Right Files
1. Visit `http://localhost/FlyingUTech-HomePage/cache-check.php`
2. Check the "Footer File Path" - make sure it matches where you're editing
3. Check "Footer Last Modified" - make the change, save, and refresh to see if time updates

### Step 3: Disable PHP OpCache (if enabled)
If OpCache is enabled (check in cache-check.php):

**For XAMPP:**
1. Open `php.ini` (found in `C:\xampp\php\php.ini`)
2. Find the line: `opcache.enable=1`
3. Change to: `opcache.enable=0`
4. Restart Apache

**For WAMP:**
1. Click WAMP icon ? PHP ? php.ini
2. Find: `opcache.enable=1`
3. Change to: `opcache.enable=0`
4. Restart all services

**Alternative (for development):**
Add this to the top of `index.php` (temporary fix):
```php
<?php
if (function_exists('opcache_reset')) {
    opcache_reset();
}
?>
```

### Step 4: Check Server Configuration
If using Apache, create/edit `.htaccess` in root folder to disable caching during development:

```apache
# Disable caching during development
<IfModule mod_headers.c>
    Header set Cache-Control "no-cache, no-store, must-revalidate"
    Header set Pragma "no-cache"
    Header set Expires 0
</IfModule>
```

### Step 5: Verify File Permissions
Make sure your web server can read the files:
- Right-click on the FlyingUTech-HomePage folder
- Properties ? Security
- Ensure your web server user has read permissions

## Quick Test
1. Open `includes/footer.php`
2. Add this comment at the very top: `<!-- CACHE TEST <?php echo time(); ?> -->`
3. Save the file
4. Visit your site and view page source (Ctrl+U)
5. Search for "CACHE TEST" - if you see it with a timestamp, caching is working correctly

## Common Issues

### Issue: Changes appear on some pages but not others
**Solution:** Make sure all PHP files include footer.php correctly:
```php
<?php include 'includes/footer.php'; ?>
```

### Issue: CSS changes not appearing
**Solution:** With cache-busting now enabled in header.php, CSS should update automatically

### Issue: Changes appear locally but not on live server
**Solution:** Make sure you're uploading/pushing changes to the correct server location

## Verification Steps After Making Changes
1. Make your change in the file
2. **Save the file** (Ctrl+S)
3. **Hard refresh browser** (Ctrl+F5)
4. Check `cache-check.php` to verify file modification time updated
5. If still not working, restart your web server

## Contact
If issues persist after trying all steps, there may be additional caching layers:
- CDN caching (if using Cloudflare, etc.)
- Hosting provider caching
- Proxy/firewall caching

## Remove Diagnostic Tools Before Production
Before deploying to production, delete:
- `cache-check.php`
- `CACHE_TROUBLESHOOTING.md` (this file)
