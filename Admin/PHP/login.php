<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.html");
    exit();
}

// Route to appropriate dashboard based on account type
switch ($_SESSION['account_type']) {
    case 'Admin':
        header("Location: /Complite/Admin/View/Account.php");
        break;
    case 'Instructor':
        // Create instructor dashboard when ready
        header("Location: /Complite/instructor/View/Dashboard.php");
        break;
    case 'Student':
        // Create student dashboard when ready
        header("Location: /Complite/Student/View/Dashboard.php");
        break;
    default:
        session_destroy();
        header("Location: ../index.html");
        break;
}
exit();
?>