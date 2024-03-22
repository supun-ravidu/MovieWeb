<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    // Retrieve form data and sanitize it
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // SQL query to insert data into your database
    $sql = "INSERT INTO contactus (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        $messageSent = true;
    } else {
        $messageSent = false;
    }
    $conn->close();
} else {
    $messageSent = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            background-image: url('https://5.imimg.com/data5/JR/VS/IL/ANDROID-107291741/images-2020-06-12t132914-193-jpeg-500x500.jpeg'); 
            background-size: cover;
            background-position: center; 
        }
        .message-box {
            max-width: 600px;
            margin: 20px;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .message-box h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .message-box p {
            font-size: 18px;
            color: #666;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php if ($messageSent): ?>
    <div class="message-box">
        <h1>Thank You!</h1>
        <p>Record added successfully. We will contact you soon.</p>
        <a href="index.php" class="btn">Return Home</a>
    </div>
    <?php else: ?>
    <!-- Show error message or redirect back to form if needed -->
    <div class="message-box">
        <h1>Oops!</h1>
        <p>Something went wrong. Please try submitting the form again.</p>
        <a href="contact.html" class="btn">Go Back</a>
    </div>
    <?php endif; ?>
</body>
</html>
