<?php
include "connections.php";


if (isset($_POST['delete'])) {
    $service_id = $_POST['service_id'];
    $query = "DELETE FROM service WHERE service_id='$service_id'";
    mysqli_query($conn, $query);
    header("Location: services.php" );
}

?>