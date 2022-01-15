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
<title> CUSTOMER || DASHBOARD || Investment Tab</title>
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
							<li><a href="#">Investment</a></li>
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
    <?php $classObj->lolol(); ?>
		<!-- Notice -->

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

		<p>Hello  <strong> You are welcome to Kiev Capital Fund </p>
		<!-- Content -->
		<!-- stock market pricing widget  -->
		
		<div class="row">
			<h3 class="text-center">Available Investments</h3>
				<div>
							<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container">
						  <div class="tradingview-widget-container__widget" ></div>
						  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
						  {
						  "width": "100%",
						  "height": "574",
						  "symbolsGroups": [
						    {
						      "originalName": "Indices",
						      "symbols": [
						        {
						          "displayName": "S&P 500",
						          "name": "OANDA:SPX500USD"
						        },
						        {
						          "displayName": "Shanghai Composite",
						          "name": "INDEX:XLY0"
						        },
						        {
						          "displayName": "Dow 30",
						          "name": "FOREXCOM:DJI"
						        },
						        {
						          "displayName": "Nikkei 225",
						          "name": "INDEX:NKY"
						        },
						        {
						          "displayName": "DAX Index",
						          "name": "INDEX:DAX"
						        },
						        {
						          "displayName": "FTSE 100",
						          "name": "OANDA:UK100GBP"
						        }
						      ],
						      "name": "Indices"
						    },
						    {
						      "originalName": "Commodities",
						      "symbols": [
						        {
						          "displayName": "E-Mini S&P",
						          "name": "CME_MINI:ES1!"
						        },
						        {
						          "displayName": "Euro",
						          "name": "CME:E61!"
						        },
						        {
						          "displayName": "Gold",
						          "name": "COMEX:GC1!"
						        },
						        {
						          "displayName": "Crude Oil",
						          "name": "NYMEX:CL1!"
						        },
						        {
						          "displayName": "Natural Gas",
						          "name": "NYMEX:NG1!"
						        },
						        {
						          "displayName": "Corn",
						          "name": "CBOT:ZC1!"
						        }
						      ],
						      "name": "Commodities"
						    },
						    {
						      "originalName": "Bonds",
						      "symbols": [
						        {
						          "displayName": "Eurodollar",
						          "name": "CME:GE1!"
						        },
						        {
						          "displayName": "T-Bond",
						          "name": "CBOT:ZB1!"
						        },
						        {
						          "displayName": "Ultra T-Bond",
						          "name": "CBOT:UD1!"
						        },
						        {
						          "displayName": "Euro Bund",
						          "name": "EUREX:GG1!"
						        },
						        {
						          "displayName": "Euro BTP",
						          "name": "EUREX:II1!"
						        },
						        {
						          "displayName": "Euro BOBL",
						          "name": "EUREX:HR1!"
						        }
						      ],
						      "name": "Bonds"
						    },
						    {
						      "originalName": "Forex",
						      "symbols": [
						        {
						          "name": "FX:EURUSD"
						        },
						        {
						          "name": "FX:GBPUSD"
						        },
						        {
						          "name": "FX:USDJPY"
						        },
						        {
						          "name": "FX:USDCHF"
						        },
						        {
						          "name": "FX:AUDUSD"
						        },
						        {
						          "name": "FX:USDCAD"
						        }
						      ],
						      "name": "Forex"
						    }
						  ],
						  "locale": "en"
						}
						  </script>
						</div>
						<!-- TradingView Widget END -->
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
<script type="text/javascript" src="scripts/reg.js"></script>


</body>

</html>

<?php ob_end_flush() ?>