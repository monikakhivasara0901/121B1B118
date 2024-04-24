<?php
session_start();

// Check if user is not logged in
if(!isset($_SESSION['user_id'])) {
    header("Location: index_ass6.php");
    exit;
}

// Check if logout button is clicked
if(isset($_POST['logout'])) {
    // Unset session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Delete cookie (if exists)
    if(isset($_COOKIE['user_id'])) {
        setcookie('user_id', '', time() - 3600, "/");
    }
    header("Location: 7_1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        p {
            text-align: center;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type="submit"] {
            background-color: #f44336;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Dashboard</h2>
        <p>You are logged in.</p>
        <form method="post" action="">
            <input type="submit" name="logout" value="Logout">
        </form>
    </div>
</body>
</html>
