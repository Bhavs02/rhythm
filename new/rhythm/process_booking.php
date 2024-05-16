<?php
session_start();
include('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    $carName = $_POST['carName'];
    $price = $_POST['price'];
    $distance = $_POST['distance'];
    $username = $_POST['username'];
    
    // Assuming you have a function to get user_id from username
    $userId = getUserIdFromUsername($username);

    // Insert booking into bookings table
    $sql = "INSERT INTO bookings (user_id, car_id, pickup_city, drop_city, booking_date)
            VALUES ('$userId', '$carName', '$pickupCity', '$dropCity', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo 'success'; // Return success message to AJAX request
    } else {
        echo 'failure'; // Return failure message to AJAX request
    }
} else {
    echo 'Invalid request'; // Handle invalid request
}
?>
