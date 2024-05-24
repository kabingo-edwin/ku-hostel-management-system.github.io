<?php
require 'config.inc.php';


if (isset($_POST['employee-signup'])) {

  $employee_name = $_POST['name'];
  $username = $_POST['employee-username'];
  $password = $_POST['employee-password'];
  
  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

  $username = $conn->real_escape_string($_POST['employee-username']);

  // Prepare SQL query
  $sql = "SELECT * FROM employee_reg WHERE user_name = '$username'";

  // Execute query
  $result = $conn->query($sql);

  // Check if any rows were returned
  if ($result->num_rows > 0) {
      // Username exists
      echo"<script>alert('Username exists');window.location='../signup_employee.php'</script>";
  } else {
  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO employee_reg (emp_name, user_name, passwrd) VALUES (?, ?, ? )");
  $stmt->bind_param("sss", $employee_name, $username, $hashedPwd);

  $stmt->execute();

  echo"<script>alert('registration successfull');window.location='../employee_registration.php'</script>";

  $stmt->close();
  $conn->close();
  }
}
?>
