<?php 
session_start();

	include("connections.php");
	include("functions.php");

$user_data = check_login($conn);




if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    
    $service_name = $_POST['service'];
    $amount_paid = $_POST['amount'];
   

}


    if (!empty($service_name) && !empty($amount_paid))
     {

        $user_data = $user_data['user_name'];
        $query = "insert into booking (service_name,amount_paid,user_name) values ('$service_name','$amount_paid','$user_data')";

        mysqli_query($conn, $query);

        header("Location: index.php");
        die;
        
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbits Parlour</title>
<style>
    .form{
        text-align: center;
        background-color: rgb(0, 0, 0);
        border-radius:5%;
        color:white;
    }
    .logo {
        font-family: Roadtest;
        color: #0d00ff;
        background-color: rgb(0, 0, 0);
        font-size: 50px;
        text-align: center;
    }
    body{
        background-color: rgb(255, 255, 255);
    }
    #wrapper { 
        width: 70%;
        margin-left: auto;
	    margin-right: auto;
    }
    #wrapper button{
        width:33.33%;
    }
</style>
<body>
    <div class="logo">
        <a href="#" class="logo">The Hobbits Parlour</a>
    </div>
    <div id="wrapper">
    <div class="form">
        <form  method="post">
           <!-- <h1>Book an appointment Form</h1><br>
            <h2>Personal information</h2>-->
            <label type="text">Amount</label>
            <input type="text" name="amount" id="name"><br><br>
            <label type="text">Services</label> <br>
            <h>Book one service at a time</h><br>
            <select name="service" multiple>
                <optgroup label="Facial Treatment">
                    <option value="Basic Facials" >Basic Facials</option>
                    <option value="Deluxe Facials">Deluxe Facials</option>
                    <option value="Moisturizing Facials">Moisturizing Facials</option>
                    <option value="Acne Treatments">Acne Treatments</option>
                </optgroup>
                <optgroup label="Make Up Services">
                    <option value="Events Make Up">Events Make Up</option>
                    <option value="Wedding Specials">Wedding Specials</option>
                   
                </optgroup>
                <optgroup label="Hair Care">
                    <option value="Haircuts & Styling">Haircuts & Styling</option>
                    <option value="Perm & straightening">Perm & straightening</option>
                    <option value="Conditioning">Conditioning</option>
                    <option value="Color & Highlights">Color & Highlights</option>
                </optgroup>
                <optgroup label="Nail Care">
                    <option value="Pedicure">Pedicure</option>
                    <option value="Manicure">Manicure</option>
                    <option value="Acrylic Nails">Acrylic Nails</option>
                    <option value="Parrafin Dip for Hands and Nails">Parrafin Dip for Hands and Nails</option>
                </optgroup>
                <optgroup label="Body Massage">
                    <option value="Swedinish Massage">Swedinish Massage</option>
                    <option value="Chair Massage">Chair Massage</option>
                    <option value="Foot Massage ">Foot Massage </option>
                   
                </optgroup>
            </select>
           <br><br>
           
            <input id="button" type="submit" value="Book an appointment"><br><br>

            

            
           
           
        </form>
        <li><button onclick="document.location='service.php'">Back</button></li>
    </div>
    </div>&nbsp;
</body>
<footer>
    <div class="logo">
        <a href="#" class="logo">The Hobbits</a>
    </div>
</footer>
