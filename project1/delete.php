<?php
include "connections.php";

if (isset($_POST['delete'])) {
    $user_name = $_POST['user_name'];
    $query = "DELETE FROM parlour WHERE user_name='$user_name'";
    mysqli_query($conn, $query);
    header("Location: view.php" );
}

?>