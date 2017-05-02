<?php
session_start();
if(!isset($_SESSION['id'])){
header("Location:index.php");
}

include_once 'dbcon.php';


$id = $_POST['id'];
$problem = $_POST['problem'];
$solution = $_POST['solution'];
$date = $_POST['date'];
$chk = $_POST['chk'];
$chkcount = count($id);

for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE tbl_advice SET problem='$problem[$i]', solution='$solution[$i]', date='$date[$i]' WHERE id=".$id[$i]);
}

?>