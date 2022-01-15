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
<title> CUSTOMER || DASHBOARD || transacton </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/colors/main.css" id="colors">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="manifest" href="manifest.json">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="SHBank">
  <link rel="apple-touch-icon" href="images/icons/48.jpeg" sizes="57x57">
  <link rel="apple-touch-icon" href="images/icons/96.jpeg" sizes="60x60">
  <link rel="apple-touch-icon" href="images/icons/96.jpeg" sizes="72x72">
  <link rel="apple-touch-icon" href="images/icons/192.jpeg" sizes="76x76">
  <link rel="apple-touch-icon" href="images/icons/256.jpeg" sizes="114x114">
  <link rel="apple-touch-icon" href="src/images/icons/apple-icon-120x120.png" sizes="120x120">
  
  <meta name="msapplication-TileImage" content="images/icons/192.jpeg">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="SHBank">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="#3aa5dc">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
				 
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
	@media screen and (max-width: 600px){
		table td {
		    border-bottom: 1px solid #ddd;
		    display: block;
		    font-size: 14px;
		    text-align: center;
		}
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
	<div class="dashboard-content">

    

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">

				<div class="col-md-12">

					<h2>Welcome, <?php echo $_SESSION['cname'] ?></h2>

		       	<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Transaction</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
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

		<!-- Notice -->
		<p>Hello  <strong>You are welcome to Icharteredfin Transfer transation history </p>
		<!-- Content -->


		<div class="row">			
				<!-- Item -->				
				<?php //$classObj->gettransact(); ?>
				<iframe src="trans_iframe.php" style="border: 0px; height: 290px;" width="100%">
				  <p>Your browser does not support this frame .</p>
				</iframe>
		
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
<script type="text/javascript" src="scripts/reg.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready( function () {
   // $('#table_id').DataTable();
} );
</script>


</body>

</html>

<?php ob_end_flush() ?>

