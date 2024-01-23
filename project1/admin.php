<?php
//creating a variable begins with a dollar sign followed by the name of the variable
//making a connection to the database
$databasehost = "localhost";//name of the server
$databaseuser = "root";//user name
$databasepassword = "";
$databasename = "parlour";//database name
//create and check connection
//test for errors
if (!$conn = mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename))
{
    echo "<script> alert(Connection successful </script>)";
    die ("Failed to connect!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <title>Admin</title>
 </head>
 <body>
    <div class="" id="success">Registered Customers</div>
<table border="1">
    <tr>
        <th>user_name</th>
        <th>email</th>
        <th>password</th>
        <th>user_id</th>
        <th>operation</th>
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
            .$row['password'] ."</td><td>"
            .$row['user_id'] ."</td><td>"
           
            ."<form action='/project1/delete.php' method='POST'>
                <input type='hidden' name='username' value='".$row['user_name'] ."'>
                <button type='submit' name='delete'>delete</button>
            </form></td><td>"
            ."<form action='./edit.php' method='POST'>
            <input type='hidden' name='email' value='".$row['user_name'] ."'>
            <input type='text' name='email' value='".$row['email'] ."'>
            <input type='text' name='password' value='".$row['password'] ."'>
            <input type='text' name='userid' value='".$row['user_id'] ."'>
           
                <button type='submit' name='edit'>Edit</button>
            </form></td></tr>";
        }
    }else{
        echo "No data";
    }
?>   
</table>
<br>
<br>
<div class="" id="success">Bookings Done</div>
<table border="1">
    <tr>
        <th>booking_id</th>
        <th>service_name</th>
        <th>user_name</th>
        <th>amount_paid</th>
        <th>date</th>
        <th>time</th>
        <th>operation</th>
    </tr>
<?php
    $sql = "select * from booking;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result); //checks if there's data in the db
    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr> 
            <td>" .$row['booking_id'] ."</td>
            <td>" .$row['service_name'] ."</td>
            <td>" .$row['user_name'] ."</td>
            <td>" .$row['amount_paid'] ."</td>
            <td>" .$row['date'] ."</td>
            <td>" .$row['time'] ."</td>
            <td>
            <a href='admin.php?'>Delete</a>
            </td>
            <td>";
        }
    }else{
        echo "No data";
    }
?>   
</table>
</body>
</html>