<?php
require 'connect.php';

$sql = "SELECT siram FROM data_sensor";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo json_encode($row);
$conn->close();
?>