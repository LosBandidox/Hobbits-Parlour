<?php
include "connections.php";

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_id = $_POST['user_id'];


$query = "UPDATE parlour SET email='$email', password='$password', user_id='$user_id' WHERE user_name='$user_name'";
mysqli_query($conn, $query);

header("Location: user.php"); 

$service_id = $_POST['service_id'];
$service_name = $_POST['service_name'];
$service_price = $_POST['service_price'];

$query = "UPDATE service SET service_id='$service_id ', service_name='$service_name', service_price='$service_price' WHERE service_id='$service_id'";
mysqli_query($conn, $query);

header("Location: view.php"); 

$booking_id = $_POST['booking_id'];
$service_name = $_POST['service_name'];
$amount_paid = $_POST['amount_paid'];
$user_name = $_POST['user_name'];


$query = "UPDATE booking SET booking_id='$booking_id', service_name='$service_name', amount_paid='$amount_paid', user_name='$user_name' WHERE booking_id='$booking_id'";
mysqli_query($conn, $query);
?>
