<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course_id = $_POST['course'];

$sql = "INSERT INTO students (name, email, phone, course_id) VALUES ('$name', '$email', '$phone', $course_id)";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
