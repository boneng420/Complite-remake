<?php
    session_start();
    require_once '../PHP/config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Account</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../CSS/Admin.css" rel="stylesheet">
    <style>
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 250px;
            background-color: #2c3e50;
            padding: 20px 0;
            color: white;
            transition: all 0.3s ease;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            padding: 0 20px;
        }

        .sidebar-menu {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 0 20px;
        }

        .sidebar-btn, .sidebar-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border: none;
            background: none;
            color: white;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar-btn i, .sidebar-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .sidebar-btn:hover, .sidebar-link:hover {
            background-color: #34495e;
        }

        .sidebar-btn.active, .sidebar-link.active {
            background-color: #3498db;
        }

        .logout-btn {
            margin-top: auto;
            background-color: #e74c3c;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .main-content {
                margin-left: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <div class="sidebar-menu">
            <a href="Account.php" class="sidebar-link active">
                <i class="fas fa-user"></i> Account
            </a>
            <a href="Report.php" class="sidebar-link">
                <i class="fas fa-chart-bar"></i> Reports
            </a>
            <a href="Overview.php" class="sidebar-link">
                <i class="fas fa-users"></i> User Overview
            </a>
            <button class="sidebar-btn logout-btn" onclick="logout()">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </div>
    </div>

    <div class="main-content">
        <form id="accountCreationForm" method="POST" action="../PHP/process/Create-Account.php">
            <div class="dashboard-card" id="accountForm">
                <h3>Create Account</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstName" class="form-input" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastName" class="form-input" placeholder="Enter Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" name="middleName" class="form-input" placeholder="Enter Middle Name">
                    </div>
                    <div class="form-group">
                        <label>Birthdate</label>
                        <input type="date" name="birthDate" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label>Sex</label>
                        <select name="sex" class="form-input" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-input" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-input" placeholder="Enter Username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-input" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                        <label>Account Type</label>
                        <select name="accountType" class="form-input" required>
                            <option value="Admin">Admin</option>
                            <option value="Instructor">Instructor</option>
                            <option value="Student">Student</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="submit-btn" style="width: 100%; margin-top: 20px;">Create Account</button>
            </div>
        </form>
    </div>
    
    <script src="../JS/Logout.js"></script>
</body>
</html>