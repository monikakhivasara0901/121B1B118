<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "college_admission";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
