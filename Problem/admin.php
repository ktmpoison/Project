<?php
	include_once 'dbcon.php';
	include 'header.php';
	if(!isset($_SESSION['id'])){
   	header("Location:index.php");
}

?>
		<div class="container">
			<!-- Button to open the modal login form -->
			
		</div>

						
				
				<div class="container">
				<div class="clearfix"></div>

				<div class="container">
				<a href="generate_advice.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Advice</a>
				</div>

				<div class="clearfix"></div><br />

				<div class="container">
				<form method="post" name="frm">
				<table class='table table-bordered table-responsive'>
				<tr>
				<th>##</th>
				<th>Problem</th>
				<th>Solution</th>
				<th>Date Added</th>
				</tr>
				<?php
					$res = $MySQLiconn->query("SELECT * FROM tbl_advice");
					$count = $res->num_rows;

					if($count > 0)
					{
						while($row=$res->fetch_array())
						{
							?>
							<tr>
							<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
							<td><?php echo $row['problem']; ?></td>
							<td><?php echo mb_strimwidth($row['solution'],0, 200); ?>...</td>
							<td><?php echo $row['date']; ?></td>
							</tr>
							<?php
						}	
					}
					else
					{
						?>
				        <tr>
				        <td colspan="3"> No Records Found ...</td>
				        </tr>
				        <?php
					}
				?>

				<?php

				if($count > 0)
				{
					?>
					<tr>
				    <td colspan="3">
				    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>

				    
				    <label style="margin-left:100px;">
				    <span style="word-spacing:normal;"> with selected :</span>
				    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span> 
				    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
				    </label>
				    
				    
				    </td>
					</tr>    
				    <?php
				}

				?>

				</table>
				</form>
				</div>
					<div class="push"></div>

				</div>

				<div class="footer">
						<div class="container">
							<p>By Babin Subba</p>
						</div>
				</div>

				</body>
				</html>
