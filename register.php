<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>School Management System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="pic">
    <center>
       
    </center>

   
  </div>
  <div class="header">
    
  	<h2>New Registration</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Login</a>
  	</p>
  </form>

<footer> &copy; 2020 Jacob Amponsah Yeful 218EI11005921 </footer>
</body>
</html>
