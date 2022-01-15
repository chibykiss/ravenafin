<?php ob_start(); ?>

<?php
    require('../script.php');
    $classObj = new ok;
    $classObj->dbcon();
    session_start();
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
<title> Icharteredfin || trasfer fail </title>
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


<!-- Content
================================================== -->

<!-- Coming Soon Page -->
<div class="coming-soon-page" style="background-image: url(images/p.jpg)">
	<div class="container">
		<!-- Search -->
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<p style="height: 10px;"></p>
				<h3> <?php $classObj->addtack(); ?> </h3>
				<br><a class="button" href="index.php" style="background: green;"> continue </a>
				<input type="hidden" id="id" value="<?php echo $_GET["id"]; ?>" />
				
					<div id="nop">
						<?php $classObj->trans_status(); ?>
					</div>
				<br>
			</div>
		</div>
		<!-- Search Section / End -->
	</div>
</div>
<!-- Coming Soon Page / End -->
</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    	var id = $('#id').val();
    	setInterval(myFunction, 10000);
	});
</script>
</body>

</html>


<?php ob_end_flush() ?>