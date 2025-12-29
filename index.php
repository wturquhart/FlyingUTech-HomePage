<?php
$pageTitle = "Home";
$pageDescription = "Flying U Technologies - Innovative technology solutions for modern businesses";
include 'includes/header.php';
?>

<main>
    <!-- Hero Section with Image -->
    <section class="hero hero-with-image">
        <!-- Hero Image: Replace 'images/hero-bg.svg' with your image path -->
        <img src="images/hero-bg.jpg" alt="Technology Background" class="hero-image">
        
        <!-- Overlay options: 'dark', 'light', or 'gradient-accent' -->
        <div class="hero-overlay gradient-accent"></div>
        
        <div class="hero-content">
            <div class="container">
                <h1>Welcome to Flying U Technologies</h1>
                <p>Transforming ideas into powerful digital solutions. We deliver cutting-edge technology services that propel your business forward.</p>
                <a href="services.php" class="btn">Explore Our Services</a>
                <a href="contact.php" class="btn btn-secondary">Get In Touch</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section>
        <div class="container">
            <h2>Why Choose Us</h2>
            <div class="grid">
                <div class="card">
                    <h3>Innovation First</h3>
                    <p>We leverage the latest technologies to create solutions that keep you ahead of the competition.</p>
                </div>
                <div class="card">
                    <h3>Professional Excellence</h3>
                    <p>Our team of experts delivers quality work with attention to detail and commitment to your success.</p>
                </div>
                <div class="card">
                    <h3>Results Driven</h3>
                    <p>We focus on measurable outcomes that directly impact your business growth and efficiency.</p>
                </div>
                <div class="card">
                    <h3>Security Focused</h3>
                    <p>Your data security is our priority. We implement industry-leading security practices in every project.</p>
                </div>
                <div class="card">
                    <h3>Fast & Reliable</h3>
                    <p>We deliver projects on time without compromising quality, ensuring your business never misses a beat.</p>
                </div>
                <div class="card">
                    <h3>24/7 Support</h3>
                    <p>Our dedicated support team is always available to assist you whenever you need help.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: var(--secondary-bg); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
        <div class="container" style="text-align: center;">
            <h2>Ready to Transform Your Business?</h2>
            <p style="max-width: 700px; margin: 0 auto 30px;">Let's discuss how our technology solutions can help you achieve your goals.</p>
            <a href="contact.php" class="btn">Start Your Project</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
