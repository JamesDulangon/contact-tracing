<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['admin'])) {

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

     <form action="admin_search.php" method="post">
          <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <label> Search according to: </label>
          <select name = "category">
               <option value="city">City</option>
               <option value="barangay">Barangay</option>
               <option value="province">Province</option>
               <option value="idnumber">ID number</option>
               <option value="firstname">First Name</option>
               <option value="lastname">Last Name</option>
               <option value="time_signin">Time</option>
               <option value="date_signin">Date</option>
           </select>

          <input type="text" name="searchtxt" placeholder="Input search"><br>
          <button type="submit">Search</button>
          <a href="signout.php" class="ca">Sign out as admin</a>
          
     </form>
</body>
</html>
<?php 
}else{
     header("Location: admin.php");
     exit();
}
 ?>