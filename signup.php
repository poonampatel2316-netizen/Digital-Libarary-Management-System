    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | LMS</title>
    
    <!-- Importing Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">

</head>
<body>

<!-- Dark Navy Overlay -->
<div class="overlay"></div>

<!-- Glassmorphism Card -->
<div class="signup-container">
    <div class="logo-area">
        <h2>SIGNUP</h2>
        <p>Create your account to explore our collections</p>
    </div>
    
    <form id="signup-form" method="post" action="process_signup.php">
        
        <div class="form-grid">
        
            
            <div class="input-group">
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="input-group">
                <input type="text" name="course" placeholder="Course" required>
            </div>
            <div class="input-group">
                <input type="text" name="semister" placeholder="Semister" required>
            </div>
            
            <div class="input-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="input-group">
                <input type="number" name="no_book_issued" placeholder="NO Book Issued" required>
            </div>
            <div class="input-group select-wrapper">
                <select name="department" required defaultValue="">
                    <option value="" disabled selected>Select Department</option>
                    <option value="Computer Science">Computer Science & Engg.</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="Mechanical">Mechanical Engineering</option>
                    <option value="Electrical">Electrical Engineering</option>
                    <option value="Faculty">Faculty / Staff</option>
                </select>
            </div>
        </div>
        
        <button type="submit">Create Account</button>
    </form>
    
    <div class="login-link">
        Already have an account? <a href="login.html">Sign in</a>
    </div>
</div>

</body>
</html>