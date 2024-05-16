<!-- signup.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Signup - Rhythm Tourism</title>
<link rel="stylesheet" href="styles/form.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="content">
        <header class="navbar">
            <div class="logo">Rhythm Tourism</div>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </header>
        <section class="signup-section">
            <h1 style="color: white;">User Signup</h1>
            <form action="signup_process.php" method="POST">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <label for="role" style="color: white;">Choose Role:</label>
                <select name="role" id="role" required>
                    <option disabled>Select from below:</option>
                    <option value="traveler">Traveler</option>
                    <option value="car_provider">Car Provider</option>
                </select>
                <button type="submit">Signup</button>
            </form>
        </section>
        <footer class="footer">
            &copy; 2024 Rhythm Tourism. All rights reserved.
        </footer>
    </div>
</body>
</html>