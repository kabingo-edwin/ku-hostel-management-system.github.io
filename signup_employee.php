<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Signup - Hostel Management System</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>KENYATTA UNIVERSITY HOSTELS</h1>
    <h1>Mombasa Campus</h1>
  <div class="container">
    <h1>Employee Signup</h1>
    <form id="employee-signup-form" action="includes/employee_signup.inc.php" method="post">
      <label for="employee-name">Name:</label>
      <input type="text" id="employee-name" name="name" required>
      <label for="employee-username">Username:</label>
      <input type="text" id="employee-username" name="employee-username" required>
      <label for="employee-password">Password:</label>
      <input type="password" id="employee-password" name="employee-password" required>
      <button type="submit" name="employee-signup">Sign Up</button>
    </form>
  </div>

</body>
</html>
