<?php 
session_start();
    include("connections.php");
	include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	    //something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
            //read from database
			$password = md5($password);
			$query = "select * from parlour where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
                    $user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
                        $_SESSION['user_id'] = $user_data['user_id'];
						//header("Location: index.php");
						//die;
					}
				}
			}
			header("Location: index.php");
			//echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
		
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
    
    <div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<label type="text" style="color: white;">Username</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label type="text" style="color: white">Password</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
		<li><button onclick="document.location='index.php'">Back</button></li>
	</div>
</body>
</html>