<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ecommerce_platform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
