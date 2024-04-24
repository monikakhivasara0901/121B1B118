<?php
session_start();

// Add product to cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    $product_id = $_POST["product_id"];
    $_SESSION["cart"][$product_id]++;
}

// Remove product from cart
if (isset($_GET["remove_from_cart"])) {
    $product_id = $_GET["remove_from_cart"];
    unset($_SESSION["cart"][$product_id]);
}

// Update cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_cart"])) {
    foreach ($_POST["quantity"] as $product_id => $quantity) {
        $_SESSION["cart"][$product_id] = $quantity;
    }
}
?>
