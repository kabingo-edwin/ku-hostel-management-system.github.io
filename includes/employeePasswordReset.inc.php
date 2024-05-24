<?php
session_start();

if (isset($_POST['password_reset'])) {

  require 'config.inc.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $username = $conn->real_escape_string($_POST['username']);

  $stmt = $conn->prepare("SELECT passwrd FROM employee_reg WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    // Username exists, update the password
    $stmt->close();

    // Hash password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $update_stmt = $conn->prepare("UPDATE employee_reg SET passwrd = ? WHERE username = ?");
    $update_stmt->bind_param("ss", $hashed_password, $username);
    
    if ($update_stmt->execute()) {
        echo"<script>alert('Password successfully changed.');window.location='../employee_login.php'</script>";
    } else {
        echo"<script>alert('Error updating password:' . $conn->error);window.location='../employee_passwordReset.php'</script>";
    }
        $update_stmt->close();
} else {
    // Username does not exist
    echo"<script>alert('Username does not exist.');window.location='../signup_employee.php'</script>";
    }
    $stmt->close();
}

?>