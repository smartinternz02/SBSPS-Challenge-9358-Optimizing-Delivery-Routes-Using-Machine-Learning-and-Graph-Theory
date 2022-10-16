<?php
include 'db.php';
$date = date('Y-m-d H:i:s');
$route_id = $_GET['route_id'];
$sql1 = $conn->prepare("UPDATE routes SET `status` = 2, stopped_at = '$date' WHERE id = $route_id");
$sql1->execute();
?>