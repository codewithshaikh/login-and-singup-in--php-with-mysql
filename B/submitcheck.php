
<!-- registration value   php 
data name ( btest )
table name ( singup )
-->

<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root' );

//  if($con){
//  	echo "connection successful";
// }else{
//  	echo "No connection";
//   }


mysqli_select_db($con, 'btest');

	$fistname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$username = $_POST['uname'];
	$mobile = $_POST['mobile'];
	$email  = $_POST['email'];
	$password  = $_POST['pass'];
	$cpassword  = $_POST['cpass'];
	


	$sql = " select * from singup where uname = '$username' and pass = '$password'";

	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){

		?>
         <script>
                 alert("connection successful");
         </script>
        <?php

			//echo "Dublicate value";

			$_SESSION['uname'] = $username;
			header('location:login.php');
		}else{

			$qy = "insert into singup(fname , lname , uname , mobile , email , pass , cpass) value ('$fistname' , '$lastname' , '$username' , '$mobile' , '$email' , '$password' , '$cpassword')";

			mysqli_query($con,$qy);

		}
	



?>