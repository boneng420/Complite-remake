<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPLITE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;700;800&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/main.css">
</head>
<body>
    <header class="header">
        <div class="header-bottom">
            <div class="container">
                <a href="#" class="logo-container">
                    <img src="../Resources/Logo.png" alt="COMPLITE Robot Mascot" class="logo-image">
                    <span class="logo-text">COMPLITE</span>
                </a>
                <nav class="navbar">
                    <a href="../HTML/main.php" class="nav-link">Home</a>
                    <a href="../HTML/Lessons.php" class="nav-link">Lessons</a>
                    <a href="../HTML/Activity.html" class="nav-link">Activities</a>
                    <a href="../HTML/about.html" class="nav-link">About</a>
                    <a href="../HTML/profile.php" class="nav-link">Profile</a>
                    <a href="../Admin/process/logout.php" class="nav-link">Logout</a>
                </nav>
            </div>
        </div>
    </header>


    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="h3">About COMPLITE</h3>
                    <p class="about-text">Educational platform dedicated to interactive learning</p>
                </div>
                
                <div class="footer-section">
                    <h3 class="h3">Navigation</h3>
                    <nav class="footer-nav">
                        <a href="#" class="footer-link">Home</a>
                        <a href="../HTML/Lessons.html" class="footer-link">Lessons</a>
                        <a href="../HTML/Activity.html" class="footer-link">Activities</a>
                        <a href="#" class="footer-link">About</a>
                        <a href="#" class="footer-link">Profile</a>
                    </nav>
                </div>
                
                <div class="footer-section">
                    <h3 class="h3">Contact</h3>
                    <nav class="footer-nav">
                    <p>Email: contact@complite.com</p>
                    <p>Phone: (123) 456-7890</p>
                    <a href="#reportModal" class="footer-link"><h3>Send a Report?</h3></a>
                    </nav>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 COMPLITE. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Report Modal (existing code) -->
<div id="reportModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2>Submit a Report</h2>
        <form id="reportForm" method="POST">
            <div class="form-group">
                <label for="reportMessage">Report Details</label>
                <textarea id="reportMessage" name="reportMessage" rows="4" placeholder="Describe your report..." required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Report</button>
        </form>
    </div>
</div>



</body>
</html>