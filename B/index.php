<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sing-Up</title>

	<link rel="stylesheet" type="text/css" href="style.css">

		<?php include 'link.php' ?>

</head>
<body>

	<header>
<div class="container center-div shadow">
	<div class="heading text-center text-uppercase text-white mb-1"> Registration Form </div>
	<div class="container row d-flex flex-row justify-content-center mb-2 ">
	<div class="singup-form shadow p-2">
  <form action="submitcheck.php" method="POST">
  	 <div class="form-group">
      <label>Fistname:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="fname" autocomplete="off" required>
    </div>
     <div class="form-group">
      <label>Lastname:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="lname" autocomplete="off" required>
    </div>
     <div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="uname" autocomplete="off" required>
    </div>
     <div class="form-group">
      <label>Mobile no.:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="mobile" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label>E-mail I'd:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="email" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pass" autocomplete="off" required>
    </div>
     <div class="form-group">
      <label>Confome password:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="cpass" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
  
    I Have an account?
    <a href="login.php">Login Here</a>
  </form>
  </div>
  </div>
</div>
</header>

</body>
</html>