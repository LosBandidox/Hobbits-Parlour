<?php 
//session_start() creates a session or resumes
// the current one based on a session identifier passed via a GET or POST request, 
//or passed via a cookie
session_start();

	include("connections.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		//retrieve record
		//create variable exactly the same like the database
		//create the post method exactly the same like the html form
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$confirm_password = $_POST['password'];
		$email 	= $_POST['email'];

		//password should be the same as the confirm password
		if ($_POST['password'] != $_POST['confirm_password']){

			echo"<script> alert('Please enter same password')</script>";

         //username,password,email should not be empty
		 //username should not be numeric
		}elseif(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email))
		{

			//save to database
			$password = md5($password);//generate encrypted password
			$user_id = random_num(20);//generating the user id
			$query = "insert into parlour (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";

			mysqli_query($conn,$query);

			header("Location: login.php");
			die;
		if ($query) {

			echo "<script>alert('You have successfully registered.');</script>";
		}
		}else
		{
			echo "<script> alert('Please enter some valid information!')</script>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: black;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
    <ul>
                <li><button onclick="document.location='index.php'">Home</button></li>
                <li><button onclick="document.location='service.php'">Services</button></li>
                <li><button onclick="document.location='gallery.php'">Gallery</button></li>
                <li><button onclick="document.location='team.php'">Team</button></li>
                <li><button onclick="document.location='about.php'" class="active">About</button></li>
                <li><button onclick="document.location='contact.php'">Contact us</button></li> 
                <li><button onclick="document.location='signup.php'">Sign Up</button></li>
                <li><button onclick="document.location='login.php'">Log In</button></li>      
            </ul>
	</style>

<div class="logo">
        <a href="#" class="logo">The Hobbits Parlour</a>
    </div>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<fieldset>

			<label type="text" style="color: white">Username</label>
			<input id="text" type="text" name="user_name" ><br><br>
			<label type="text" style="color: white;">Email</label>
			<input id="text" type="email" placeholder="someone@email.com" name="email"><br><br>
			<label type="text" style="color: white;">Password</label>
			<input id="text" type="password" name="password"><br><br>
			<label type="text" style="color: white;">Confirm password</label>
			<input id="text" type="password" name="confirm_password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br></fieldset>
		</form>
	</div>
</body>
</html>