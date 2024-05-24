<?php
session_start();

if (isset($_POST['login-submit'])) {

  require 'config.inc.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  
  $sql = "SELECT pass FROM student_reg WHERE username = '$username'";
  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    // Fetching hashed password from the result
      $row = $result->fetch_assoc();
      $hashed_password = $row['pass'];
    
        // Comparing hashed password with user input
        if (password_verify($password, $hashed_password)) {
            // Passwords match, redirect user to registration page
           echo"<script>alert('Welcome');window.location='../student_registration.php'</script>";
            exit();
        } else {
        // Passwords don't match, handle accordingly (e.g., display error message)
        echo"<script>alert('Incorrect Password/Username!');window.location='../login.php'</script>";
        }
  }
} else {
    // User not found, handle accordingly (e.g., display error message)
    echo"<script>alert('User does not exist, Sign up');window.location='../login.php'</script>";
    exit();
    // Close connection
    $conn->close();
  }