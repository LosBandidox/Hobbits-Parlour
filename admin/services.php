<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Parlour</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!--navigation-->
    <nav>
            <!--logo-->
            
            <div class="logo">
            <a onmouseover="style.color='red'" onmouseout="style.color='black'">
            <b>The <br> Hobbits <br>Parlour</b></a>
            </div>
            
   <!--menu-->
    
        <li><button onclick="document.location='users.php'">Registered Customers</button></li>
        <li><button onclick="document.location='services.php'">Services we offer</button></li> 
        <li><button onclick="document.location='booking.php'">Bookings Done</button></li> 
       
           </nav>
</head>
<body>
<?php
 
 include "connections.php";
 ?> 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css"/>
     <title>Document</title>
 </head>
 <body>
<br>
<br>
<table border="1">
    <tr>
        <th>Service Id</th>
        <th>Service Name</th>
        <th>Service Price</th>
        <th>DELETE</th>
        <th>UPDATE</th>
</tr>
         <?php
    $query = "select * from service;";
    $result = mysqli_query($conn,$query);
    $resultCheck = mysqli_num_rows($result); //checks if there's data in the db
    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" 
            .$row['service_id'] ."</td><td>" 
            .$row['service_name'] ."</td><td>" 
            .$row['service_price'] ."</td><td>"
            
            ."<form action='./deleteservices.php' method='POST'>
                <input type='hidden' name='service_id' value='".$row['service_id']."'>
                <button type='submit' name='delete'>delete</button>
            </form></td><td>"
           
            ."<form action='./editservices.php' method='POST'>
            <input type='hidden' name='service_id' value='" .$row['service_id'] ."'>
            <input type='text' name='service_name' value='" .$row['service_name'] ."'>
            <input type='text' name='service_price' value='".$row['service_price'] ."'>
           
                <button type='submit' name='edit'>Edit</button>
            </form></td></tr>";
        }
    }else{
        echo "No data";
    }
?>   
</table>
<br>

 </body>
 </html>
    
</body>
 <!--footer-->
<footer>
    <!--logo-->
    <div class="logo">
         <a onmouseover="style.color='red'" onmouseout="style.color='black'">
         <b>The <br> Hobbits <br>Parlour</b></a>
        </div>
    <!--socialbar-->
     <div class="social-bar">
        <a href="https://m.me/darrells.jaccuzzi"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/jaccuzzi8/"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=254791938182&text=%F0%9F%98%87%F0%9F%A5%B0%F0%9F%91%8D%F0%9F%98%98"><i
                class="fab fa-whatsapp"></i></a>
        <a href="https://twitter.com/Darrell00564947?s=09"><i class="fab fa-twitter"></i></a>
    </div>
    <div>Copyright &copy; 2023 The Beauty Parlour<br></div>
</footer>
</html>
