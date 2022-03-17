<!DOCTYPE html>
<html>
<head>
	<title>Contact Tracing App - Sign In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signin.php" method="post">
     	<h2>SIGN IN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="number" name="idno" placeholder="ID Number"><br>

          <a href="register.php" class="ca">Register an account</a><br>
          <a href="admin.php" class="ca">Sign in as Administrator</a>
          <button type="submit">Sign In</button>

     </form>
</body>
</html>