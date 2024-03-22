<?php
session_start(); // Start a new session or resume the current one
include 'db.php'; // Include the database connection script

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Fetch user from the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // Verify password
            if (password_verify($password, $row['password'])) {
                // Authentication successful
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['name']; 
                $_SESSION['email'] = $email;
                
                // Redirect to the protected page
                header("Location: index.php");
                exit();
            } else {
                // Authentication failed
                echo "Invalid email or password.";
            }
        }
    } else {
        echo "No user found with that email.";
    }
    $conn->close();
}
?>
