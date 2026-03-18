<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | LMS</title>
    
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- FontAwesome for Professional Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="contact.css">

    
</head>
<body>

    <!-- Background Elements -->
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>

    <!-- Header -->
    <header class="header">
        <div class="logo">
            <i class="fas fa-book-reader"></i> LMS
        </div>
        <nav>
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero contact-hero">
        <h1>Get in Touch</h1>
        <p>We’re here to help you elevate your library experience</p>
    </section>

    <!-- Main Content -->
    <section class="contact-section">
        
        <!-- Contact Information Card -->
        <div class="contact-info glass-card">
            <h2>Contact Details</h2>
            
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="info-content">
                    <h3>Address</h3>
                    <p>123 Knowledge Street<br>Lucknow, India 226001</p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                <div class="info-content">
                    <h3>Phone</h3>
                    <p>+91 98765 43210<br><span style="color: var(--text-muted); font-size: 14px;">Mon - Fri, 9:00 AM - 6:00 PM</span></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-envelope"></i></div>
                <div class="info-content">
                    <h3>Email</h3>
                    <p>support@lms.com<br>info@premiumlibrary.com</p>
                </div>
            </div>
        </div>

        <!-- Contact Form Card -->
        <div class="contact-form glass-card">
            <h2>Send Us a Message</h2>
            
            <form id="contactForm">
                <div class="form-group">
                    <input type="text" id="name" class="form-control" placeholder="Your Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="Your Email Address" required>
                </div>
                <div class="form-group">
                    <textarea id="message" class="form-control" placeholder="How can we assist you today?" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message <i class="fas fa-paper-plane" style="margin-left: 8px;"></i></button>
            </form>
            
            <!-- Success Message -->
            <div id="formResponse" class="hidden">
                <i class="fas fa-check-circle" style="font-size: 24px; color: var(--accent-gold);"></i>
                <div>
                    <strong>Thank you!</strong><br>
                    Your message has been received. We will get back to you shortly.
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Library Management System | Professional Edition. Designed with Excellence.</p>
    </footer>

    <!-- Interactive Script -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevents actual form submission for demonstration
            
            // Hide the button
            const submitBtn = document.querySelector('.btn-submit');
            submitBtn.style.display = 'none';
            
            // Show the success message smoothly
            const responseMsg = document.getElementById('formResponse');
            responseMsg.classList.remove('hidden');
            
            // Optional: Reset form fields
            this.reset();
            
            // Re-show the button and hide message after 5 seconds (just for demo purposes)
            setTimeout(() => {
                responseMsg.classList.add('hidden');
                submitBtn.style.display = 'block';
            }, 5000);
        });
    </script>

</body>
</html>