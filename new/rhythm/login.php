<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Login - Rhythm Tourism</title>
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
                <li><a href="register.php" class="active">Signup</a></li>
            </ul>
        </header>
        <section class="login-section">
            <h1>User Login</h1>
            <form action="login_process.php" method="POST">
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" style="background-color: black;">Login</button>
            </form>
        </section>
        <footer class="footer">
            &copy; 2024 Rhythm Tourism. All rights reserved.
        </footer>
    </div>
</body>
</html>
