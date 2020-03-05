<?php
	include 'config/connection.php';
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$mysql_qry = "select * from users where username='$username' and password='$password'";
	$result = mysqli_query($conn ,$mysql_qry);
	$row = mysqli_fetch_array($result);
	if(mysqli_num_rows($result) > 0) {
		echo "Succeed";
	}

?>

