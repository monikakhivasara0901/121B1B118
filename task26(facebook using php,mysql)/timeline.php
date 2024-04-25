<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT users.username, posts.content, posts.created_at FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.created_at DESC");
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row['username']}</strong>: {$row['content']} ({$row['created_at']})</p>";
}

$stmt->close();
$conn->close();
?>
