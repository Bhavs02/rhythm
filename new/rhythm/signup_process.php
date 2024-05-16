<?php
session_start();
include('dbconnect.php');

function setsession($email, $conn) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // User found, verify password (Note: Password should be hashed for security)
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            // Set session variables for user
            $_SESSION["user_id"] = $row["user_id"];
        }
    }
}

// Process signup form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Hash the password for security (Missing in your code)

    // SQL to insert user data into the database
    $sql = "INSERT INTO users (username, email, password, user_type)
            VALUES ('$fullname', '$email', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $fullname;
        if ($role == "traveler") {
            setsession($email, $conn);
            header("Location: index.php");
            exit();
        } elseif ($role == "car_provider") {
            setsession($email, $conn);
            header("Location: dashboard.php");
            exit();
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
