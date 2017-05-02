<?php
session_start();
if(!isset($_SESSION['id'])){
header("Location:index.php");
}
error_reporting(0);
include_once 'dbcon.php';
include 'header.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];

		
	for($i=1; $i<=$total; $i++)
	{
		$problem = $_POST["problem$i"];
		$solution = $_POST["solution$i"];
        $date = $_POST["date$i"];

        

		$sql="INSERT INTO tbl_advice(problem,solution,date) VALUES('".$problem."','".$solution."','".$date."')";
		$sql = $MySQLiconn->query($sql);	
    
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." advice was inserted !!!"; ?>');
		window.location.href='admin.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
}
?>
        
        <div class="container">
            <!-- Button to open the modal login form -->
            
        </div>

            <div class="container">
            <div class="clearfix"></div>

            <div class="container">
            <a href="generate_advice.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
            </div>

            <div class="clearfix"></div><br />

            <div class="container">
            <?php
            if(isset($_POST['btn-gen-form']))
            {
            	?>
                <form method="post">
                <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
            	<table class='table table-bordered'>
                
                <tr>
                <th>##</th>
                <th>Problem</th>
                <th>Solution</th>
                <th>Date</th>
                </tr>
            	<?php
            	for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
            	{
            		?>
                    <tr>
                    <td><?php echo $i; ?></td>
                    <td><input type="text" name="problem<?php echo $i; ?>" placeholder="problem" class='form-control' /></td>
                    <td><textarea name="solution<?php echo $i; ?>" placeholder="solution" class='form-control' /></textarea> </td>
                    <td><input type="date" name="date<?php echo $i; ?>" placeholder="date" class='form-control' /></td>
                    </tr>
                    <?php
            	}
            	?>
                <tr>
                <td colspan="3">
                
                <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button> 

                <a href="admin.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>
                
                </td>
                </tr>
                </table>
                </form>
            	<?php
            }
            ?>
            </div>
            </div>

            <div class="footer">
                    <div class="container">
                        <p>By Babin Subba</p>
                    </div>
            </div>

            </body>
            </html>