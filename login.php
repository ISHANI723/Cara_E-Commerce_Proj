<?php

	session_start();
	include("connect.php");

	$email = $_POST['email'];
	$password = $_POST['password'];

	$check = mysqli_query($connect , "SELECT * FROM mini WHERE email='$email' AND password='$password'");

	if(mysqli_num_rows($check) > 0 )
	{
        $userdata = mysqli_fetch_array($check);

        $_SESSION['userdata'] = $userdata;
		echo'
		<script>
			window.location = "index.php";
		</script>
		';
	}
	else
	{
		echo'
		<script>
		 	alert("Invalid Credentials or user not found!");
			window.location = "login.html";
		</script>
		';
	}
?>

