<?php
// Database connection
$servername = "localhost";
$username = "user";
$password = "BhaVsha#269";
$dbname = "rhythm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>