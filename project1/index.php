<?php
session_start();
    include("connections.php");
    include("functions.php");

$user_data = check_login($conn);
?>

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
    
        <li><button onclick="document.location='index.php'">Home</button></li>
        <li><button onclick="document.location='service.php'">Services</button></li> 
        <li><button onclick="document.location='gallery.php'">Gallery</button></li> 
        <li><button onclick="document.location='contact.php'">Contact Us</button></li>
        <li><button onclick="document.location='about.php'">About Us</button></li>
        <li><button onclick="document.location='login.php'">Accounts</button></li> 
        <li><button onclick="document.location='logout.php'">Log Out </button></li>
          

    
    </nav>
</head>
<body>


  
    <section id="homesection">     <br>

        <p style="color: red; font-size:60px;">
        Hello, <?php echo $user_data['user_name'];?>,</p>
        <h2 onclick="changeText(this)">Click on this text!</h2>

<script>
    function changeText(id) 
    {
    id.innerHTML = "Feel comfortable using our website";
    }
</script>

        <p id="p1"><b>Welcome to The HOBBITS  Parlor</b></p> 
        <button onclick="document.location='service.php'">Book Online</button>
        

        <p id="p2">We offer quality services</p>
       
        <p>Home of Beauty</p>
        <p>We do both beauty services and also photography.<br>
        <h1><strong>Visit us. All are Welcomed.</strong></h1></p>
    </section>
    <script type="text/javascript" src="main.js"></script>
</body>
 <!--footer-->
<footer>
    <!--logo-->
    <div class="logo">
         <a onmouseover="style.color='red'" onmouseout="style.color='black'">
         <b>The <br> Hobbits <br>Parlour</b></a>
        </div>
    <div>Copyright &copy; 2023 The Beauty Parlour<br></div>
</footer>
</html>
