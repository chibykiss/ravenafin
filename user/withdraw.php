<?php ob_start() ?>

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
<title>DASHBOARD || home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/main.css" id="colors">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<style type="text/css">
	.user-menu.active .user-name{
		color: #2a2a2a;	
	} 
	.user-menu:hover{
		color: #2a2a2a;	
	}
	.nan{
		color: #2a2a2a;
		background: white;
	}
	.nan:hover{
		color: #2a2a2a;
		background: white; 
	}
	a.button.border{
		color: #2a2a2a;
	}
</style>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php require("header.php") ?>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
    <?php //$classObj->lolol(); ?>
    <br><br>
	

	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Howdy,  <?php echo $_SESSION['cname'] ?>!</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>withdraw</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- Notice -->
		<p>Hello  <strong>You are welcome to our bank</p>
			
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "OANDA:SPX500USD"
    },
    {
      "title": "Shanghai Composite",
      "proName": "INDEX:XLY0"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    }
  ],
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

		<!-- Content -->
		<div class="row">

			<!-- Item -->
			<div class="col-lg-12 col-md-12">
				<?php echo $classObj->genbal3() ?>
				<?php echo $classObj->pro() ?>
			</div>

			
			<div class="my-profile">
					<form method="post"> 
							<label>Account balance($)</label>
							<input value="<?php echo $classObj->getb(); ?>" type="text" disabled>


							<label>Enter Amount</label>
							<input placeholder=" 00000" type="number" required="">

							
							<button name="witho" class="button margin-top-15" style="background-color:green;">Withdraw</button>
					</form>	
			</div>


		</div>


		<div class="row">
			
			<!-- Copyrights -->
			<?php include("footer.php"); ?>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->
<?php include("trann.php"); ?>
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
<?ob_end_flush(); ?>