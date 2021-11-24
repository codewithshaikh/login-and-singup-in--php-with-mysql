<?php
session_start();


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>welcome to admin</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'link.php' ?>

</head>
<body>

<div class="container center-div shadow">
	<div class="heading text-center text-uppercase text-white mb-5">

		Welcome to new world <?php echo $_SESSION['uname'] ?> start your work is here :)<br>

		<a href="logout.php" class="btn btn-danger">Logout</a>
		
	</div>
	
</div>

</body>
</html>