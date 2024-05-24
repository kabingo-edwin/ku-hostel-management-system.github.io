<?php
session_start(); 

require 'config.inc.php';
require 'registration.inc.php';

if (isset($_POST['book_room'])) {

  $fullname = $_POST['fullname'];
  $check_in = $_POST['checkin_date'];
  $check_out = $_POST['checkout_date'];
  $room_type = $_POST['room_type'];
  $room_num = $_POST['room_number'];

  $room_status = 'booked';

  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO book (fullname, checkin_date, checkout_date, room_type, room_no, room_status) VALUES (?, ?, ?, ?, ?, ? )");
  $stmt->bind_param("ssssss", $fullname, $check_in, $check_out, $room_type, $room_num, $room_status);

  $stmt->execute();

  // Escape the name to prevent SQL injection
  $name_escaped = $conn->real_escape_string($fullname);

  $sql = "SELECT idbook FROM book WHERE fullname = '$name_escaped'";
  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $bookId = $row['idbook'];
    echo"<script>alert('Submit' + ' ' + $bookId + ' ' + 'when making your payment. Room booked successfully.');window.location='../booking.php'</script>";

  }
  
  
  $stmt->close();
  $conn->close();

}

?>
