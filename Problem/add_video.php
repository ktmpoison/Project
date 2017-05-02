<?php
session_start();
if(!isset($_SESSION['id'])){
header("Location:index.php");
}
error_reporting(0);
include_once 'dbcon.php';
include 'header.php';

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];

	move_uploaded_file($temp,"uploads/".$name);
	$url = "http://localhost:8000/Problem/uploads/$name";

	$sql="INSERT INTO tbl_video(name,url) VALUES('".$name."','".$url."')";
	$sql = $MySQLiconn->query($sql);
}
?>

	<div class="container">
				<!-- Button to open the modal login form -->
				
			</div>
	


			<a href="videos.php">Videos</a>
			<form action="index.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file" />
			    <input type="submit" name="submit" value="Upload!" />
			</form>

			<?php

			if(isset($_POST['submit']))
			{
				echo "<br />".$name." has been uploaded";
			}

			?>

			</body>
			</html>