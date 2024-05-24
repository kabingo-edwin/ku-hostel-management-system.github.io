<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration - Hostel Management System</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>KENYATTA UNIVERSITY HOSTELS</h1>
    <h1>Mombasa Campus</h1>
  <div class="container">
    <h1>Student Registration</h1>
    <form id="student-registration-form" action="includes/registration.inc.php" method="POST">
      <label for="name">Student Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="id">National Id No.:</label>
      <input type="text" id="id" name="id" required>
      <label for="reg">Student Registration No.:</label>
      <input type="text" id="reg" name="reg" required>
      <label for="gender">Gender:</label>
      <input type="text" id="gender" name="gender" required>
      <label for="mobile">Telephone No.:</label>
      <input type="text" id="mobile" name="mobile" required>
      <label for="institution">Institution Name:</label>
      <input type="text" id="institution" name="institution" required>
      <label for="name">Guardian/Parent Name:</label>
      <input type="text" id="guardian_name" name="guardian_name" required>
      <label for="mobile">Guardian/Parent Phone No.:</label>
      <input type="text" id="mobile" name="guardian_mobile" required>
      <label for="residence">Residence:</label>
      <input type="text" id="residence" name="residence" required>
      <label for="disability">Any Disability:</label>
      <select id="disability" name="disability" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      <label for="description">If Yes, Nature of Disability:</label>
      <input type="text" id="description" name="description" >
      <button type="submit" name="reg_submit">Submit</button>
    </form>
  </div>

</body>
</html>
