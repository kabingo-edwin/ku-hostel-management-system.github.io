<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Hostel Management System</title>
  <style>
    /* Card styles */
    .search-card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 30%;
      margin: 20px;
      float: left;
    }

    .search-container {
      padding: 2px 16px;
    }

    @media screen and (max-width: 768px) {
      .card {
        width: 90%;
      }
    }

    /* Search panel styles */
    .search-panel {
      margin: 20px;
    }

    .search-panel input[type="text"] {
      width: 300px;
      padding: 8px;
    }

    .search-panel input[type="submit"] {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
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

    @media screen and (max-width: 768px) {
      .card {
        width: 90%;
      }
    }
  </style>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
    <a href="employee_homepage.html">Home</a>
    <a href="#booking">Book a Room</a>
    <div class="dropdown">
        <button class="dropbtn">Bookings
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="search.php">View Booked Rooms</a>
        <a href="index.php">Logout</a>
        </div>
    </div>
    </div>
    
    <div class ="container">
        <div class="search-panel">
            <form method="GET" action="includes/search.inc.php">
                <input type="text" name="search" placeholder="Search for booked rooms...">
                <input type="submit" value="search">
            </form>
        </div>
    </div>
</body>
</html>
