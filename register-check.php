<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['idnumber']) && isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['lastname'])
	&& isset($_POST['brgy']) && isset($_POST['city']) && isset($_POST['province']) && isset($_POST['contactnumber'])
	&& isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$r_idno = validate($_POST['idnumber']);	
	$r_firstname = validate($_POST['firstname']);
	$r_middlename = validate($_POST['middlename']);
	$r_lastname = validate($_POST['lastname']);
	$r_brgy = validate($_POST['brgy']);
	$r_city = validate($_POST['city']);
	$r_province = validate($_POST['province']);
	$r_contactnumber = validate($_POST['contactnumber']);
	$r_email = validate($_POST['email']);
	$r_date = date("Y-m-d");
	date_default_timezone_set('Asia/Manila');
	$r_time = date("H:i:s");
 
	if (empty($r_idno)) {
	header("Location: register.php?error=Fill up ID number.");
	    exit();
	}else if (empty($r_firstname)) {
		header("Location: register.php?error=Fill up first name.");
	    exit();
	}else if (empty($r_middlename)) {
		header("Location: register.php?error=Fill up middle name.");
	    exit();
	}else if (empty($r_lastname)) {
		header("Location: register.php?error=Fill up last name.");
	    exit();
	}else if (empty($r_brgy)) {
		header("Location: register.php?error=Fill up barangay.");
	    exit();
	}else if (empty($r_city)) {
		header("Location: register.php?error=Fill up City.");
	    exit();
	}else if (empty($r_province)) {
		header("Location: register.php?error=Fill up Province.");
	    exit();
	}else if (empty($r_contactnumber)) {
		header("Location: register.php?error=Fill up contact number.");
	    exit();
	}else if (empty($r_email)) {
		header("Location: register.php?error=Fill up email.");
	    exit();
	}
	else{
	    $sql = "SELECT * FROM users WHERE idnumber='$r_idno' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The ID number is already registered");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(idnumber, firstname, middlename, lastname, barangay, city, province, contactnumber, email, date_signin, time_signin, status) VALUES('$r_idno', '$r_firstname', '$r_middlename', '$r_lastname', '$r_brgy', '$r_city', '$r_province','$r_contactnumber','$r_email','$r_date', '$r_time', 'on')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Account successfully registered.");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}