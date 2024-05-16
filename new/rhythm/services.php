<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rhythm Tourism</title>
<link rel="stylesheet" href="styles/style.css">
<style>
    body {
        font-family: "Architects Daughter", cursive;
  margin: 0;
  padding: 0;
}

.content {
  padding: 20px;
}

.services-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.service {
  background-color: #f4f4f4;
  border-radius: 8px;
  padding: 20px;
  margin: 20px;
  width: 250px;
  height:300px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.service:hover {
  transform: translateY(-5px);
}

.service h2 {
  color: #333;
  margin-bottom: 10px;
}

.service p {
  color: #666;
}
</style>
</head>
<body>
    <div class="content">
  <header class="navbar">
    <div class="logo">Rhythm Tourism</div>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="services.php" class="active">Services</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
</header>
<section class="services-section">
    <a href="index.php">
            <div class="service">
                <h2>Cab Rentals</h2>
                <p>Experience hassle-free cab rentals for your travel needs. Choose from a variety of cars suitable for solo trips, family vacations, or group outings. Our fleet includes sedans, SUVs, sports cars, and more. Enjoy comfortable rides with professional drivers at affordable rates.</p>
            </div></a>
            <a href="index.php">
    <div class="service">
                <h2>Bus Rentals</h2>
                <p>Planning a trip with a large group? Explore our bus rental services. Whether it's a corporate event, school excursion, or a leisure trip with friends, we have buses of different capacities to accommodate your travel requirements. Sit back, relax, and enjoy the journey with our reliable bus rentals.</p>
            </div></a>
            <a href="index.php">
            <div class="service">
                <h2>City-to-City Travel</h2>
                <p>Need to travel between cities? Rhythm Tourism offers convenient city-to-city travel options. Select your starting point and destination, and let us handle the rest. Discover seamless connectivity between major cities with our efficient transportation services.</p>
            </div></a>
            <a href="index.php">
            <div class="service">
                <h2>Customized Packages</h2>
                <p>Create personalized travel packages tailored to your preferences. Choose your pickup and drop locations, select the type of vehicle or bus, and customize your itinerary. Our team ensures a smooth and enjoyable travel experience from start to finish.</p>
            </div></a>
            <a href="contact.php">
            <div class="service">
                <h2>24/7 Customer Support</h2>
                <p>Our dedicated customer support team is available round the clock to assist you. Whether you have inquiries about bookings, need assistance during your journey, or have special requests, we are here to help. Contact us anytime for prompt and reliable support.</p>
            </div></a><a href="login.php">
            <div class="service">
                <h2>Car Provider Services</h2>
                <p>Are you a car provider looking to list your vehicles for rent? Join Rhythm Tourism's platform and manage your car rental business effortlessly. Update availability, set rental prices, add new vehicles, and track bookings with our user-friendly interface for car providers.</p>
            </div>
        </section>
</div>
</body>
</html>
