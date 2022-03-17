<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "contacttracing_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	header("Location: index.php?error=Connection failed");
}