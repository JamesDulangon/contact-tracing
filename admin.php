<!DOCTYPE html>
<html>
<head>
	<title>Contact Tracing App - Admin Sign In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="admin_signin.php" method="post">
          <h2>ADMINISTRATOR LOGIN</h2>
          <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <input type="text" name="username" placeholder="User Name"><br>
          <input type="password" name="password" placeholder="Password"><br>

          <button type="submit">Login</button>
          <a href="index.php" class="ca">Go back to user sign-in</a>
     </form>
</body>
</html>