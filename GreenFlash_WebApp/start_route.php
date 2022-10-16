<?php
include 'db.php';
$date = date('Y-m-d H:i:s');
$sql1 = $conn->prepare("INSERT INTO routes (created_at, `status`) VALUES ('$date' , 1)");
$sql1->execute();

$route = $conn->lastInsertId();
print_r($route);
?>