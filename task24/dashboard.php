<?php
session_start();
include('config.php');

if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit();
}

// Display user's dashboard
?>
