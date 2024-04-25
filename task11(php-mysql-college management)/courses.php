<?php
include 'db.php';

$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option value='".$row['id']."'>".$row['name']."</option>";
    }
} else {
    echo "<option value=''>No courses available</option>";
}

mysqli_close($conn);
?>
