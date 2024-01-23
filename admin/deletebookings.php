<?php
include "connections.php";

if (isset($_POST['delete'])) {
    $booking_id = $_POST['booking_id'];
    $query = "DELETE FROM booking WHERE booking_id='$booking_id'";
    mysqli_query($conn, $query);
    header("Location: booking.php" );
}

?>