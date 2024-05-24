<?php
session_start();
require 'config.inc.php';
require 'search.inc.php';

$payment_status = 'paid';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE book SET payment_status = ? WHERE idbook = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $payment_status, $_SESSION['search']);

    if ($stmt->execute()) {
        echo"<script>alert('Payment updated successfully');window.location='../search.php'</script>";
    } else {
        echo"<script>alert('Error updating record:');window.location='../search.php'</script>"; 
    }

    // Close connection
    $conn->close();
}
?>