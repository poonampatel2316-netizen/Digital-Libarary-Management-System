<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Catalog | LMS</title>
    
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- FontAwesome for Professional Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="catalog.css">

</head>
<body>

    <!-- Background Elements -->
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>

    <!-- Header Navigation -->
    <header class="header">
        <div class="logo">
            <i class="fas fa-book-reader"></i> LMS
        </div>
        <nav>
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
        </nav>
    </header>
    <!-- Catalog Main Area -->
    <div class="catalog-container">
        
        <!-- Catalog Header -->
        <div class="catalog-header">
            <h1>Books Catalog</h1>
            <p>Discover our extensive collection of world-class literature</p>
        </div>

        <!-- Search and Filter Bar -->
        <div class="search-filter-bar">
            <div class="search-input-wrapper">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search by title, author, or ISBN...">
            </div>
            
            <select class="filter-select">
                <option value="">All Categories</option>
                <option value="business">Computer Science & Engineering</option>
                <option value="science">Electrical Engineering</option>
                <option value="art">Machenical Engineering</option>
                <option value="history">Civil Engineering</option>
            </select>
        </div>

        <!-- Books Grid -->
        <div class="books-grid">
            
            <!-- Book 1 -->
            <div class="book-card">
                <div class="book-badge">New Arrival</div>
                <div class="book-img-container">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=800&auto=format&fit=crop" alt="Book Cover" class="book-img">
                </div>
                <p class="book-category">Business & Strategy</p>
                <h3 class="book-title">The Art of Innovation</h3>
                <p class="book-author">By Alexander Pierce</p>
                
                <div class="book-meta">
                    <div class="book-status status-available">
                        <i class="fas fa-check-circle"></i> Available
                    </div>
                    <button class="btn-reserve">Reserve</button>
                </div>
            </div>

            <!-- Book 2 -->
            <div class="book-card">
                <div class="book-img-container">
                    <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=800&auto=format&fit=crop" alt="Book Cover" class="book-img">
                </div>
                <p class="book-category">Art & Design</p>
                <h3 class="book-title">Modern Architecture</h3>
                <p class="book-author">By Elena Rodriguez</p>
                
                <div class="book-meta">
                    <div class="book-status status-issued">
                        <i class="fas fa-clock"></i> Currently Issued
                    </div>
                    <button class="btn-reserve">Waitlist</button>
                </div>
            </div>

            <!-- Book 3 -->
            <div class="book-card">
                <div class="book-badge">Best Seller</div>
                <div class="book-img-container">
                    <img src="https://images.unsplash.com/photo-1618666012174-83b441c0bc76?q=80&w=800&auto=format&fit=crop" alt="Book Cover" class="book-img">
                </div>
                <p class="book-category">Science & Astronomy</p>
                <h3 class="book-title">The Silent Cosmos</h3>
                <p class="book-author">By Dr. Julian Vance</p>
                
                <div class="book-meta">
                    <div class="book-status status-available">
                        <i class="fas fa-check-circle"></i> Available
                    </div>
                    <button class="btn-reserve">Reserve</button>
                </div>
            </div>

            <!-- Book 4 -->
            <div class="book-card">
                <div class="book-img-container">
                    <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=800&auto=format&fit=crop" alt="Book Cover" class="book-img">
                </div>
                <p class="book-category">Philosophy</p>
                <h3 class="book-title">Thoughts of Antiquity</h3>
                <p class="book-author">By Marcus Aurelius</p>
                
                <div class="book-meta">
                    <div class="book-status status-available">
                        <i class="fas fa-check-circle"></i> Available
                    </div>
                    <button class="btn-reserve">Reserve</button>
                </div>
            </div>

            <!-- Book 5 -->
            <div class="book-card">
                <div class="book-img-container">
                    <img src="https://images.unsplash.com/photo-1589998059171-989d887dda6e?q=80&w=800&auto=format&fit=crop" alt="Book Cover" class="book-img">
                </div>
                <p class="book-category">Technology</p>
                <h3 class="book-title">The Quantum Era</h3>
                <p class="book-author">By Sarah Jenkins</p>
                
                <div class="book-meta">
                    <div class="book-status status-issued">
                        <i class="fas fa-clock"></i> Currently Issued
                    </div>
                    <button class="btn-reserve">Waitlist</button>
                </div>
            </div>

            <!-- Book 6 -->
            <div class="book-card">
                <div class="book-badge">Editor's Pick</div>
                <div class="book-img-container">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=800&auto=format&fit=crop" alt="Book Cover" class="book-img">
                </div>
                <p class="book-category">Literature</p>
                <h3 class="book-title">Whispers of the Wind</h3>
                <p class="book-author">By Claire Beauchamp</p>
                
                <div class="book-meta">
                    <div class="book-status status-available">
                        <i class="fas fa-check-circle"></i> Available
                    </div>
                    <button class="btn-reserve">Reserve</button>
                </div>
            </div>

        </div>

        <!-- Pagination Controls -->
        <div class="pagination">
            <a href="#" class="page-btn"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="page-btn active">1</a>
            <a href="#" class="page-btn">2</a>
            <a href="#" class="page-btn">3</a>
            <span style="color: rgba(255,255,255,0.3); display: flex; align-items: center; padding: 0 5px;">...</span>
            <a href="#" class="page-btn">12</a>
            <a href="#" class="page-btn"><i class="fas fa-chevron-right"></i></a>
        </div>

    </div>

    <!-- Premium Footer -->
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
                <a href="index.html">Home</a>
                <a href="catalog.html">Catalog Search</a>
                <a href="about.html">About the System</a>
                <a href="contact.html">Contact Support</a>
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

</body>
</html>