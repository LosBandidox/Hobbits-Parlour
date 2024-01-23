<?php
include "connections.php";

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_id = $_POST['user_id'];


$query = "UPDATE parlour SET email='$email', password='$password', user_id='$user_id' WHERE user_name='$user_name'";
mysqli_query($conn, $query);

header("Location: view.php"); 
?>
