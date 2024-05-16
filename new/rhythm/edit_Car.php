<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car Details</title>
</head>
<body>
    <h1>Edit Car Details</h1>

    <?php
    session_start();
    include('dbconnect.php');

    if (isset($_GET['id'])) {
        $carId = $_GET['id'];
        $sql = "SELECT * FROM cars WHERE car_id='$carId'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    ?>

            <form action="process_edit_car.php" method="POST">
                <input type="hidden" name="car_id" value="<?php echo $row['car_id']; ?>">
                <label for="car_name">Car Name:</label>
                <input type="text" id="car_name" name="car_name" value="<?php echo $row['car_name']; ?>"><br><br>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="<?php echo $row['price']; ?>"><br><br>
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" value="<?php echo $row['status']; ?>"><br><br>
                <input type="submit" value="Edit Car">
            </form>

    <?php
        } else {
            echo "Car not found.";
        }
    } else {
        echo "Invalid request.";
    }
    ?>

</body>
</html>
