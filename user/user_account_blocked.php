<?php ob_start(); ?>

<?php
require('../script.php');
    session_start();
    $classObj = new ok;
    $classObj->dbcon(); 
?>

<!DOCTYPE html>

<head>

<!-- Basic Page Needs
================================================== -->
<title> DASHBOARD || Frozen </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/main.css" id="colors">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/p.jpg" alt=""></a>
				</div>

					
			</div>
			
		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Content
================================================== -->


<!-- Container -->
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<p style="height: 10px;"></p>
			<section id="not-found" class="center">
				<h3> Account  frozen</h3>
				
				<div class="row">
					<div class="col-lg-12 ">
				<p>Sorry your bank account is under investigation and has been frozen. please contact customer service for more infomation as soon as possible.</p>
				<a class="button"  href="mailto:info@icharteredfin.com"> Email</a>

				<a class="button" href="tel:+15187221474"> Toll free line</a>
					</div>
				</div>
				<a href="../index.php">Back Home</a>
				<!-- Search Section / End -->


			</section>

		</div>
	</div>

</div>
<!-- Container / End -->



<!-- Footer
================================================== -->
<?php include('footer.php') ?>
<!-- Footer / End -->

<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

  </body>
</html>
<?php ob_end_flush(); ?>