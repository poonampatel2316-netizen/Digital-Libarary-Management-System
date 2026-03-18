<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional About Us | LMS</title>
    
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- FontAwesome for Professional Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="about_us.css">
</head>
<body>

    <!-- Background Elements -->
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>

    <!-- Header -->
    <header class="header">
        <div class="logo">
            <i class="fas fa-book-reader"  style="margin-right: 10px;"></i> LMS
        </div>
        <nav>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Our Library Management System</h1>
        <p>Empowering readers with technology & efficiency</p>
    </section>

    <!-- Main Content -->
    <section class="about-content">
        <h2>Who We Are</h2>
        <p class="about-text">
            We are a team of innovators passionate about making libraries smarter. 
            Our Library Management System is meticulously designed to simplify book management, enhance user experience, and promote a culture of reading in the digital age.
        </p>

        <!-- Feature Cards -->
        <div class="features">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-search"></i></div>
                <h3>Smart Search</h3>
                <p>Find books instantly with our advanced search algorithms, intuitive categorizations, and real-time filtering system.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Deep Analytics</h3>
                <p>Track borrowing trends, monitor inventory, and assess library performance with beautiful, detailed management reports.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-lightbulb"></i></div>
                <h3>Innovation</h3>
                <p>We seamlessly integrate modern tools and cloud technology to ensure your library remains ahead of the digital curve.</p>
            </div>
        </div>

        <!-- Interactive Vision Section -->
        <div class="vision-wrapper">
            <button id="visionBtn">Reveal Our Vision</button>
            <div id="visionText">
                <i class="fas fa-quote-left" style="color: #D4AF37; margin-right: 10px; font-size: 24px;"></i>
                To create a seamless digital ecosystem where knowledge flows freely, and every reader feels empowered to learn, explore, and grow.
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Library Management System | Professional Edition. All Rights Reserved.</p>
    </footer>

    <!-- Interactive Script -->
    <script>
        document.getElementById('visionBtn').addEventListener('click', function() {
            const visionText = document.getElementById('visionText');
            
            if (visionText.classList.contains('show')) {
                visionText.style.opacity = '0';
                visionText.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    visionText.classList.remove('show');
                }, 500); // Matches CSS transition time
            } else {
                visionText.classList.add('show');
                // Small delay to let display:block apply before animating opacity
                setTimeout(() => {
                    visionText.style.opacity = '1';
                    visionText.style.transform = 'translateY(0)';
                }, 10);
            }
        });
    </script>

</body>
</html>