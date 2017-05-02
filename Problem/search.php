<?php
	include 'dbcon.php';
	include 'header.php';
?>

			<div class="container">
						<!-- Button to open the modal login form -->
						
					</div>

			<form action="search.php" method="POST">
				<input class ="input1" type="text" name="search" placeholder="Search">
				<button class="button2" type="submit" name="submit-search"><i class="glyphicon glyphicon-search"></i></button>
			</form>
	

			<div class="advice-container">
			<?php
			
   						//proceed as normal, do the query
				if (isset($_POST['submit-search'])) {
					$search = mysqli_real_escape_string($MySQLiconn, $_POST['search']);
					$sql = "SELECT * FROM tbl_advice WHERE problem LIKE '%$search%' OR solution LIKE '%$search%' OR date LIKE '%$search%'";
					$result = mysqli_query($MySQLiconn, $sql);
					$queryResult = mysqli_num_rows($result);

					echo "".$queryResult." results found! ";

					if ($queryResult > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<a href='advice.php?title=".$row['problem']."&date=".$row['date']."'><div class='advice-box'> 
						<h3><strong>".$row['problem']."</strong></h3>
						<p>".mb_strimwidth($row['solution'], 0, 300, '...(<strong><em>Click for more</em></strong>)')."</p>
						<p>".$row['date']."</p>
					</div></a>";
						}
					} else {
						echo "There are no matching results!";
					}
					}

				
			?>

			</div>