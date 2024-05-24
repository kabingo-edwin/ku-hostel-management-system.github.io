<?php
session_start();

if (isset($_POST['reg_submit'])) {

  require 'config.inc.php';

  $studentname = $_POST['student_name'];
  $id = $_POST['id'];
  $reg = $_POST['reg'];
  $gender = $_POST['gender'];
  $mobile = $_POST['mobile'];
  $institution = $_POST['institution'];
  $guardian_name = $_POST['guardian_name'];
  $guardian_mobile = $_POST['guardian_mobile'];
  $residence = $_POST['residence'];
  $disability = $_POST['disability'];
  $description = $_POST['description'];
  

  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO student (student_name, id_no, reg_no, gender, tel_no, institution, gaurdian, phone_no, residency, disability, descript) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sissississs", $studentname, $id, $reg, $gender, $mobile, $institution, $guardian_name, $guardian_mobile, $residence, $disability, $description);

  $stmt->execute();

  echo"<script>alert('registration successfull');window.location='../login.php'</script>";

  $stmt->close();
  $conn->close();

}