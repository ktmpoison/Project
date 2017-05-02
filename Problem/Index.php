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
	
	<h2><strong>All Advices:</strong></h2>

	<div class="advice-container">

		<?php

			$sql = "SELECT * FROM tbl_advice"; 
			$result = mysqli_query($MySQLiconn, $sql);
			$queryResults = mysqli_num_rows($result);

			if($queryResults > 0) {

				while ($row = mysqli_fetch_assoc($result)) {
					echo "<a href='advice.php?title=".$row['problem']."&date=".$row['date']."'><div class='advice-box'> 
						<h3><strong>".$row['problem']."</strong></h3>
						<p>".mb_strimwidth($row['solution'], 0, 300, '...(<strong><em>Click for more</em></strong>)')."</p>
						<p>".$row['date']."</p>
					</div></a>"; // get substring 100 char for solution. 
						
				}
			}
		?>
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