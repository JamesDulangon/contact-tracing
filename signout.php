<?php 
session_start();
include "db_conn.php";

isset($_SESSION['idnumber']);
function validate($data)
{
    $data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$idnumber = $_SESSION['idnumber'];
$sql_update_status = "UPDATE users SET status='off' WHERE idnumber='$idnumber'";
$result_status = mysqli_query($conn, $sql_update_status);

session_unset();
session_destroy();

header("Location: index.php");