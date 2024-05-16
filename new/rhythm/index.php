<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rhythm Tourism</title>
<link rel="stylesheet" href="styles/style.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="content" style="height:90vh;">
  <header class="navbar">
    <div class="logo">Rhythm Tourism</div>
    <ul class="nav-links">
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="logout.php">
        <?php
          session_start();
          if(isset($_SESSION['username'])){
            echo "Logout as ". $_SESSION['username'];
          }
          
        ?></a></li>
    </ul>
</header>
  <section class="hero-section">
    <div class="search-form">
      <h2>Find Your Ride</h2>
      <form action="search.php" method="POST">
        <label for="pickup">Pickup Location:</label>
        <input type="text" id="pickup" name="pickup" value="Ahmedabad" placeholder="Enter Pickup Location" disabled>Ahmedabad
        <label for="drop">Drop Location:</label>
<select name="drop" id="drop">
    <option value="Bikaner">Bikaner</option>
    <option value="Abu">Abu</option>
    <option value="Kutch">Kutch</option>
    <option value="Bavla">Bavla</option>
</select>
        <input type="submit" class="search-btn" value="Search">
      </form>
    </div>
  </section>
</div>
</body>
</html>
