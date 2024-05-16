<?php
include('dbconnect.php');

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Sanitize inputs (optional, but recommended)
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    // Build and execute SQL query
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);

    // Check if query executed successfully
    if ($result) {
        echo "Message saved successfully!";
    } else {
        echo "Error saving message: " . mysqli_error($conn);
    }

    // Close connection (if needed)
    // mysqli_close($conn);
} else {
    echo "Invalid request!";
}
?>
