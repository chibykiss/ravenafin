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
<title>DASHBOARD || ATMS application </title>
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
	
	
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Howdy, <?php echo $_SESSION['cname'] ?></h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>cards</li>
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
		<p>Hello  <strong>You are welcome to our bank</strong>
			<br> To apply for ATM cards you should download , fill and send the attachment form below </p>
		<!-- Content -->
		<div class="row">

			<!-- Item -->
			<div class="col-lg-12 col-md-12">
				<?php echo $classObj->genbal3() ?>
				<?php echo $classObj->pro() ?>
			</div>

			
			<div class="my-profile">
				<h3>5 Steps involved in application for ATM cards</h3>
				<ol>
					<li> FILL THE ONLINE APPLICATION FORM BELOW . </li>
					<li> GENERATE APPLICATION NUMBER. </li>
					<li> DOWNLOAD THE  OFFLINE FORM DOCUMENT. </li>
					<li> FILL THE OFFLINE FORM</li>
					<li> SCAN AND SEND IT TO OUR OFFICIAL EMAIL info@apexgrowth.com</li>
				</ol>
					<form method="post"> 
							<label> CUSTOMER SUR NAME </label>
							<input type="text" name="sn" required="" / >


							<label> CUSTOMER FIRST NAME</label>
							<input type="text" name="fn" required="" />

							
							<label> CUSTOMER USER NAME</label>
							<input type="text" name="un" required="" />

						   <label> CUSTOMER EMAIL</label>
							<input type="email" name="em" required="" />		

							<label> ENSURE TO FIRST DOWNLOAD THE OFFLINE APPLICATION FORM BEFORE CLICKING THE SUBMIT REQUEST BUTTON  </label>
							
							
				<a href="#" id="offline" class="button margin-top-15"  style="background-color: green; margin-top: 20px;"> OFFLINE DOCUMENT </a><br>

				<?php 
					if (isset($_POST['wo'])) {
						$sn = $_POST['sn'];
						$fn = $_POST['fn'];
						$em = $_POST['em'];
					    $un = $_POST['un'];
                  $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@kievcapitalfund.com>' . "\r\n";


                   $txt = '   
<html>
  <head>
    <title> ATM request confirmation mail </title>
  </head>
  <body style="padding: 10px;  ">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt="KIEV CAPITAL FUND LOGO" src="https://kievcapitalfund.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style=" text-align: center;">
	<span style="font-family:Comic Sans MS, cursive;">
		<strong>KIEV CAPITAL FUND &nbsp;</strong>
	</span>
</h1>

<h2>
	<span style="font-family:Comic Sans MS, cursive">
		<strong>Dear customer ,&nbsp;</strong>
	</span>
</h2>

<p>
	<span style="font-family:Comic Sans MS, cursive">
		<strong>&nbsp; &nbsp; &nbsp;We have recieved your request for ATM cards, our team is working to serve you better please download, fill and send the offline application form to info@kievcapitalfund.com 
		</strong>
	</span>
</p>

<div style="text-align:center">
	<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<caption>Account Details</caption>
	<tbody>
		<tr>
			<td><strong>&nbsp; &nbsp; USERNAME</strong></td>
			<td>&nbsp; &nbsp;&nbsp;<strong>'.$un.'</strong></td>
		</tr>
		
		<tr>
			<td><strong>&nbsp; &nbsp; SURNAME</strong></td>
			<td>&nbsp; &nbsp;&nbsp;<strong>'.$sn.'</strong></td>
		</tr>
		<tr>
			<td>&nbsp; &nbsp;<strong>FIRST NAME</strong></td>
			<td>&nbsp; &nbsp;&nbsp;<strong>'.$fn.' </strong></td>
		</tr>
		<tr>
			<td>&nbsp; &nbsp;<strong>APPLICATION NUMBER</strong></td>
			<td>&nbsp; &nbsp; &nbsp;<strong>#'.rand(1000000,9999999).'</strong></td>
		</tr>
	</tbody>
</table>
</div>
<p> 
	Dear customer this is an automatic email sent to you as a result of your ATM request please ensure to download , fill , scan and send it our offical email info@kievcapitalfund.com <br>
	It is also important that you add the application number to the offline ATM request form.<br>
	Ensure that the offline application form is well filled  in black ink. 
</p>

<p>
	 This is an automated Confirmation Alert Service . You are getting this email because a you just requested for a Kiev Capital Fund ATM.
</p>
<p>
	<strong>
		Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Kiev Capital Fund Would not request these details from you at any time.</strong>
</p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Spring Heritage Bank.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.kievcapitalfund.com</strong></p>

<p><strong>official email :info@kievcapitalfund.com</strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Kiev Capital Fund and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Kiev Capital Fund shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@kievcapitalfund.com.
  </body> 

</html>


 '; 
                      
             $oo= mail($em,'Kiev Capital Fund ATM Request confirmation',$txt,$headers);
               if($oo){
                   echo '<div class="alert alert-info"> Dear customer an email has been sent you, kindly open to see next step .</div>';
               }
					}
				?>
							<button name="wo" id="oni" class="button margin-top-15 " style="background-color:green;" disabled> SUBMIT REQUEST </button>
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

<script>
$(document).ready(function(){
 $("#offline").click(function(e){
 	e.preventDefault();
 	$("#oni").removeAttr('disabled');
 	window.open('ATM-CARD-APPLICATION-FORM-_31_2.doc');
 });
});
</script>




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