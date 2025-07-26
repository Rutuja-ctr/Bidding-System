<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "specterm_art";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<script>alert('Database is not Conneccted');</script>";
}
//echo "Connected successfully";
?>
