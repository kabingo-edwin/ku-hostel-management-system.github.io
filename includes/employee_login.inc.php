<?php
session_start();

if (isset($_POST['employee-login-submit'])) {

  require 'config.inc.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  
  $sql = "SELECT passwrd FROM employee_reg WHERE user_name = '$username'";
  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    // Fetching hashed password from the result
      $row = $result->fetch_assoc();
      $hashed_password = $row['passwrd'];
    
        // Comparing hashed password with user input
        if (password_verify($password, $hashed_password)) {
            // Passwords match, redirect user to registration page
           echo"<script>alert('Welcome');window.location='../employee_registration.php'</script>";
            exit();
        } else {
        // Passwords don't match, handle accordingly (e.g., display error message)
        echo"<script>alert('Incorrect Password/Username!');window.location='../employee_login.php'</script>";
        }
  }
} else {
    // User not found, handle accordingly (e.g., display error message)
    echo"<script>alert('User does not exist, Sign up');window.location='../employee_login.php'</script>";
    exit();
    // Close connection
    $conn->close();
  }