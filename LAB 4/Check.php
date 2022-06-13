<?php 
	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['Email'];
		$eender = $REQUEST['gender'];
		
		if($username == null || $password == null)
		{
			echo "Invalid User/Pass";
		}
		else
		{
			$_SESSION['username'] == $username;
			header(location:'home.php');
		}
	}



?>