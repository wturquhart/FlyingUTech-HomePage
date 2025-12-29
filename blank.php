<?php
$pageTitle = "Page Title";
$pageDescription = "Page description goes here";
include 'includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="hero">
        <div class="container">
            <h1>Page Title</h1>
            <p>Page subtitle or description</p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section>
        <div class="container">
            <div class="content-section">
                <h2>Section Heading</h2>
                <p>Add your content here. This is a blank template for future pages.</p>
            </div>
        </div>
    </section>

    <!-- Optional: Grid Section -->
    <section style="background-color: var(--secondary-bg); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <h2>Grid Section</h2>
            <div class="grid">
                <div class="card">
                    <h3>Card Title 1</h3>
                    <p>Card content goes here.</p>
                </div>
                <div class="card">
                    <h3>Card Title 2</h3>
                    <p>Card content goes here.</p>
                </div>
                <div class="card">
                    <h3>Card Title 3</h3>
                    <p>Card content goes here.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional: Call to Action Section -->
    <section>
        <div class="container" style="text-align: center;">
            <h2>Call to Action</h2>
            <p style="max-width: 700px; margin: 0 auto 30px;">Encourage users to take action with a compelling message.</p>
            <a href="contact.php" class="btn">Get Started</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
