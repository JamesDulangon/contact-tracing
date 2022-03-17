<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['category']) && isset($_POST['searchtxt']) ) {
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Administrator Home</title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>
     <h1>ADMINISTRATOR</h1>
     <br><br>

<?php 
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$a_category = validate($_POST['category']);	
	$a_searchtxt = validate($_POST['searchtxt']);
	
	if (empty($a_category)) {
		header("Location: admin_home.php?error=Select category.");
	    exit();
	}else if (empty($a_searchtxt)) {
		header("Location: admin_home.php?error=Fill up input to search.");
	    exit();
	}else{

	    $sql3 = "SELECT * FROM users WHERE $a_category ='$a_searchtxt' ";
		$result3 = mysqli_query($conn, $sql3);

		if($result3-> num_rows > 0)
     {
          echo "<table>";
          echo "<tr><th>ID Number </th>
                    <th> First Name </th>
                    <th> Middle Name </th>
                    <th> Last Name </th>
                    <th> Barangay </th>
                    <th> City </th>
                    <th> Province </th>
                    <th> Contact Number </th>
                    <th> Email </th>
                    <th> Date signed-in </th>
                    <th> Time signed in </th>";
          while($row = $result3-> fetch_assoc())
          {
               echo "<tr><td>". $row["idnumber"] ."</td><td>". $row["firstname"] ."</td><td>". $row["middlename"] ."</td><td>". $row["lastname"] ."</td><td>". $row["barangay"] ."</td><td>". $row["city"] ."</td><td>". $row["province"] ."</td><td>". $row["contactnumber"] ."</td><td>". $row["email"] ."</td><td>". $row["date_signin"] ."</td><td>". $row["time_signin"] ."</td></tr>" ;
          }
          echo "</table>";
     }
     else{
          echo "Empty result";
     }
	}
	
}else{
	header("Location: admin_home.php");
	exit();
}
?>
<br>
<a href="admin_home.php" class="ca">Go back to admin home</a>

</body>
</html>