<!DOCTYPE html>
<html lang="en">
    <style>
    section#about
    {
        width: 100%;
        height: 80vh;
        /*background-image: url("media/dmytro-lopatin-ukcd24k9fnM-unsplash.jpg");*/
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    p
    {
    font-size: 60px;
    font-weight: bold;
    color: black;
    line-height: 50px;
    text-align: left;

    }
   

    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Parlour</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
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
<section id="about">
    <br>
    <p> Feel free to visit us</p>
    <p>We are located at Rongai:Kings Serenity  Opposite ORCC.</p>
    <p>You are welcomed</p>

    

<button onclick="document.location='service.php'">Book Online</button>

</section>
   
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
