<!DOCTYPE html>
<html lang="en">
  
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
    <section id="contact">
    <button onclick="document.location='service.php'">Book Online</button>
    <h2>Contact us through the following numbers for the following reasons;<br></h2>
        <table>
            <tr>
                <th>Reasons</th>
                <th><i class="material-icons" style="font-size:30px;color:rgb(255, 255, 255)">&#xe0cf;</i> &nbsp; Contact  (toll free)</th>
            </tr>
            <tr>
                <td>Inconviniences</td> <td>+01002004433</td>
            </tr>
            <tr>
                <td>Delayed services</td> <td>+01447700001</td>
            </tr>   
            <tr>
                <td>Booking</td><td>+01000001000</td>
            </tr>
            <tr>     
                <td>Management</td><td>+01222333000</td>
            </tr>
          
        </table>
                <div class="aboutus">
                    <p>Get in touch with us.</p><br>
                </div>
            <form>
                <div class="comment">
                     <p1><i class='fas fa-comments' style='font-size:48px;color:rgb(0, 0, 0)'></i></p1> &nbsp;Comment
                </div>
                
                <textarea name="" id="" cols="100%"
                    rows="10">Write your comments about our services offered and areas that need improvements. Thank you</textarea><br>
                <button style='font-size:24px'><input type="submit" value="Submit Please"></button>
            </form>
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
