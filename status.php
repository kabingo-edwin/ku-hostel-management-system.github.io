<?php
header('Content-Type: application/json');

// Prepare SQL query
$sql = "SELECT SUM(CASE WHEN payment_status = 'paid' THEN 1 ELSE 0 END) AS paid_count FROM book;";
$result = $conn->query($sql);

$hostels = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $hostels[] = $row;
    }
}

// Close connection
$conn->close();

// Return data as JSON
echo json_encode($hostels);
?>
