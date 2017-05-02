<?php
	include 'dbcon.php';
	include 'header.php';
?>
		<div class="container">
			<!-- Button to open the modal login form -->
			
		</div>
	
	
	<h2><strong>Advice page</strong></h2>

	<div class="advice-container">
		<?php

			$title = mysqli_real_escape_string($MySQLiconn, $_GET['title']);
			$date = mysqli_real_escape_string($MySQLiconn, $_GET['date']);

			$sql = "SELECT * FROM tbl_advice WHERE problem='$title' AND date= '$date'";
			$result = mysqli_query($MySQLiconn, $sql);
			$queryResults = mysqli_num_rows($result);


			if($queryResults > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo nl2br("<div class='advice-box'> 
						<h3><strong>".$row['problem']."</strong></h3>
						 <p>".$row['solution']."</p>  
						<p>".$row['date']."</p>
						
					</div>");  
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