<?php
	session_start();
	include_once 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- -->
	<link rel="stylesheet" type="text/css" href="js_css/styles.css?<?php echo time(); ?>">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="bootstrap/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="js_css/jquery.js" type="text/javascript"></script>
	<script src="js_css/js-script.js" type="text/javascript"></script>
    
    <link rel="stylesheet" type="text/css" href="js_css/video_gallery.css" />    	
	<link rel="stylesheet" type="text/css" href="js_css/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" />
	<script type="text/javascript" src="js_css/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="js_css/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>	
	<script type="text/javascript" src="js_css/video_gallery.js"></script>

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=gsg3plc8d6t2o87ctqvcg023rgk6ax77w87ur2urotw0qv93"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>
	<div class="header">	
		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="#">My_Project</a>
		</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> &nbsp;Home</a></li>
				<li class="active"><a href="video_gallery.php"><i class="glyphicon glyphicon-film"></i> &nbsp;Videos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
						if (isset($_SESSION['id'])) {
							echo "<form action='admin.php'>
					  				<button class='btn btn-primary'><i class='glyphicon glyphicon-file'></i> &nbsp;Advice Record</button>
					  			  </form>";
					  		echo "<form action='add_video.php'>
					  				<button class='btn btn-primary'><i class='glyphicon glyphicon-upload'></i> &nbsp;Add Video</button>
					  			  </form>";
					  		echo "<form action='login/logout.php'>
					  				<button class='btn btn-warning'><i class='glyphicon glyphicon-log-out'></i> &nbsp;LOG OUT</button>
					  			  </form>";
			
					  	} else {

					  		echo "<form action='login/login_process.php' method='POST' class='form-inline'>
					  		<div class='input-group'>
					  		<span class='input-group-addon'><i class='fa fa-user'></i></span>
							<input type='text' class='form-control' placeholder='Enter Username' name='user' required>
							</div>
							<div class='input-group'>
					  		<span class='input-group-addon'><i class='fa fa-lock'></i></span>
							<input type='password' class='form-control' placeholder='Enter Password' name='pass' required>
							</div>
							<div class='input-group'>
							<button class='btn btn-success' type='submit'><i class='glyphicon glyphicon-log-in'></i> &nbsp;LOGIN</button>
							</div>
						  		</form>";
					  	}
					
				?>
				</ul>
			</div>
		</nav>
	</div>

</body>

