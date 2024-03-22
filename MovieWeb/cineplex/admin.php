<?php
// Start the session
session_start();

// Check if the admin is not logged in, then redirect to login page
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: adminlogin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Admin Dashboard</title>
    <!-- Bootstrap CSS for styling and responsiveness -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        /* Add styles for background image */
        body {
            background-image: url('https://news.northeastern.edu/wp-content/uploads/2022/05/movie_theater_1400.jpg');
            background-size: cover; /* Cover the entire page */
            background-position: center; /* Center the background image */
            background-attachment: fixed; /* Fix the background image */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Slight white overlay */
            border-radius: 15px; /* Rounded corners for the container */
            padding: 20px; /* Padding inside the container */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1 class="text-center mb-4">Admin Dashboard</h1>
        </header>
        <section class="dashboard-links">
            <div class="list-group">
                <!-- Dashboard Links -->
                <a href="admin_view_contacts.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-address-book"></i> View Contacts</span>
                </a>
                <a href="staffmembers.html" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-users"></i> Staff Members</span>
                </a>
                <a href="viewBookings.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-calendar-check"></i> View Bookings</span>
                </a>
                <a href="viewStaffMembers.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-user-tie"></i> View Staff Members</span>
                </a>
            </div>
        </section>
    </div>

    <!-- Optional JS libraries for interactive components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
