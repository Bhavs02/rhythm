<?php
session_start();
include('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    $carId = $_POST['car_id'];
    $carName = $_POST['car_name'];
    $price = $_POST['price'];
    $status = $_POST['status'];

    // Update the car details in the database
    $sql = "UPDATE cars SET car_name='$carName', price='$price', status='$status' WHERE car_id='$carId'";

    if ($conn->query($sql) === TRUE) {
        echo "Car details updated successfully!";
        header("Location: dashboard.php"); // Redirect to dashboard after successful update
        exit();
    } else {
        echo "Error updating car details: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
