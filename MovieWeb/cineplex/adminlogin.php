<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://www.boxofficepro.com/wp-content/uploads/2022/05/FSBC-UoXEAI2uSJ-2.jpeg'); 
            background-size: cover; /* Cover the entire page */
            background-position: center; /* Center the background image */
            background-attachment: fixed; /* Optional: Fix the background image */
        }
        .form-container {
            min-height: 100vh; /* Adjust height to fit the viewport */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Adjust form width */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="authenticate.php" method="post" class="needs-validation" novalidate>
            <h2 class="text-center">Admin Login</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
                <div class="invalid-feedback">
                    Please enter your username.
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="invalid-feedback">
                    Please enter your password.
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <!-- Optional Bootstrap JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Bootstrap Bundle with Popper -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
