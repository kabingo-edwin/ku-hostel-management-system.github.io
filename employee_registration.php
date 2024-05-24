<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Registration - Hostel Management System</title>

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
    <h1>KENYATTA UNIVERSITY HOSTELS</h1>
    <h1>Mombasa Campus</h1>
  <div class="container">
    <h1>Employee Registration</h1>
    <form id="employee-registration-form" action ="includes/employee_registration.inc.php" method="POST">
      <label for="employee-fullname">Full Name:</label>
      <input type="text" id="employee-fullname" name="employee-fullname" required>
      <label for="employee-email">Corporate Email:</label>
      <input type="email" id="emailInput" name="emailInput" required>
      <span id="error" class="error"></span>
      <br>
      <label for="employee-pf-id-no">Employee PF/ID No.:</label>
      <input type="text" id="numberInput" name="employee-pf-id-no" min="0"  required>
      <span id="error" class="error"></span>
      <br>
      <label for="employee-department">Department:</label>
      <input type="text" id="employee-department" name="department" required>
      <label for="employee-designation">Designation:</label>
      <input type="text" id="employee-designation" name="employee-designation" required>
      <button type="submit" id="emp-submit" disabled>Submit</button>
    </form>
  </div>

  <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the input element
            var numberInput = document.getElementById("numberInput");
            // Get the submit button element
            var submitButton = document.getElementById("emp-submit");
            // Get the error message element
            var errorElement = document.getElementById("error");

            // Add event listener for input
            numberInput.addEventListener("input", function() {
                // Get the input value
                var inputValue = numberInput.value;

                // Regular expression to match only numeric characters
                var numericPattern = /^[0-9]*$/;

                if (numericPattern.test(inputValue)) {
                    // If input is a number, clear error message and enable submit button
                    errorElement.textContent = "";
                    emp-submit.removeAttribute("disabled");
                } else {
                    // If input is not a number, show error message and disable submit button
                    errorElement.textContent = "Please enter only numbers.";
                    emp-submit.setAttribute("disabled", "disabled");
                }
            });
        });
    </script>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the input element
            var emailInput = document.getElementById("emailInput");
            // Get the submit button element
            var submitButton = document.getElementById("emp-submit");
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
                    emp-submit.removeAttribute("disabled");
                } else {
                    // If input is not a valid email, show error message and disable submit button
                    errorElement.textContent = "Please enter a valid email address.";
                    emp-submit.setAttribute("disabled", "disabled");
                }
            });
        });
    </script>
</body>
</html>
