<?php
// Start session to store user information
session_start();
include('dbconnect.php');

// Process login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL to fetch user data based on email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if ($password==$row["password"]) {
            // Set session variables for user
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["user_type"] = $row["user_type"];
            $_SESSION["username"]=$row["username"];
            // Redirect based on user type
            if ($_SESSION["user_type"] == "car_provider") {
                header("Location: dashboard.php");
                exit();
            } elseif ($_SESSION["user_type"] == "traveler") {
                header("Location: index.php");
                exit();
            }
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }
}
// Close connection (similar to signup_process.php)
?>
