<?php
include('config.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Display products
?>
