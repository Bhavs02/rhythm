<?php
session_start();
include('dbconnect.php');

if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    // Delete the car from the database
    $sql = "DELETE FROM cars WHERE car_id='$carId'";

    if ($conn->query($sql) === TRUE) {
        echo "Car deleted successfully!";
        header("Location: dashboard.php"); // Redirect to dashboard after successful delete
        exit();
    } else {
        echo "Error deleting car: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
