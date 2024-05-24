<?php
session_start();

if (isset($_POST['reg_submit'])) {

  require 'config.inc.php';

  $fname = $_POST['employee-fullname'];
  $email = $_POST['emailInput'];
  $pf_no = $_POST['employee-pf-id-no'];
  $gender = $_POST['department'];
  $designation = $_POST['employee-designation'];
  

  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO student ( emp_name, email, pf_no, department, designation) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("ssiss", $fname, $email, $pf_no, $gender, $designation);

  $stmt->execute();

  echo"<script>alert('registration successfull');window.location='../home.html'</script>";

  $stmt->close();
  $conn->close();

}