<?php
require 'config.inc.php';


if (isset($_POST['signup-submit'])) {

  $fullname = $_POST['student-fullname'];
  $email = $_POST['student-email'];
  $passwrd = $_POST['student-password'];
  $username = $_POST['student-username'];
  
  $hashedPwd = password_hash($passwrd, PASSWORD_DEFAULT);

  $username = $conn->real_escape_string($_POST['student-username']);

  // Prepare SQL query
  $sql = "SELECT * FROM student_reg WHERE username = '$username'";

  // Execute query
  $result = $conn->query($sql);

  // Check if any rows were returned
  if ($result->num_rows > 0) {
      // Username exists
      echo"<script>alert('Username exists');window.location='../signup_student.php'</script>";
  } else {
  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO student_reg (fullname, email, pass, username) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $fullname, $email, $hashedPwd, $username);

  $stmt->execute();

  echo"<script>alert('registration successfull');window.location='../student_registration.php'</script>";

  $stmt->close();
  $conn->close();
}
}
?>
