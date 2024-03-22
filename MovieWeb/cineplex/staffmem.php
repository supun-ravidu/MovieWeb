<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cineplex_db";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepare statement to insert new staff member
        $stmt = $conn->prepare("INSERT INTO staff_members (name, position, department, email, phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $position, $department, $email, $phone);

        // Assign values from form to variables
        $name = $_POST['name'];
        $position = $_POST['position'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Execute the prepared statement
        if (!$stmt->execute()) {
            echo "Error: " . $stmt->error;
        }
        $stmt->close(); // Close statement
    }

    // Query to select all staff members
    $sql = "SELECT id, name, position, department, email, phone FROM staff_members";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Position: " . $row["position"]. " - Department: " . $row["department"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close(); // Close connection
} catch(Exception $e) {
    echo "Message: " . $e->getMessage();
}
?>

