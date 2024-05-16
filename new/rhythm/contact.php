<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - Rhythm Tourism</title>
<link rel="stylesheet" href="styles/style.css"> <!-- Link to your CSS file -->
</head>
<body>
  <div class="content">
    <header class="navbar">
      <div class="logo">Rhythm Tourism</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php" class="active">Contact Us</a></li>
      </ul>
    </header>

    <section class="contact-section">
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form action="save_message.php" method="post">
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
          
          <label for="email">Your Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>

          <label for="message">Message:</label>
          <textarea id="message" name="message" placeholder="Enter your message" required></textarea>

          <button type="submit" class="submit-btn">Send Message</button>
        </form>
      </div>
    </section>

    <footer class="footer">
      &copy; 2024 Rhythm Tourism. All rights reserved.
    </footer>
  </div>
</body>
</html>
