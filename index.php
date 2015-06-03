<?php 
	include 'config/setup.php'; 
	$q = "SELECT * FROM pages WHERE id = 1";
	$r = mysqli_query($dbc, $q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title.' | '.$site_title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include 'config/css.php'; ?>
		<?php include 'config/js.php'; ?>
	</head>
		
	<body>
		<nav class="navbar navbar-default" role="navigation"><!-- START MAIN NAVIGATION -->
			<div class="container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">About Us</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Sales</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</nav><!-- END MAIN NAVIGATION -->

		<div class="container">
			<h1>Content Area</h1>
		</div>
		
		<footer class="footer">
      		<div class="container">
        		<p>Place sticky footer content here.</p>
      		</div>
  		</footer><!-- END FOOTER -->
	</body>
</html>