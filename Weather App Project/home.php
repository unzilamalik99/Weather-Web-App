<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <title>Weather App Project | Home</title>
</head>

<body>
  <!-- ================================== Header ========================================== -->
  <div class="header">
    <div class="logo">
      <img src="images/logo.png" alt="logo">
      <h2>Weather</h2>
    </div>
    <h1>Weather Dashboard</h1>
    <div class="myaccount">
      <button onclick="myFunction()" class="myaccountbtn">My Account</button>
      <div id="myaccount" class="myaccount-content">
        <a class="username">
          <?php echo $_SESSION['username']; ?>
        </a>
        <a class="logout" href="php/logout.php">Logout</a>
      </div>
    </div>
  </div>

  <!-- ================================== Weather container ========================================== -->
  <div class="container">
    <div class="weather-input">
      <h3>Enter a City Name</h3>
      <input class="city-input" type="text" placeholder="Enter Your City">
      <button class="search-btn">Search</button>
      <div class="separator"></div>
      <button class="location-btn">Use Current Location</button>
    </div>
    <div class="weather-data">
      <div class="current-weather">
        <div class="details">
          <h2>_______ ( ______ )</h2>
          <h6>Temperature: __°C</h6>
          <h6>Wind: __ M/S</h6>
          <h6>Humidity: __%</h6>
        </div>
      </div>

      <!-- ================================== Weather other days container ========================================== -->
      <div class="days-forecast">
        <h2>5-Day Forecast</h2>
        <ul class="weather-cards">
          <li class="card">
            <h3>( ______ )</h3>
            <h6>Temp: __C</h6>
            <h6>Wind: __ M/S</h6>
            <h6>Humidity: __%</h6>
          </li>
          <li class="card">
            <h3>( ______ )</h3>
            <h6>Temp: __C</h6>
            <h6>Wind: __ M/S</h6>
            <h6>Humidity: __%</h6>
          </li>
          <li class="card">
            <h3>( ______ )</h3>
            <h6>Temp: __C</h6>
            <h6>Wind: __ M/S</h6>
            <h6>Humidity: __%</h6>
          </li>
          <li class="card">
            <h3>( ______ )</h3>
            <h6>Temp: __C</h6>
            <h6>Wind: __ M/S</h6>
            <h6>Humidity: __%</h6>
          </li>
          <li class="card">
            <h3>( ______ )</h3>
            <h6>Temp: __C</h6>
            <h6>Wind: __ M/S</h6>
            <h6>Humidity: __%</h6>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script src="js/script.js" defer></script>
</body>

</html>