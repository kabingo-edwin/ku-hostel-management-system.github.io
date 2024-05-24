<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Password Reset - Hostel Management System</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles.css">

  <style>
     .error {
            color: red;
            display: none;
        }
        .success {
            color: green;
            display: none;
        }
  </style>
</head>
<body>
    <h1>KENYATTA UNIVERSITY HOSTELS</h1>
    <h1>Mombasa Campus</h1>
  <div class="container">
    <h1>Password Reset</h1>
    <form id="password_reset" action="includes/password_reset.inc.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br><br>
      <label for="ConfirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
      <br><br>
      <span id="message" class="error">Passwords do not match.</span>
      <br><br>
      <button type="submit" name="password_reset">reset</button>
    </form>
  </div>

  <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('password_reset');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');
            const message = document.getElementById('message');

            function validatePassword() {
                if (password.value !== confirmPassword.value) {
                    message.style.display = 'inline';
                    return false;
                } else {
                    message.style.display = 'none';
                    return true;
                }
            }

            form.addEventListener('submit', function(event) {
                if (!validatePassword()) {
                    event.preventDefault(); // Prevent form submission if passwords do not match
                }
            });

            password.addEventListener('input', validatePassword);
            confirmPassword.addEventListener('input', validatePassword);
        });
    </script>
</body>
</html>
