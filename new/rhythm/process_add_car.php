<?php
session_start();
// Include database connection file
include('dbconnect.php');

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $carName = $_POST['car_name'];
    $price = $_POST['price'];

    // Escape special characters to prevent SQL injection
    $carName = mysqli_real_escape_string($conn, $carName);
    $price = (int)$price; // Convert price to integer
    $userid=$_SESSION['user_id'];
    // Prepare insert statement
    $sql = "INSERT INTO cars (car_name, provider_id, price, status) VALUES ('$carName', '$userid', $price, 'available')";
    $result=mysqli_query($conn, $sql);
    // Execute the statement
    if ($result==TRUE) {    
        // Redirect to dashboard with success message
        header("Location: dashboard.php?success=Car added successfully");
        exit();
    } else {
        // Redirect to dashboard with error message
        header("Location: dashboard.php?error=Error adding car");

        exit();
    }

    // Close connection
    mysqli_close($conn);
} else {
    // Redirect to dashboard with error message if accessed directly
    header("Location: dashboard.php?error=Invalid request");
    exit();
}
?>
