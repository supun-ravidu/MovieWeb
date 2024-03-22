<?php
session_start(); // Start the session at the beginning of the script

// Hardcoded username and password
$admin_username = 'admin';
$admin_password = '123'; // This should be hashed in a real application

// Get the submitted username and password from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the submitted credentials match the hardcoded ones
if ($username === $admin_username && $password === $admin_password) {
    // Credentials are correct; set the session variable and redirect to admin.php
    $_SESSION['admin_logged_in'] = true; // Set a session variable indicating admin is logged in
    header('Location: admin.php');
    exit();
} else {
    // Credentials are incorrect; redirect back to the login page with an error
    echo "<script>alert('Incorrect username or password.'); window.location.href='adminlogin.php';</script>";
}
