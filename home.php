<?php 
session_start();

// if (isset($_SESSION['idnumber']) && isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
if (isset($_SESSION['idnumber'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['firstname'], " ", $_SESSION['lastname'];  ?></h1>
     <a href="signout.php">Sign out</a>
     <a href="index.php">Back</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>