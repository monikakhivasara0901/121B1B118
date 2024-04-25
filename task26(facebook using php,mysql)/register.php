<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "username", "password", "database");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO users (username, password, full_name) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $full_name);

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $full_name = $_POST['full_name'];
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: login.php");
    exit();
}
?>
