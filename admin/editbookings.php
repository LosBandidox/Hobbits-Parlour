<?php
include "connections.php";

$booking_id = $_POST['booking_id'];
$service_name = $_POST['service_name'];
$amount_paid = $_POST['amount_paid'];
$user_name = $_POST['user_name'];


$query = "UPDATE booking SET booking_id='$booking_id', service_name='$service_name', amount_paid='$amount_paid', user_name='$user_name' WHERE booking_id='$booking_id'";
mysqli_query($conn, $query);

header("Location: booking.php"); 
?>
