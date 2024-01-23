<?php
include "connections.php";



$service_id = $_POST['service_id'];
$service_name = $_POST['service_name'];
$service_price = $_POST['service_price'];

$query = "UPDATE service SET service_id='$service_id ', service_name='$service_name', service_price='$service_price' WHERE service_id='$service_id'";
mysqli_query($conn, $query);

header("Location: services.php"); 


