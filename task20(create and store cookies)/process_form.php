<?php
// File: process_form.php
// Process form submission and retrieve cookie value

// Include the server-side cookies file
include('server_cookies.php');

// Get the value of the cookie named "username"
$username = $_COOKIE["username"];
echo "Username from Cookie: " . $username;
?>
