<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verificationCode = md5(uniqid(rand(), true));

    $sql = "INSERT INTO users (username, email, password, verification_code) VALUES ('$username', '$email', '$password', '$verificationCode')";

    if ($conn->query($sql) === TRUE) {
        $subject = "Email Verification";
        $message = "Click the following link to verify your email address: http://example.com/verify.php?code=$verificationCode";
        $headers = "From: your@example.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "Registration successful. Please check your email for verification.";
        } else {
            echo "Failed to send verification email.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
