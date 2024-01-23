<?php
include "connections.php";

if (isset($_POST['delete'])) {
    $user_name = $_POST['user_name'];
    $query = "DELETE FROM parlour WHERE user_name='$user_name'";
    mysqli_query($conn, $query);
    header("Location: users.php" );
}
if (isset($_POST['delete'])) {
    $service_id = $_POST['service_id'];
    $query = "DELETE FROM service WHERE service_id='$service_id'";
    mysqli_query($conn, $query);
    header("Location: view.php" );
}
if (isset($_POST['delete'])) {
    $booking_id = $_POST['booking_id'];
    $query = "DELETE FROM booking WHERE booking_id='$booking_id'";
    mysqli_query($conn, $query);
    header("Location: view.php" );
}

?>