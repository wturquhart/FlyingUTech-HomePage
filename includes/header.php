<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional technology solutions for your business'; ?>">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' Flying U Technologies' : 'Flying U Technologies - Technology Solutions'; ?></title>
    
    <!-- CSS Files with cache busting -->
    <?php 
    $cssVersion = filemtime('css/styles.css'); 
    $navbarCssVersion = filemtime('css/navbar.css');
    $footerCssVersion = filemtime('css/footer.css');
    ?>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo $cssVersion; ?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo $navbarCssVersion; ?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo $footerCssVersion; ?>">
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="index.php" class="logo">Flying U Technologies</a>
            
            <div class="menu-toggle" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <ul class="nav-menu" id="nav-menu">
                <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a></li>
                <li><a href="services.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Services</a></li>
                <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </div>
    </nav>

    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.getElementById('nav-menu');

        mobileMenu.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    </script>
