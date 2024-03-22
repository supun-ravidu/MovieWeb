<?php
include 'db.php'; // Include database connection script

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Encrypt password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $checkEmailQuery = "SELECT email FROM users WHERE email='$email'";
    $result = $conn->query($checkEmailQuery);

    if($result->num_rows == 0) {
        // Insert user into the database
// This is from your signup.php code, it should use $hashed_password, not $password
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Email already exists.";
    }
    
    $conn->close();
}
?>