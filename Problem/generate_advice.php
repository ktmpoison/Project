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
				<a href="admin.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-eye-open"></i> &nbsp; View Data</a>
				</div>

				<div class="clearfix"></div><br />

				<div class="container">
				<form method="post" action="add_advice.php">

				<table class='table table-bordered'>

				<tr>
				<td>Enter how many advices you want to insert</td>
				</tr>

				<tr>
				<td>
				<input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" class="form-control" required />
				</td>
				</tr>

				<tr>
				<td><button type="submit" name="btn-gen-form" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button> 

				<a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>
				</td>
				</tr>

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