<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Distance and Available Cars</title>
    <style>
        body {
            font-family: "Architects Daughter", cursive;
            background-image: url('https://images3.alphacoders.com/945/945830.jpg');
            padding: 20px;
            color: white;
        }

        .content {
            height: 80vh;
            text-align: center;
        }

        h2, h3 {
            color: white;
        }

        .card {
            border-radius: 5px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
            margin: 3vh;
            padding: 10px;
            width:30%;
            transition: backdrop-filter 0.3s ease;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .card:hover {
            backdrop-filter: blur(25px);
            box-shadow: 0 2px 15px rgba(0, 255, 0, 0.9);
        }

        .card p {
            margin: 5px 0;
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="container">
            <?php
            session_start();
            if(!isset($_SESSION['username'])){
                header("Location: register.php");
                exit();
            }
            $usrnam=$_SESSION['username'];
            include('dbconnect.php');

            function calculateDistance($city1, $city2) {
                return rand(50, 500); 
            }

            if (isset($_POST['drop'])) {
                $pickupCity = "Ahmedabad";
                $dropCity = $_POST['drop'];

                // Calculate distance between pickup and drop cities
                $distance = calculateDistance($pickupCity, $dropCity);
                echo "<h2>Distance between $pickupCity and $dropCity is $distance km.</h2>";

                $sql = "SELECT * FROM cars WHERE status='available'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo "<h3>Available Cars and Buses:</h3>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='card' onclick=\"redirectToBookingConfirmation('{$row['car_name']}', {$row['price']}, $distance, '$usrnam')\">";
                        echo "<h3>Car/Bus ID: " . $row['car_id'] . "</h3>";
                        echo "<p>Name: " . $row['car_name'] . "</p>";
                        echo "<p>Cost for traveling: " . $row['price'] * $distance . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No available cars or buses.</p>";
                }
            } else {
                echo "Invalid Request";
            }
            ?>
        </div>
    </div>

    <script>
        function redirectToBookingConfirmation(carName, price, distance, usrnam) {
            const usrNam = usrnam;
            const totalCost = price * distance;
            const confirmationMessage = `Hello ${usrnam}, ${carName} has been booked for you. You have to pay ${totalCost}.`;
            if (confirm(confirmationMessage)) {
                window.location.href = "index.php"; // Change "index.php" to the actual homepage URL
            } }
    </script>
</body>
</html>
