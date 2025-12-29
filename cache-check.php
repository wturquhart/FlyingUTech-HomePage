<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cache Diagnostic Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #0a0a0a;
            color: #e0e0e0;
        }
        .check-item {
            background: #1a1a1a;
            padding: 15px;
            margin: 10px 0;
            border-left: 4px solid #00d4ff;
            border-radius: 4px;
        }
        .success { border-left-color: #4caf50; }
        .warning { border-left-color: #ff9800; }
        h1 { color: #00d4ff; }
        code {
            background: #2a2a2a;
            padding: 2px 6px;
            border-radius: 3px;
            color: #00d4ff;
        }
        .timestamp {
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>?? Cache Diagnostic Check</h1>
    
    <div class="check-item">
        <strong>Current Time:</strong> <?php echo date('Y-m-d H:i:s'); ?>
        <div class="timestamp">Page generated at: <?php echo microtime(true); ?></div>
    </div>

    <div class="check-item">
        <strong>Footer File Path:</strong><br>
        <code><?php echo realpath('includes/footer.php'); ?></code>
    </div>

    <div class="check-item">
        <strong>Footer Last Modified:</strong><br>
        <?php 
        $footerPath = 'includes/footer.php';
        if (file_exists($footerPath)) {
            echo date('Y-m-d H:i:s', filemtime($footerPath));
        } else {
            echo '<span style="color: #f44336;">FILE NOT FOUND!</span>';
        }
        ?>
    </div>

    <div class="check-item">
        <strong>PHP Version:</strong> <?php echo phpversion(); ?>
    </div>

    <div class="check-item">
        <strong>OpCache Status:</strong><br>
        <?php 
        if (function_exists('opcache_get_status')) {
            $opcache = opcache_get_status();
            if ($opcache && $opcache['opcache_enabled']) {
                echo '<span style="color: #ff9800;">? OpCache is ENABLED - This may cache PHP files</span><br>';
                echo '<small>Consider adding: opcache.revalidate_freq=0 in php.ini for development</small>';
            } else {
                echo '<span style="color: #4caf50;">? OpCache is disabled or not available</span>';
            }
        } else {
            echo 'OpCache not available';
        }
        ?>
    </div>

    <div class="check-item">
        <strong>Working Directory:</strong><br>
        <code><?php echo getcwd(); ?></code>
    </div>

    <div class="check-item">
        <strong>Footer Content Preview (First 200 chars):</strong><br>
        <code><?php 
        $footerPath = 'includes/footer.php';
        if (file_exists($footerPath)) {
            echo htmlspecialchars(substr(file_get_contents($footerPath), 0, 200));
        }
        ?></code>
    </div>

    <div class="check-item warning">
        <strong>?? To Clear Caches:</strong><br>
        1. <strong>Browser:</strong> Press Ctrl+F5 (or Cmd+Shift+R on Mac)<br>
        2. <strong>PHP OpCache:</strong> Restart your web server or PHP-FPM<br>
        3. <strong>Server Cache:</strong> Check if you're using Apache/Nginx caching
    </div>

    <div class="check-item">
        <strong>Test Footer Include:</strong><br>
        <div style="background: #2a2a2a; padding: 10px; margin-top: 10px;">
            <?php 
            // This will show if footer.php can be included
            if (file_exists('includes/footer.php')) {
                echo '<small style="color: #4caf50;">Footer file exists and will be included below:</small><hr>';
                include 'includes/footer.php';
            } else {
                echo '<span style="color: #f44336;">Footer file not found!</span>';
            }
            ?>
        </div>
    </div>

</body>
</html>
