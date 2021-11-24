<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'link.php' ?>

</head>
<body>

<header>
<div class="container center-div shadow">
	<div class="heading text-center text-uppercase text-white mb-5"> Login Form </div>
	<div class="container row d-flex flex-row justify-content-center mb-5 ">
		<div class="admin-form shadow p-2">
  <form action="logincheck.php" method="POST">
    <div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="uname" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pass" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Login</button>
    Don't Have an account?
    <a href="index.php">Registration Here</a>
  </form>
  </div>
  </div>
</div>
</header>


</body>
</html>