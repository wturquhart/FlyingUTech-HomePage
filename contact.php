<?php
$pageTitle = "Contact Us";
$pageDescription = "Get in touch with Flying U Technologies for your technology needs";

// Initialize variables
$formSubmitted = false;
$errors = [];
$successMessage = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Here you would typically send an email or save to database
        // For this example, we'll just set a success message
        $successMessage = "Thank you for contacting us! We'll get back to you soon.";
        $formSubmitted = true;
        
        // Clear form data after successful submission
        $name = $email = $subject = $message = '';
    }
}

include 'includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Let's discuss how we can help your business succeed</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section>
        <div class="container">
            <div class="grid">
                <div class="card">
                    <h3>Email</h3>
                    <p>contact@flyingutech.com</p>
                    <p>admin@urquhartsystems.com</p>
                </div>
                <div class="card">
                    <h3>Phone</h3>
                    <p>Main: +1 (555) 123-4567</p>
                    <p>Support: +1 (555) 123-4568</p>
                </div>
                <div class="card">
                    <h3>Location</h3>
                    <p>123 Tech Street</p>
                    <p>Silicon Valley, CA 94000</p>
                </div>
                <div class="card">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 9AM - 6PM</p>
                    <p>Weekend: By Appointment</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section style="background-color: var(--secondary-bg); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <h2>Send Us a Message</h2>
            
            <?php if ($formSubmitted && !empty($successMessage)): ?>
                <div style="max-width: 600px; margin: 20px auto; padding: 15px; background-color: rgba(0, 255, 136, 0.1); border: 1px solid var(--success-color); border-radius: 5px; color: var(--success-color); text-align: center;">
                    <?php echo htmlspecialchars($successMessage); ?>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($errors)): ?>
                <div style="max-width: 600px; margin: 20px auto; padding: 15px; background-color: rgba(255, 68, 68, 0.1); border: 1px solid var(--error-color); border-radius: 5px; color: var(--error-color);">
                    <ul style="margin-left: 20px;">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <form class="contact-form" method="POST" action="contact.php">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" value="<?php echo isset($subject) ? htmlspecialchars($subject) : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                </div>
                
                <button type="submit" class="btn" style="width: 100%;">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Map Section -->
    <section>
        <div class="container">
            <div class="content-section" style="text-align: center;">
                <h3>Visit Our Office</h3>
                <p>We're located in the heart of Texas. Schedule a visit to discuss your project in person.</p>
                <a href="#" class="btn" style="margin-top: 20px;">Schedule a Visit</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
