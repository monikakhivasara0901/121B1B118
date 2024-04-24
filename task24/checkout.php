<?php
session_start();
include('config.php');

if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit();
}

// Handle checkout process
?>
