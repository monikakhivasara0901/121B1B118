<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $conn = new mysqli("localhost", "username", "password", "database");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO posts (user_id, content) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $content);

    $user_id = $_SESSION['user_id'];
    $content = $_POST['content'];
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: timeline.php");
    exit();
}
?>
