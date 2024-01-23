<?php
 
 include "connections.php";
 ?> 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
 </head>
 <body>
<table border="1">
    <tr>
        <th>username</th>
        <th>email</th>
        <th>userid</th>
        <th>DELETE</th>
        <th>UPDATE</th>
</tr>
         <?php
    $query = "select * from parlour;";
    $result = mysqli_query($conn,$query);
    $resultCheck = mysqli_num_rows($result); //checks if there's data in the db
    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" 
            .$row['user_name'] ."</td><td>" 
            .$row['email'] ."</td><td>" 
            .$row['user_id'] ."</td><td>"
            
            ."<form action='./delete.php' method='POST'>
                <input type='hidden' name='user_name' value='".$row['user_name']."'>
                <button type='submit' name='delete'>delete</button>
            </form></td><td>"
           
            ."<form action='./edit.php' method='POST'>
            <input type='hidden' name='user_name' value='" .$row['user_name'] ."'>
            <input type='text' name='email' value='" .$row['email'] ."'>
            <input type='text' name='user_id' value='".$row['user_id'] ."'>
           
                <button type='submit' name='edit'>Edit</button>
            </form></td></tr>";
        }
    }else{
        echo "No data";
    }
?>   
</table>
<table border="1">
    <tr>
        <th>Booking Id</th>
        <th>Service Name</th>
        <th>Username</th>
        <th>Amount Paid</th>
        <th>Date</th>
        <th>Time</th>
        <th>DELETE</th>
        <th>UPDATE</th>
</tr>
         <?php
    $query = "select * from booking;";
    $result = mysqli_query($conn,$query);
    $resultCheck = mysqli_num_rows($result); //checks if there's data in the db
    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" 
            .$row['booking_id'] ."</td><td>" 
            .$row['service_name'] ."</td><td>" 
            .$row['user_name'] ."</td><td>"
            .$row['amount_paid'] ."</td><td>"
            .$row['date'] ."</td><td>"
            .$row['time'] ."</td><td>"
            
            ."<form action='./delete.php' method='POST'>
                <input type='hidden' name='booking_id' value='".$row['booking_id']."'>
                <button type='submit' name='delete'>delete</button>
            </form></td><td>"
           
            ."<form action='./edit.php' method='POST'>
            <input type='hidden' name='booking_id' value='" .$row['booking_id'] ."'>
            <input type='text' name='service_name' value='" .$row['service_name'] ."'>
            <input type='text' name='user_name' value='".$row['user_name'] ."'>
            <input type='text' name='amount_paid' value='".$row['amount_paid'] ."'>
            <input type='text' name='date' value='".$row['date'] ."'>
            <input type='text' name='time' value='".$row['time'] ."'>
           
                <button type='submit' name='edit'>Edit</button>
            </form></td></tr>";
        }
    }else{
        echo "No data";
    }
?>   
</table>



<script src="./main.js"></script>
 </body>
 </html>