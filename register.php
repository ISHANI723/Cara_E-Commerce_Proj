<?php
	include("connect.php");


	$email = $_POST['email'] ;
	$password =$_POST['password'];
	$cpassword =$_POST['cpassword'];;

	if($password == $cpassword)
	{
		$insert = mysqli_query($connect , "INSERT INTO mini(email , password, cpassword) 
			VALUES ('$email','$password','$cpassword')");

		if($insert)
		{
			echo'
		<script>
		 	alert("Registration Successful!!!");
			window.location = "login.html";
		</script>
		';
		}
		else
		{
			echo'
		<script>
		 	alert("Some error occured!!!");
			window.location = "register.html";
		</script>
		';
		}
	}
	else
	{
		echo'
		<script>
		 	alert("Password and Confirm Password does not match!");
			window.location = "register.html";
		</script>
		';
		
	}
?>