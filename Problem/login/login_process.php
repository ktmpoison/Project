<?php 
	session_start();
	include '../dbcon.php';
	
	 $user = $_POST['user']; 
	 $pass = $_POST['pass']; 

	 $sql = "SELECT * FROM tbl_login WHERE user='$user' AND pass='$pass'";

	 $result = $MySQLiconn->query($sql);

	 if (!$row = mysqli_fetch_assoc($result)) {
	 		echo "Your login is invalid!";
	 } else {
	 	$_SESSION['id'] = $row['id'];
	 }

	 
header ("Location: ../index.php");
?>

