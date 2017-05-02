<?php
session_start();
if(!isset($_SESSION['id'])){
header("Location:index.php");
}
error_reporting(0);
include_once 'dbcon.php';
include 'header.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='index.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>


<body>

<div class="clearfix"></div>

<div class="container">
<a href="generate_advice.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="update_advice.php">
<table class='table table-bordered'>
<tr>
<th>Problem</th>
<th>Solution</th>
<th>Date Added</th>
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM tbl_advice WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
			<td>
			<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
			<input type="text" name="problem[]" value="<?php echo $row['problem'];?>"  class='form-control' />
			</td>
            <td><textarea name="solution[]" value="<?php echo $row['solution']; ?>"  class='form-control' /></textarea> </td>
            <td><input type="date" name="date" value="<?php echo $row['date']; ?>"  class='form-control' /></td>
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>