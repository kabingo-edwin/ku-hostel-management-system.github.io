<!-- signup_student.php -->

<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Signup - Hostel Management System</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="styles.css">

  <style>
    .error {
        color: red;
    }
</style>
</head>
<body>
  <h1>Student Signup</h1>
  <div class="container">
    <h1>Student Signup</h1>
    <form id="student-signup-form" action="includes/signup.inc.php" method="POST">
        <label for="student-fullname">Full Name:</label>
        <input type="text" id="student-fullname" name="student-fullname" required>
        <label for="student-email">Email:</label>
        <input type="email" id="student-email" name="student-email" required>
        <span id="error" class="error"></span>
        <br>
        <label for="student-username">Username:</label>
        <input type="text" id="student-username" name="student-username" required>
        <label for="student-password">Password:</label>
        <input type="password" id="student-password" name="student-password" required>
      <button type="submit" name="signup-submit" id="signsubmit" disabled>sign up</button>
    </form>
  </div>
  <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the input element
            var emailInput = document.getElementById("student-email");
            // Get the submit button element
            var submitButton = document.getElementById("signsubmit");
            // Get the error message element
            var errorElement = document.getElementById("error");

            // Add event listener for input
            emailInput.addEventListener("input", function() {
                // Get the input value
                var inputValue = emailInput.value;

                // Regular expression to match email format
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                // Check if the input matches the email pattern
                if (emailPattern.test(inputValue)) {
                    // If input is a valid email, clear error message and enable submit button
                    errorElement.textContent = "";
                    signsubmit.removeAttribute("disabled");
                } else {
                    // If input is not a valid email, show error message and disable submit button
                    errorElement.textContent = "Please enter a valid email address.";
                    signsubmit.setAttribute("disabled", "disabled");
                }
            });
        });
    </script>
</body>
</html>

