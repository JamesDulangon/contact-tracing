<?php 
session_start(); 
if (isset($_POST['username']) && isset($_POST['password'])) 
{
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$a_username = validate($_POST['username']);
	$a_password = validate($_POST['password']);

	if (empty($a_username)) {
		header("Location: admin.php?error=Enter username.");
	    exit();
	}else if (empty($a_password)) {
		header("Location: admin.php?error=Enter password.");
	    exit();
	}else{

		if ($a_username == 'admin') {
			if($a_password == 'pass123')
			{
				$_SESSION['admin'] = 'admin';
				header("Location: admin_home.php");
				exit();
			}else{
				header("Location: admin.php?error=Incorrect username or password.");
		        exit();
			}
		}else{
				header("Location: admin.php?error=Incorrect username or password.");
	        exit();
		}
	}
}else{
	header("Location: admin.php");
	exit();
}