<?php
include('config.php');

if (isset($_GET['code'])) {
    $verificationCode = $_GET['code'];

    $sql = "SELECT * FROM users WHERE verification_code='$verificationCode'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Update user's status to 'verified'
        $row = $result->fetch_assoc();
        $userId = $row['id'];
        $updateSql = "UPDATE users SET verified=1 WHERE id=$userId";
        if ($conn->query($updateSql) === TRUE) {
            echo "Email verified successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Invalid verification code.";
    }
} else {
    echo "Verification code not provided.";
}
?>
