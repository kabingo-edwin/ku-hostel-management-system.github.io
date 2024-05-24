<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login - Hostel Management System</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>KENYATTA UNIVERSITY HOSTELS</h1>
  <h1>Mombasa Campus</h1>
  <div class="container">
      <h1>Login</h1>
      <form id="login-form" action="includes/employee_login.inc.php" method="POST">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <button type="submit" name="employee-login-submit">Login</button>
      </form>
      <br>
      <a href="employee_passwordReset.php">Forgot Password?</a></p>
      <br>
      <p>Don't have an account? <a href="signup_employee.php">Click Here For Employee Signup</a></p>
      <p>Don't have an account? <a href="signup_student.php">Click Here For Student Signup</a></p>
  </div>
</body>
</html>
