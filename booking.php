<!-- booking.php -->

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book a Room - Hostel Management System</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <link rel="stylesheet" href="styles.css">

  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        label, select {
            font-size: 16px;
        }
    
    /* Navbar styles */
    .navbar {
      overflow: hidden;
      background-color: #333;
    }
    
    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }
    
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .dropdown {
      float: left;
      overflow: hidden;
    }
    
    .dropdown .dropbtn {
      font-size: 16px;  
      border: none;
      outline: none;
      color: white;
      padding: 14px 20px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    
    .navbar a, .dropdown .dropbtn {
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown-content a:hover {
      background-color: #ddd;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }

  </style>

</head>
<body>
<div class="navbar">
  <a href="home.html">Home</a>
  <a href="#book">Book a Room</a>
  <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profile.php">View Profile</a>
      <a href="index.php">Logout</a>
    </div>
  </div>
</div>

  <div class="container">
    <h1>Book a Room</h1>
    <form action="includes/booking.inc.php" method="post">
      <label for="fname">Name:</label>
      <input type="text" id="fullname" name="fullname" required>
      <label for="checkin-date">Check-in Date:</label>
      <input type="date" id="checkin-date" name="checkin_date" required>
      <label for="checkout-date">Check-out Date:</label>
      <input type="date" id="checkout-date" name="checkout_date" required>
      <label for="room-type">Room Type:</label>
      <select id="room-type" name="room_type">
        <option value="Double">Double</option>
        <option value="Quadruple">Quadruple</option>
        <option value="Octuple">Octuple</option>
      </select>
      <label for="options">Room Number:</label>
        <select id="room_number" name="room_number">
              <option value="Male01">Male01</option>
              <option value="Male02">Male02</option>
              <option value="Male03">Male03</option>
              <option value="Male04">Male04</option>
              <option value="Male05">Male05</option>
              <option value="Female01">Female01</option>
              <option value="Female02">Female02</option>
              <option value="Female03">Female03</option>
              <option value="Female04">Female04</option>
              <option value="Female05">Female05</option>
        </select>
          <br><br>
      <button type="submit" name="book_room" onclick="makeRequest()">Book Now</button>
    </form>
  </div>

</body>
</html>
