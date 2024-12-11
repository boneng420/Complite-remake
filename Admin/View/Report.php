<?php
    session_start();
    require_once '../Admin/config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Reports</title>
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
            <button class="sidebar-btn active">
                <i class="fas fa-chart-bar"></i> Reports
            </button>
            <a href="overview.php" class="sidebar-btn">
                <i class="fas fa-users"></i> User Overview
            </a>
            <button class="sidebar-btn logout-btn" onclick="logout()">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </div>
    </div>

    <div class="main-content">
        <div id="reportsSection" class="dashboard-card">
            <h3>Reports</h3>
            <div class="table-container">
                <?php 
                $reportQuery = "SELECT r.*, a.username 
                                FROM reports r 
                                JOIN accounts a ON r.account_ID = a.accountID 
                                ORDER BY r.dateTime DESC";
                $reportResult = $conn->query($reportQuery);
                
                if ($reportResult->num_rows > 0) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>Report ID</th>
                            <th>From User</th>
                            <th>Description</th>
                            <th>Time and Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($report = $reportResult->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($report['reportID']); ?></td>
                            <td><?php echo htmlspecialchars($report['username']); ?></td>
                            <td><?php echo htmlspecialchars($report['reportMessage']); ?></td>
                            <td><?php echo htmlspecialchars($report['dateTime']); ?></td>
                            <td>
                                <button class="reply-btn" onclick="openReplyModal(<?php echo $report['reportID']; ?>)">
                                    Reply
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } else { ?>
                    <p>No reports available.</p>
                <?php } ?>
            </div>
        </div>

        <!-- Reply Modal -->
        <div id="replyModal" class="modal">
            <div class="modal-content">
                <span class="close-btn" onclick="closeReplyModal()">&times;</span>
                <h4>Reply to Report</h4>
                <form id="replyForm">
                    <input type="hidden" id="reportID" name="reportID">
                    <textarea id="replyMessage" name="replyMessage" rows="5" placeholder="Enter your reply..." required></textarea>
                    <button type="submit" class="submit-btn">Send Reply</button>
                </form>
            </div>
        </div>

        <!-- Success Modal -->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <span class="close-btn" onclick="closeSuccessModal()">&times;</span>
                <h4>Reply sent successfully!</h4>
                <p>Your message has been saved.</p>
            </div>
        </div>
    </div>
    
    <script src="../JS/Logout.js"></script>
    <script src="../JS/handler.js"></script>
</body>
</html>