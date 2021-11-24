<?php
session_start();

$con = mysqli_connect('localhost', 'root' );

// if($con){
//  	echo "connection successful";
// }else{
//  	echo "No connection";
//   }

$db = mysqli_select_db($con, 'btest');

if (isset($_POST['submit'])) {
	$username = $_POST['uname'];
	$password  = $_POST['pass'];

	$sql = " select * from singup where uname = '$username' and pass = '$password' ";

	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['uname'] = $username;
			header('location:home.php');
		}else{
			echo "login failed";
			?>
			<?php
			header('location:login.php');
		}
	
}



?>