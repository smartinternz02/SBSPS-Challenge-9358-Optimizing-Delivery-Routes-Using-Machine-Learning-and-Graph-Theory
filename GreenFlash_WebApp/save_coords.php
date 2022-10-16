<?php
include 'db.php';
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$route = $_POST['route_id'];
$date = date('Y-m-d H:i:s');
$sql1 = $conn->prepare("INSERT INTO coordinates (lat, lng, route_id, created_at) VALUES ('$lat', '$lng' , $route, '$date')");
$sql1->execute();
?>