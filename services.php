<?php
$pageTitle = "Services";
$pageDescription = "Comprehensive technology services including web development, cloud solutions, and IT consulting";
include 'includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="hero">
        <div class="container">
            <h1>Our Services</h1>
            <p>Comprehensive technology solutions tailored to your needs</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section>
        <div class="container">
            <h2>What We Offer</h2>
            
            <div id="web-dev" class="content-section" style="margin-top: 40px;">
                <h3>Web Development</h3>
                <p>Create stunning, responsive websites and web applications that engage your audience and drive results. Our full-stack developers use modern frameworks and best practices to build fast, secure, and scalable solutions.</p>
                <ul style="color: var(--secondary-text); margin-top: 15px; margin-left: 20px;">
                    <li>Custom Website Development</li>
                    <li>E-commerce Solutions</li>
                    <li>Progressive Web Applications (PWA)</li>
                    <li>Content Management Systems</li>
                    <li>API Development & Integration</li>
                </ul>
            </div>

            <div id="cloud" class="content-section">
                <h3>Cloud Solutions</h3>
                <p>Migrate to the cloud with confidence. We design and implement cloud infrastructure that's scalable, secure, and cost-effective. Whether you're starting fresh or migrating existing systems, we've got you covered.</p>
                <ul style="color: var(--secondary-text); margin-top: 15px; margin-left: 20px;">
                    <li>Cloud Migration Services</li>
                    <li>Infrastructure as Code (IaC)</li>
                    <li>Container Orchestration</li>
                    <li>Cloud Security & Compliance</li>
                    <li>Multi-Cloud Strategies</li>
                </ul>
            </div>

            <div id="consulting" class="content-section">
                <h3>IT Consulting</h3>
                <p>Strategic technology guidance to help you make informed decisions. Our consultants bring years of experience to help you optimize your IT infrastructure, reduce costs, and improve efficiency.</p>
                <ul style="color: var(--secondary-text); margin-top: 15px; margin-left: 20px;">
                    <li>Technology Strategy Planning</li>
                    <li>Digital Transformation</li>
                    <li>System Architecture Review</li>
                    <li>Performance Optimization</li>
                    <li>Technology Stack Selection</li>
                </ul>
            </div>

            <div id="security" class="content-section">
                <h3>Cybersecurity</h3>
                <p>Protect your business from cyber threats with our comprehensive security services. We implement defense-in-depth strategies to safeguard your data, systems, and reputation.</p>
                <ul style="color: var(--secondary-text); margin-top: 15px; margin-left: 20px;">
                    <li>Security Audits & Assessments</li>
                    <li>Penetration Testing</li>
                    <li>Security Operations Center (SOC)</li>
                    <li>Compliance Management</li>
                    <li>Incident Response</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Additional Services -->
    <section style="background-color: var(--secondary-bg); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <h2>More Services</h2>
            <div class="grid">
                <div class="card">
                    <h3>Mobile Development</h3>
                    <p>Native and cross-platform mobile applications that deliver exceptional user experiences on iOS and Android.</p>
                </div>
                <div class="card">
                    <h3>AI & Machine Learning</h3>
                    <p>Leverage artificial intelligence and machine learning to automate processes and gain valuable insights.</p>
                </div>
                <div class="card">
                    <h3>Data Analytics</h3>
                    <p>Transform raw data into actionable insights with our advanced analytics and business intelligence solutions.</p>
                </div>
                <div class="card">
                    <h3>DevOps Services</h3>
                    <p>Streamline your development pipeline with CI/CD automation, infrastructure as code, and monitoring.</p>
                </div>
                <div class="card">
                    <h3>UI/UX Design</h3>
                    <p>Create intuitive and beautiful user interfaces that enhance user satisfaction and engagement.</p>
                </div>
                <div class="card">
                    <h3>Maintenance & Support</h3>
                    <p>Ongoing support and maintenance to keep your systems running smoothly and efficiently.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section>
        <div class="container" style="text-align: center;">
            <h2>Ready to Get Started?</h2>
            <p style="max-width: 700px; margin: 0 auto 30px;">Contact us today to discuss your project and learn how we can help you achieve your technology goals.</p>
            <a href="contact.php" class="btn">Request a Consultation</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
