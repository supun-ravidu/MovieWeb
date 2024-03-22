<?php
include 'db.php';

$query = "SELECT * FROM contactus ORDER BY id DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Contact Us Submissions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            background-image: url('https://static.wixstatic.com/media/467d85_cb633029887848ae95f11cf13d59f153~mv2.jpg/v1/fill/w_640,h_520,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/467d85_cb633029887848ae95f11cf13d59f153~mv2.jpg'); 
            background-size: cover;
            background-position: center; 
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,.1);
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .fa-trash {
            color: red;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Contact Us Submissions</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['subject']) ?></td>
                <td><?= htmlspecialchars($row['message']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
