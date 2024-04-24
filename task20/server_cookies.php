<?php
// File: server_cookies.php
// Contains PHP code for setting and retrieving cookies on the server-side

// Set a cookie with a specified name, value, and expiration date
$name = "username";
$value = "john_doe";
$expiration = time() + (7 * 24 * 60 * 60); // Expires in 7 days
$path = "/"; // Cookie is available in the entire domain

setcookie($name, $value, $expiration, $path);

// Get the value of a cookie by its name
$username = $_COOKIE["username"];
echo "Username: " . $username;
?>
