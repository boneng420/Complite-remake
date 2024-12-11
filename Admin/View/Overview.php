<?php
    session_start();
    require_once '../Admin/config/database.php';

    $totalStudent = 0;
    $totalInstructor = 0;
    $totalAdmin = 0;
    
    $stmt = "SELECT COUNT(accountID) AS totalStudent from accounts WHERE accountType = 'Student'";
    $r1 = $conn->query($stmt);

    if ($r1->num_rows > 0) {
        while($row1 = $r1->fetch_assoc()) {
            $totalStudent = $row1["totalStudent"];
        }
    } 

    $stmt2 = "SELECT COUNT(accountID) AS totalInstructor from accounts WHERE accountType = 'Instructor'";
    $r2 = $conn->query($stmt2);

    if ($r2->num_rows > 0) {
        while($row2 = $r2->fetch_assoc()) {
            $totalInstructor = $row2["totalInstructor"];
        }
    } 

    $stmt3 = "SELECT COUNT(accountID) AS totalAdmin from accounts WHERE accountType = 'Admin'";
    $r3 = $conn->query($stmt3);

    if ($r3->num_rows > 0) {
        while($row3 = $r3->fetch_assoc()) {
            $totalAdmin = $row3["totalAdmin"];
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Overview</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../CSS/Admin.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <div class="sidebar-menu">
            <a href="account.php" class="sidebar-btn">
                <i class="fas fa-user"></i> Account
            </a>
            <a href="reports.php" class="sidebar-btn">
                <i class="fas fa-chart-bar"></i> Reports
            </a>
            <button class="sidebar-btn active">
                <i class="fas fa-users"></i> User Overview
            </button>
            <button class="sidebar-btn logout-btn" onclick="logout()">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </div>
    </div>

    <div class="main-content">
        <div id="userOverview" class="dashboard-card">
            <h3>User Overview</h3>
            <div class="stat-grid">
                <div class="stat-card">
                    <h4>Total Students</h4>
                    <p id="totalStudents"><?php echo $totalStudent;?></p>
                </div>
                <div class="stat-card">
                    <h4>Total Instructors</h4>
                    <p id="totalInstructors"><?php echo $totalInstructor;?></p>
                </div>
                <div class="stat-card">
                    <h4>Total Admins</h4>
                    <p id="totalAdmins"><?php echo $totalAdmin;?></p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../JS/Logout.js"></script>
</body>
</html>