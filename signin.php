<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['idno'])) 
{
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$idnumber = validate($_POST['idno']);

	if (empty($idnumber)) {
		header("Location: index.php?error=Enter ID number");
	    exit();
	}else{
		
		$sql = "SELECT * FROM users WHERE idnumber='$idnumber'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['idnumber'] === $idnumber ) {

          
            	$session_status = "SELECT status FROM users WHERE idnumber='$idnumber'";
            	$result123 = mysqli_query($conn, $session_status);

            	$_SESSION['status'] = $row['status'];

            	$off_status = "off";
            	if($_SESSION['status'] === $off_status)
            	{
            		$today_date = date("Y-m-d");
					date_default_timezone_set('Asia/Manila');
					$today_time = date("H:i:s");
					$sql_update_date = "UPDATE users SET date_signin='$today_date' WHERE idnumber='$idnumber'";
					$result_date = mysqli_query($conn, $sql_update_date);
					$sql_update_time = "UPDATE users SET time_signin='$today_time' WHERE idnumber='$idnumber'";
					$result_time = mysqli_query($conn, $sql_update_time);
					$sql_update_status = "UPDATE users SET status='on' WHERE idnumber='$idnumber'";
					$result_status = mysqli_query($conn, $sql_update_status);
            	}

            	
				
            	$_SESSION['idnumber'] = $row['idnumber'];
            	$_SESSION['firstname'] = $row['firstname'];
             	$_SESSION['lastname'] = $row['lastname'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorrect or unregistered ID number.");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect or unregistered ID number.");
	        exit();
		}
	}
}else{
	header("Location: index.php");
	exit();
}