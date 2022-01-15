<?php ob_start(); ?>

<?php
    require('../script.php');
    session_start();
    $classObj = new ok;
    $classObj->dbcon();
    $classObj->even();   
?>


<?php
if (!isset($_SESSION["cname"])) {
  header('location:../login.php');
}
?>

<!DOCTYPE html>

<head>

<!-- Basic Page Needs
================================================== -->
<title> DASHBOARD || transfer </title>
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
					<a href="andex.php"><img src="images/p.jpg" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">			
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="profile.php">Profile</a></li>
								<li><a href="withdraw.php">Withdraw</a></li>
								<li><a href="dashboard-massages.php">Messages</a></li>
								<li><a href="logout.php">Log out</a></li>
							</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
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

			<section id="not-found" class="center">
				<h3>Transfer</h3>
				<h4>Hello , <?php echo $_SESSION['cname']; ?></h4>
				<p><?php $classObj->even1(); ?>
				</p>

				<!-- Search -->
				<div class="row">
					<div class="col-lg-12 ">
						<?php $classObj->even3(); ?>
						<?php $classObj->even4(); ?>
						<form method="post">
							<?php $classObj->even2(); ?>
							<button type="submit" class="button"   name="send" style="background: green;"> Accept</button>
							<button class="button" onclick=" window.location.assign('index.php') "> Decline </button>
						</form>
					</div>
				</div>
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