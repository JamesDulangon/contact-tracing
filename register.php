<!DOCTYPE html>
<html>
<head>
	<title>Contact Tracing App - Register </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="register-check.php" method="post">
     	<h2>REGISTER</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>ID Number</label>
          <?php if (isset($_GET['idnumber'])) { ?>
               <input type="number" 
                      name="idnumber" 
                      placeholder="ID Number"
                      value="<?php echo $_GET['idnumber']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="idnumber" 
                      placeholder="ID Number"><br>
          <?php }?>

          <label>Full Name</label>
          <?php if (isset($_GET['firstname'])) { ?>
               <input type="text" 
                      name="firstname" 
                      placeholder="First Name"
                      value="<?php echo $_GET['firstname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="firstname" 
                      placeholder="First Name"><br>
          <?php }?>

          <?php if (isset($_GET['middlename'])) { ?>
               <input type="text" 
                      name="middlename" 
                      placeholder="Middle Name"
                      value="<?php echo $_GET['middlename']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="middlename" 
                      placeholder="Middle Name"><br>
          <?php }?>

          <?php if (isset($_GET['lastname'])) { ?>
               <input type="text" 
                      name="lastname" 
                      placeholder="Last Name"
                      value="<?php echo $_GET['lastname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="lastname" 
                      placeholder="Last Name"><br>
          <?php }?>

          <label>Full Address</label>
          <?php if (isset($_GET['brgy'])) { ?>
               <input type="text" 
                      name="brgy" 
                      placeholder="Barangay"
                      value="<?php echo $_GET['brgy']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="brgy" 
                      placeholder="Barangay"><br>
          <?php }?>

          <?php if (isset($_GET['city'])) { ?>
               <input type="text" 
                      name="city" 
                      placeholder="City"
                      value="<?php echo $_GET['city']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="city" 
                      placeholder="City"><br>
          <?php }?>

          <?php if (isset($_GET['province'])) { ?>
               <input type="text" 
                      name="province" 
                      placeholder="Province"
                      value="<?php echo $_GET['province']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="province" 
                      placeholder="Province"><br>
          <?php }?>

     	<label>Contact Number</label>
          <?php if (isset($_GET['contactnumber'])) { ?>
               <input type="number" 
                      name="contactnumber" 
                      placeholder="Contact Number"
                      value="<?php echo $_GET['contactnumber']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="contactnumber" 
                      placeholder="Contact Number"><br>
          <?php }?>

          <label>E-mail</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>

     	<button type="submit">Register</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>