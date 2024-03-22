<?php
// Include database connection file
require_once 'db.php';

// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Fetch all bookings from the database
$sql = "SELECT * FROM bookings ORDER BY bookingDate DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Bookings</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
            background-image: url('https://static.vecteezy.com/system/resources/previews/001/372/917/non_2x/white-curve-template-background-vector.jpg');
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #007bff;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #dddfe2;
            cursor: pointer;
        }
        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }
            table thead {
                display: none;
            }
            table tr {
                display: block;
                margin-bottom: 20px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }
            table td {
                display: block;
                text-align: right;
                position: relative;
                padding-left: 50%;
            }
            table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
                white-space: nowrap;
            }
        }
    </style>
</head>
<body>
    <h2>Booking List</h2>
    <table>
        <thead>
            <tr>
                <th>Movie Selection</th>
                <th>Name</th>
                <th>Email</th>
                <th>Booking Date</th>
                <th>Phone</th>
                <th>Price</th>
                <th>Seat</th>
                <th>Car Parking</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td data-label='Movie Selection'>".$row["movieSelection"]."</td>
                            <td data-label='Name'>".$row["name"]."</td>
                            <td data-label='Email'>".$row["email"]."</td>
                            <td data-label='Booking Date'>".$row["bookingDate"]."</td>
                            <td data-label='Phone'>".$row["phone"]."</td>
                            <td data-label='Price'>".$row["price"]."</td>
                            <td data-label='Seat'>".$row["seat"]."</td>
                            <td data-label='Car Parking'>".$row["carParking"]."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8' data-label='No bookings found'>No bookings found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
$conn->close();
?>
