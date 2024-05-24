<?php
	if(!isset($_SESSION)){
		session_start();
	}
  
 $conn = mysqli_connect("localhost", "root" ,"", "hostel_mgmt_system", 3307);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>