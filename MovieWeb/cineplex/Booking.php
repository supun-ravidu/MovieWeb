<?php
// Include database connection file
require_once 'db.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $movieSelection = $_POST['movieSelection'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $bookingDate = $_POST['bookingDate'] ?? ''; 
    $phone = $_POST['phone'] ?? '';
    $price = $_POST['price'] ?? 0;
    $seat = $_POST['seat'] ?? '';
    $carParking = $_POST['carParking'] ?? 'No'; // Capturing the car parking option

    $movieSelection = htmlspecialchars(strip_tags($movieSelection));
    $name = htmlspecialchars(strip_tags($name));
    $email = htmlspecialchars(strip_tags($email));
    $bookingDate = htmlspecialchars(strip_tags($bookingDate));
    $phone = htmlspecialchars(strip_tags($phone));
    $price = htmlspecialchars(strip_tags($price));
    $seat = htmlspecialchars(strip_tags($seat));
    $carParking = htmlspecialchars(strip_tags($carParking)); // Sanitizing the car parking option

    // Prepare an insert statement
    $sql = "INSERT INTO bookings (movieSelection, name, email, bookingDate, phone, price, seat, carParking) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssiss", $movieSelection, $name, $email, $bookingDate, $phone, $price, $seat, $carParking);
        
        if ($stmt->execute()) {
            echo "<!DOCTYPE html>
<html>
<head>
<title>Booking Confirmation</title>
<style>
    body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
    .confirmation-message { color: #4CAF50; font-size: 22px; }
    .countdown { color: #DAA520; font-size: 18px; }
</style>
</head>
<body>
    <div class='confirmation-message'>Booking successfully saved. You will be redirected shortly.</div>
    <div class='countdown' id='countdown'></div>
    <script>
        var timeLeft = 5; // 5 seconds before redirect
        var timerId = setInterval(countdown, 1000);

        function countdown() {
            if (timeLeft == 0) {
                clearTimeout(timerId);
                window.location = 'index.php'; // Redirect URL
            } else {
                document.getElementById('countdown').innerHTML = 'Redirecting in ' + timeLeft + ' seconds...';
                timeLeft--;
            }
        }
    </script>
</body>
</html>";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
    
    $conn->close();
} else {
    echo "Invalid request method. Please submit the form.";
}
?>
