<?php
session_start();
require 'config.inc.php';
require 'registration.inc.php';

// Fetch profile data from database
$sql = "SELECT * FROM student where student_name = '$studentname'";
$result = $conn->query($sql);

// Check if there are any profiles
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="profile-card">';
        echo "<h2>Profile</h2>";
        echo "<p>Name: " . $row['student_name'] . "</p>";
        echo "<p>ID No.: " . $row['id_no'] . "</p>";
        echo "<p>Registration: " . $row['reg_no'] . "</p>";
        echo "<p>Gender: " . $row['gender'] . "</p>";
        echo "<p>Phone Number: " . $row['tel_no'] . "</p>";
        echo "<p>Institution: " . $row['institution'] . "</p>";
        echo "<p>Gaurdian's Name: " . $row['gaurdian'] . "</p>";
        echo "<p>Guardian's Phone No.: " . $row['phone_no'] . "</p>";
        echo "<p>Place of Residency: " . $row['residency'] . "</p>";
        echo "<p>Disability: " . $row['reg_no'] . "</p>";
        
    }
} else {
    echo "No profiles found";
}

// Close connection
$conn->close();
?>