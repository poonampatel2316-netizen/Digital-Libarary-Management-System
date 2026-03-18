<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Dashboard | LMS</title>
    
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- FontAwesome for Professional Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* CSS Reset & Variables */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-navy: #0A192F;
            --accent-gold: #D4AF37;
            --text-light: #F8F9FA;
            --text-muted: #A8B2C1;
            --glass-bg: rgba(10, 25, 47, 0.6);
            --glass-border: rgba(255, 255, 255, 0.08);
            --sidebar-width: 280px;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-light);
            background-color: var(--primary-navy);
            line-height: 1.6;
            overflow-x: hidden;
            display: flex;
            min-height: 100vh;
        }

        /* Fixed Background Image with Professional Dark Overlay */
        .bg-image {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            background: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2000&auto=format&fit=crop') no-repeat center center fixed;
            background-size: cover;
            z-index: -2;
        }

        .bg-overlay {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            background: linear-gradient(135deg, rgba(10, 25, 47, 0.95) 0%, rgba(2, 12, 27, 0.85) 100%);
            z-index: -1;
        }

        /* Sidebar Styling */
        .sidebar {
            width: var(--sidebar-width);
            background: rgba(2, 12, 27, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-right: 1px solid var(--glass-border);
            padding: 30px 0;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            z-index: 100;
        }

        .sidebar-logo {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 700;
            color: var(--accent-gold);
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 30px;
            margin-bottom: 50px;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 0 15px;
        }

        .nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            padding: 15px 20px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .nav-links a i {
            font-size: 18px;
            width: 20px;
            text-align: center;
        }

        .nav-links a:hover, .nav-links a.active {
            background: rgba(212, 175, 55, 0.1);
            color: var(--accent-gold);
        }

        /* Main Content Area */
        .main {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 30px 40px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        /* Header / Top Bar */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--glass-bg);
            padding: 20px 30px;
            border-radius: 16px;
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: fadeInDown 0.8s ease;
        }

        .welcome-msg h2 {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: #fff;
            margin-bottom: 5px;
        }

        .welcome-msg p {
            color: var(--text-muted);
            font-size: 13px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* New Search Bar */
        .search-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-box i {
            position: absolute;
            left: 15px;
            color: var(--text-muted);
        }

        .search-box input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 10px 15px 10px 40px;
            border-radius: 30px;
            color: #fff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
            width: 250px;
            transition: all 0.3s ease;
            outline: none;
        }

        .search-box input:focus {
            border-color: var(--accent-gold);
            width: 280px;
            background: rgba(255, 255, 255, 0.08);
        }

        /* Notification Bell */
        .icon-btn {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .icon-btn:hover {
            background: rgba(212, 175, 55, 0.1);
            color: var(--accent-gold);
            border-color: var(--accent-gold);
        }

        .notification-badge {
            position: absolute;
            top: -2px;
            right: -2px;
            background: #E63946;
            color: #fff;
            font-size: 10px;
            font-weight: bold;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .date-display {
            background: rgba(255, 255, 255, 0.05);
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 13px;
            color: var(--accent-gold);
            font-weight: 500;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }

        .profile-img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--accent-gold);
            padding: 2px;
            cursor: pointer;
        }

        /* Stat Cards Grid */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            animation: fadeInUp 0.8s ease 0.2s both;
        }

        .card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            padding: 25px;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: rgba(212, 175, 55, 0.3);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }

        .card-icon {
            position: absolute;
            right: 25px;
            top: 30px;
            font-size: 36px;
            color: rgba(212, 175, 55, 0.15);
        }

        .card.danger .card-icon {
            color: rgba(230, 57, 70, 0.15);
        }
        .card.danger:hover {
            border-color: rgba(230, 57, 70, 0.4);
        }

        .card h3 {
            font-size: 13px;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .card p {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 700;
            color: #fff;
        }

        .card.danger p {
            color: #E63946;
        }

        /* Actions Section */
        .actions-wrapper {
            animation: fadeInUp 0.8s ease 0.3s both;
        }
        
        .actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-action {
            background: linear-gradient(135deg, #D4AF37 0%, #AA8715 100%);
            color: var(--primary-navy);
            border: none;
            padding: 14px 25px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 8px 15px rgba(212, 175, 55, 0.2);
        }

        .btn-action.secondary {
            background: rgba(255,255,255,0.05);
            border: 1px solid var(--accent-gold);
            color: var(--accent-gold);
            box-shadow: none;
            backdrop-filter: blur(10px);
        }

        .btn-action:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 20px rgba(212, 175, 55, 0.3);
        }

        .btn-action.secondary:hover {
            background: rgba(212, 175, 55, 0.15);
        }

        /* Dashboard Bottom Grid (New Feature Layout) */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            animation: fadeInUp 0.8s ease 0.4s both;
        }

        .glass-panel {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 25px;
            backdrop-filter: blur(20px);
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            padding-bottom: 15px;
        }

        .panel-header h3 {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: #fff;
        }

        .panel-header a {
            color: var(--accent-gold);
            font-size: 13px;
            text-decoration: none;
            font-weight: 500;
        }

        /* Custom Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        th {
            color: var(--text-muted);
            font-weight: 500;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }

        td {
            color: #fff;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: rgba(255,255,255,0.02);
        }

        /* Status Badges */
        .status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status.issued {
            background: rgba(212, 175, 55, 0.15);
            color: var(--accent-gold);
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        .status.returned {
            background: rgba(46, 196, 182, 0.15);
            color: #2EC4B6;
            border: 1px solid rgba(46, 196, 182, 0.3);
        }

        /* Due Soon List */
        .due-list {
            list-style: none;
        }

        .due-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .due-item:last-child {
            border-bottom: none;
        }

        .book-icon {
            width: 40px; height: 40px;
            background: rgba(255,255,255,0.05);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-gold);
            font-size: 18px;
        }

        .due-info h4 {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 3px;
        }

        .due-info p {
            color: var(--text-muted);
            font-size: 12px;
        }

        .due-days {
            margin-left: auto;
            background: rgba(230, 57, 70, 0.1);
            color: #E63946;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
        }

        /* Custom Toast Notification */
        .toast-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 2000;
        }

        .toast {
            background: rgba(10, 25, 47, 0.95);
            border-left: 4px solid var(--accent-gold);
            color: #fff;
            padding: 16px 25px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            backdrop-filter: blur(10px);
            transform: translateX(120%);
            transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast i {
            color: var(--accent-gold);
            font-size: 20px;
        }

        /* Animations */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .dashboard-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 992px) {
            body { flex-direction: column; }
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 20px;
                border-right: none;
                border-bottom: 1px solid var(--glass-border);
            }
            .sidebar-logo { margin-bottom: 20px; justify-content: center; }
            .nav-links { flex-direction: row; flex-wrap: wrap; justify-content: center; }
            .main { margin-left: 0; padding: 20px; }
            .top-bar { flex-direction: column; gap: 20px; text-align: center; }
            .search-box input { width: 100%; }
        }
    </style>
</head>
<body>

    <!-- Background Elements -->
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>

    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <i class="fas fa-book-reader"></i> LMS
        </div>
        <div class="nav-links">
            <a href="#" class="active"><i class="fas fa-th-large"></i> Dashboard</a>
            <a href="#"><i class="fas fa-book"></i> Books</a>
            <a href="#"><i class="fas fa-users"></i> Members</a>
            <a href="#"><i class="fas fa-hand-holding-box"></i> Issued</a>
            <a href="#"><i class="fas fa-chart-pie"></i> Reports</a>
            <a href="#"><i class="fas fa-cog"></i> Settings</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main">
        
        <!-- Header Panel -->
        <div class="top-bar">
            <div class="welcome-msg">
                <h2>Welcome back, Admin!</h2>
                <p>Here's what's happening in your library today.</p>
            </div>
            
            <div class="header-actions">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search books, members, IDs...">
                </div>
                
                <button class="icon-btn">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </button>
                
                <div class="profile-area">
                    <div class="date-display" id="date"></div>
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80" alt="Profile" class="profile-img">
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="cards">
            <div class="card">
                <i class="fas fa-books card-icon"></i>
                <h3>Total Books</h3>
                <p id="books">1,200</p>
            </div>
            <div class="card">
                <i class="fas fa-users card-icon"></i>
                <h3>Total Members</h3>
                <p id="members">350</p>
            </div>
            <div class="card">
                <i class="fas fa-book-open card-icon"></i>
                <h3>Books Issued</h3>
                <p id="issued">220</p>
            </div>
            <div class="card danger">
                <i class="fas fa-exclamation-triangle card-icon"></i>
                <h3>Overdue</h3>
                <p id="overdue">14</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="actions-wrapper">
            <div class="actions">
                <button class="btn-action" onclick="issueBook()">
                    <i class="fas fa-arrow-up-right-from-square"></i> Issue Book
                </button>
                <button class="btn-action secondary" onclick="returnBook()">
                    <i class="fas fa-undo-alt"></i> Return Book
                </button>
                <button class="btn-action secondary" onclick="addMember()">
                    <i class="fas fa-user-plus"></i> Add Member
                </button>
            </div>
        </div>

        <!-- Dashboard Grid (New Features) -->
        <div class="dashboard-grid">
            
            <!-- Live Recent Activity Table -->
            <div class="glass-panel">
                <div class="panel-header">
                    <h3>Recent Activity</h3>
                    <a href="#">View All</a>
                </div>
                <div style="overflow-x: auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>Book Title</th>
                                <th>Member Name</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="activityTable">
                            <tr>
                                <td>The Great Gatsby</td>
                                <td>Rahul Sharma</td>
                                <td>Today, 10:30 AM</td>
                                <td><span class="status issued">Issued</span></td>
                            </tr>
                            <tr>
                                <td>Clean Code</td>
                                <td>Anjali Verma</td>
                                <td>Today, 09:15 AM</td>
                                <td><span class="status returned">Returned</span></td>
                            </tr>
                            <tr>
                                <td>1984 by George Orwell</td>
                                <td>Mohit Desai</td>
                                <td>Yesterday</td>
                                <td><span class="status issued">Issued</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Books Due Soon -->
            <div class="glass-panel">
                <div class="panel-header">
                    <h3>Due Soon</h3>
                    <a href="#">Remind All</a>
                </div>
                <ul class="due-list">
                    <li class="due-item">
                        <div class="book-icon"><i class="fas fa-book"></i></div>
                        <div class="due-info">
                            <h4>Design Patterns</h4>
                            <p>Issued to: Priya S.</p>
                        </div>
                        <div class="due-days">Tomorrow</div>
                    </li>
                    <li class="due-item">
                        <div class="book-icon"><i class="fas fa-book"></i></div>
                        <div class="due-info">
                            <h4>Atomic Habits</h4>
                            <p>Issued to: Karan Y.</p>
                        </div>
                        <div class="due-days">2 Days</div>
                    </li>
                    <li class="due-item">
                        <div class="book-icon"><i class="fas fa-book"></i></div>
                        <div class="due-info">
                            <h4>Data Structures</h4>
                            <p>Issued to: Aman K.</p>
                        </div>
                        <div class="due-days">3 Days</div>
                    </li>
                </ul>
            </div>

        </div>
        
    </div>

    <!-- Toast Notification Container -->
    <div class="toast-container" id="toastContainer"></div>

    <!-- Interactive Script -->
    <script>
        // Display current date
        const dateOptions = { weekday: 'long', year: 'numeric', month: 'short', day: 'numeric' };
        document.getElementById("date").textContent = new Date().toLocaleDateString('en-US', dateOptions);

        // Toast Notification System
        function showToast(message, iconClass = "fa-check-circle") {
            const container = document.getElementById("toastContainer");
            const toast = document.createElement("div");
            toast.className = "toast";
            toast.innerHTML = `<i class="fas ${iconClass}"></i> <span>${message}</span>`;
            
            container.appendChild(toast);
            setTimeout(() => toast.classList.add("show"), 10);
            
            setTimeout(() => {
                toast.classList.remove("show");
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }

        // Add row to Recent Activity Table dynamically
        function addActivityRow(bookName, memberName, statusClass, statusText) {
            const table = document.getElementById("activityTable");
            const newRow = document.createElement("tr");
            
            // Highlight animation for new row
            newRow.style.backgroundColor = "rgba(212, 175, 55, 0.2)";
            newRow.style.transition = "background-color 1s ease";
            
            newRow.innerHTML = `
                <td>${bookName}</td>
                <td>${memberName}</td>
                <td>Just Now</td>
                <td><span class="status ${statusClass}">${statusText}</span></td>
            `;
            
            // Prepend puts it at the top of the table
            table.insertBefore(newRow, table.firstChild);
            
            // Remove highlight after a moment
            setTimeout(() => {
                newRow.style.backgroundColor = "transparent";
            }, 1000);

            // Keep only top 4 rows to keep UI clean
            if(table.children.length > 4) {
                table.removeChild(table.lastChild);
            }
        }

        // Dashboard Functions
        let issuedCount = 220;
        let memberCount = 350;

        function issueBook() {
            issuedCount++;
            document.getElementById("issued").textContent = issuedCount;
            
            // Create a fake random book/member for realism
            const randomBooks = ["Sapiens", "Dune", "To Kill a Mockingbird", "The Alchemist"];
            const randomBook = randomBooks[Math.floor(Math.random() * randomBooks.length)];
            
            addActivityRow(randomBook, "New User", "issued", "Issued");
            showToast(`"${randomBook}" issued successfully!`);
        }

        function returnBook() {
            if (issuedCount > 0) {
                issuedCount--;
                document.getElementById("issued").textContent = issuedCount;
                
                addActivityRow("Returned Book", "Existing User", "returned", "Returned");
                showToast("Book returned successfully!");
            } else {
                showToast("No books currently issued!", "fa-exclamation-circle");
            }
        }

        function addMember() {
            memberCount++;
            document.getElementById("members").textContent = memberCount;
            showToast("New member added successfully!");
        }
    </script>
</body>
</html>