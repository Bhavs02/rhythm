<?php
session_start();
include('dbconnect.php');

// Check if user is logged in as a car provider
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'car_provider') {
    header("Location: login.php"); // Redirect to login page if not logged in as car provider
    exit();
}

// Fetch cars provided by the logged-in car provider
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM cars WHERE provider_id='$user_id'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Provider Dashboard</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .logout-btn {
            margin-top: 20px;
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Your Dashboard</h1>
        <a href="add_car.php">Add New Car</a>
        <table>
            <thead>
                <tr>
                    <th>Car ID</th>
                    <th>Car Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['car_id'] . "</td>";
                        echo "<td>" . $row['car_name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>";
                        echo "<a href='edit_car.php?id=" . $row['car_id'] . "'>Edit</a> | ";
                        echo "<a href='delete_car.php?id=" . $row['car_id'] . "'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No cars found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
