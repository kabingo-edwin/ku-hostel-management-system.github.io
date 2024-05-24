<?php
session_start();
require 'config.inc.php';

// Fetch booked rooms data based on search query
if(isset($_GET['search'])) {
  $search = $_GET['search'];

  $sql = "SELECT * FROM book WHERE idbook LIKE ?";
  $stmt = $conn->prepare($sql);
  $searchTerm = "%" . $conn->real_escape_string($search) . "%";
  $stmt->bind_param("s", $searchTerm);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<div class="search-card">';
      echo '<div class="container">';
      echo '<p><b>Occupant Name:</b> ' . $row["fullname"] . '</p>';
      echo '<p><b>Check-In Date:</b> ' . $row["checkin_date"] . '</p>';
      echo '<p><b>Check-Out Date:</b> ' . $row["checkout_date"] . '</p>';
      echo '<p><b>Room Type:</b> ' . $row["room_type"] . '</p>';
      echo '<p><b>Room Number:</b> ' . $row["room_no"] . '</p>';
      echo '<p><b>Room Status:</b> ' . $row["room_status"] . '</p>';
      echo '<p><b>Payment Status:</b> ' . $row["payment_status"] . '</p>';
      echo '</div>';
      echo '</div>';
      echo'<div class="search-panel">';
      echo '<form method="POST" action="update.php">';
      echo '<input type="submit" value="Confirm Payment">';
      echo '</form>';
      echo'</div>';
    }
  } else {
    echo"<script>alert('No booked rooms found.');window.location='../search.php'</script>";
  }
    
  $_SESSION['search'] = $search;
  // Close connection
  $conn->close();
}
?>