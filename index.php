<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- FontAwesome for Professional Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link rel="stylesheet" href="index.css">
</head>
<body>

    <!-- Background Elements -->
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>

    <!-- Header Navigation -->
    <header class="header">
        <a href="index.php" class="logo">
            <i class="fas fa-book-reader"></i> LMS
        </a>
        <nav>
            <a href="index.php" class="active">Home</a>
            <a href="catalog.php">Catalog</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            
            <!-- Auth Buttons -->
            <div class="nav-auth">
                <a href="login.php" class="btn-nav-login">Login</a>
                <a href="signup.php" class="btn-nav-signup">Sign Up</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Elevate Your Reading Experience</h1>
        <p>A sophisticated digital ecosystem designed to manage books, empower members, and streamline library operations with uncompromising elegance.</p>
        <div class="hero-btns">
            <a href="catalog.php" class="btn-primary">Explore Catalog</a>
        </div>
    </section>

    <!-- Premium Features Section -->
    <section class="section-padding">
        <div class="section-header">
            <p>Unmatched Capabilities</p>
            <h2>Library Management, Perfected.</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-book feature-icon"></i>
                <h3>Book Management</h3>
                <p>Effortlessly add, categorize, and organize your entire library inventory with our intuitive digital cataloging system.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-user-tie feature-icon"></i>
                <h3>Member Records</h3>
                <p>Maintain detailed, secure profiles for all library patrons, tracking their reading history and preferences.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-exchange-alt feature-icon"></i>
                <h3>Issue & Return</h3>
                <p>Streamline the borrowing process. Track issued books, automate return dates, and manage late fees instantly.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-chart-pie feature-icon"></i>
                <h3>Smart Reports</h3>
                <p>Generate beautiful, data-driven analytics to understand library performance and popular reading trends.</p>
            </div>
        </div>
    </section>

    <!-- Curated Collections (Replacing 'buy our books') -->
    <section class="section-padding" style="background: rgba(0,0,0,0.2); backdrop-filter: blur(5px);">
        <div class="section-header">
            <p>Featured Selections</p>
            <h2>Curated Collections</h2>
        </div>
        <div class="books-grid">
            <!-- Book 1 -->
            <div class="book-card">
                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=800&auto=format&fit=crop" alt="Book 1" class="book-img">
                <div class="book-info">
                    <h3>The Art of Innovation</h3>
                    <p>Business & Strategy</p>
                    <button class="book-btn">Reserve Now</button>
                </div>
            </div>
            <!-- Book 2 -->
            <div class="book-card">
                <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=800&auto=format&fit=crop" alt="Book 2" class="book-img">
                <div class="book-info">
                    <h3>Modern Architecture</h3>
                    <p>Art & Design</p>
                    <button class="book-btn">Reserve Now</button>
                </div>
            </div>
            <!-- Book 3 -->
            <div class="book-card">
                <img src="https://images.unsplash.com/photo-1618666012174-83b441c0bc76?q=80&w=800&auto=format&fit=crop" alt="Book 3" class="book-img">
                <div class="book-info">
                    <h3>The Silent Cosmos</h3>
                    <p>Science & Astronomy</p>
                    <button class="book-btn">Reserve Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Library Info -->
            <div class="footer-about">
                <p>Manage books, empower members, and streamline records efficiently with our state-of-the-art digital library management system.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-links">
                <h3>Quick Links</h3>
                <a href="index.php">Home</a>
                <a href="catalog.php">Catalog Search</a>
                <a href="about.php">About the System</a>
                <a href="contact.php">Contact Support</a>
            </div>
            
            <!-- Contact Info -->
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p><i class="fas fa-envelope"></i> gautami5686@gmail.com</p>
                <p><i class="fas fa-phone-alt"></i> +91 8957198329</p>
                <p><i class="fas fa-map-marker-alt"></i> 123 Knowledge Avenue, Lucknow, India</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            &copy; 2026 Library Management System | Premium Edition. All Rights Reserved.
        </div>
    </footer>

    <!-- Header Scroll Effect Script -->
    <script>
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.style.background = 'rgba(10, 25, 47, 0.9)';
                header.style.boxShadow = '0 5px 20px rgba(0,0,0,0.3)';
            } else {
                header.style.background = 'rgba(10, 25, 47, 0.5)';
                header.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>