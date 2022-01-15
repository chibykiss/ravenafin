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
<title> CUSTOMER || DASHBOARD || home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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

					<h2>Welcome, <?php echo $_SESSION['cname'] ?></h2>

		       	<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<?php // $classObj->lolol(); ?>
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
		<p>Hello  <strong> You are welcome to Icharteredfin </p>
		<!-- Content -->
		<div class="row">
		    
			<div class="col-lg-12 well">
				<p>Acting as a provider of loans is one of our main activities as banks ,financial institutions and credit card companies. We provide several types of loans and the list below provides in formation about them.</p>
			</div>
			<hr>
			<div class="col-lg-12 well">
				<h3 style="text-decoration: underline;">Auto loan</h3>
				In the market to purchase a new or used car or refinance your existing loan? Icharteredfin offers competitive rates and flexible loan and payment terms. Explore rates, estimate your monthly payments and apply online for an auto purchase loan or to refinance your current auto loan.<br>
				<br>
				<strong>How car loans work</strong><br><br>

			Purchasing a car typically means taking out a car loan. If you’re in the market for a new vehicle, you’ve probably spent a lot of time researching car options, but do you have a good understanding of how car loans work? When you take out a car loan from a financial institution, you receive your money in a lump sum, then pay it back (plus interest) over time. How much you borrow, how much time you take to pay it back and your interest rate all affect the size of your monthly payment. Here are the 3 major factors that affect both your monthly payment and the total amount you’ll pay on your loan:

			<ul>
				<li>The loan amount. It can be significantly less than the value of the car, depending on whether you have a trade-in vehicle and/or making a down payment.</li>
				<li>The annual percentage rate. Usually referred to as the APR, this is the effective interest rate you pay on your loan.</li>
				<li>The loan term. This is the amount of time you have to pay back the loan, typically 36–72 months</li>
			</ul>

			<br><br>
			<strong>How do these 3 factors affect your monthly payment?</strong>
			A lower monthly payment always sounds good, but it’s important to look at the bigger financial picture: That lower payment could also mean you’re paying more for your car over the life of the loan. Let's see how adjusting each of the 3 factors can affect your monthly payment:
			<ul>
				<li>A lower loan amount. Let's say you’re considering a $25,000 car loan, but you make a $2,000 down payment or negotiate the price of the car down by $2,000. Your loan amount becomes $23,000, which saves you $44.27 per month (assuming a 3.00% annual percentage rate and a 4-year term).</li>
				<li>A lower annual pecentage rate. Consider that same $25,000 car loan and let’s assume a 4-year term. One financial institution offers a 3.00% annual percentage rate and another offers a 2.00% annual percentage rate. Taking the lower annual percentage rate will save you $10.98 per month.</li>
				<li>A longer loan term. Extending a $25,000 loan from 4 years to 5 years (assuming a 3.00%  annual percentage rate ) lowers your monthly payment by $104.14, but, you’ll end up paying $391.85 more in interest charges over the life of the loan.</li>
			</ul>



			</div>

			<hr>
			<div class="col-lg-12 well">
				<h3 style="text-decoration: underline;">Home loan</h3>
				<p>A mortgage loan, or simply mortgage, is used either by purchasers of real property to raise funds to buy real estate, or alternatively by existing property owners to raise funds for any purpose, while putting a lien on the property being mortgaged</p>

				<p>
					Interest rates and annual percentage rates (APRs) are based on current market rates, are for informational purposes only, are subject to change without notice and may be subject to pricing add-ons related to property type, loan amount, loan-to-value, credit score, refinance with cash out and other variables—call for details. This is not a credit decision or a commitment to lend. Mortgage insurance may be required depending on loan guidelines. If mortgage insurance is required, the mortgage insurance premium could increase the APR and the monthly mortgage payment. Additional loan programs may be available.

APR reflects the effective cost of your loan on a yearly basis, taking into account such items as interest, most closing costs, discount points (also referred to as “points”) and loan-origination fees. One point is 1% of the mortgage amount (for example, $1,000 on a $100,000 loan) based on the interest rate on your note, not on APR.

Adjustable-rate mortgage (ARM) rates assume no increase in the financial index after the initial fixed period. ARM rates and monthly payments are subject to increase after the fixed period: ARMs assume a 30-year term.


				</p>


			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				TO apply please fill the form below.
				<br><hr><br> 
				
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
$headers .= 'From: <info@icharteredfin.com >' . "\r\n";


                   $txt = '   
<html>
  <head>
    <title> ATM request confirmation mail </title>
  </head>
  <body style="padding: 10px;  ">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt=" Kiev Capital LOGO" src="https://Icharteredfin.com /images/logo.png" style="height:70px; width:64px" /></p>

<h1 style=" text-align: center;">
	<span style="font-family:Comic Sans MS, cursive;">
		<strong> Icharteredfin &nbsp;</strong>
	</span>
</h1>

<h2>
	<span style="font-family:Comic Sans MS, cursive">
		<strong>Dear customer ,&nbsp;</strong>
	</span>
</h2>

<p>
  <span style="font-family:Comic Sans MS, cursive">
  	<strong>&nbsp; &nbsp; &nbsp;We have recieved your request for loans, our team is working to serve you better please download, fill and send the offline application form to info@icharteredfin.com  </strong>
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
<p>Dear customer this is an automatic email sent to you as a result of your loan request please ensure to download , fill , scan and send it our offical email info@icharteredfin.com  <br>
It is also important that you add the application number to the offline ATM request form.<br>
Ensure that the offline application form is well filled  in black ink. 
</p>

<p> This is an automated Confirmation Alert Service . You are getting this email because a you  just requested for a Icharteredfin LOAN.</p>
<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Icharteredfin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Icharteredfin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.Icharteredfin.com </strong></p>

<p><strong>official email :info@icharteredfin.com </strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Icharteredfin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Icharteredfin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@icharteredfin.com  .
  </body> 

</html>


 '; 
                      
                  $oo= mail($em,'Icharteredfin Loan Request Confirmation',$txt,$headers);
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
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
<script>
	$(document).ready(function(){
	$('.clo').click(function(e){
	   $('.clo').fadeIn("slow").remove();	
		});

	$("#offline").click(function(e){
 	e.preventDefault();
 	$("#oni").removeAttr('disabled');
 	window.open('https://Icharteredfin.com /user/ATM-CARD-APPLICATION-FORM-_31_2.pdf');
 });
	
	});
</script>

</body>

</html>

<?php ob_end_flush() ?>