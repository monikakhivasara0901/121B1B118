<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$database = "library";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve books
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

// Display books in HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Catalog</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
<h2>Book Catalog</h2>
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Published Year</th>
        <th>Availability</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["author"] . "</td>";
            echo "<td>" . $row["genre"] . "</td>";
            echo "<td>" . $row["published_year"] . "</td>";
            echo "<td>" . ($row["available"] ? "Available" : "Not Available") . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No books found</td></tr>";
    }
    ?>
</table>
</body>
</html>
