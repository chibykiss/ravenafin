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
<title> CUSTOMER || DASHBOARD || mortgages</title>
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
		<?php //$classObj->lolol(); ?>
	
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
		<p>Hello  <strong>You are welcome to Icharteredfin </p>
		<!-- Content -->
		<div class="row">
			<div class="col-lg-12 well">
				<p>Mortgages, is used either by purchasers of real property to raise funds to buy real estate, or alternatively by existing property owners to raise funds for any purpose, while putting a lien on the property being mortgaged. The loan is "secured" on the borrower's property through a process known as mortgage origination. This means that a legal mechanism is put into place which allows the lender to take possession and sell the secured property ("foreclosure" or "repossession") to pay off the loan in the event the borrower defaults on the loan or otherwise fails to abide by its terms. The word mortgage is derived from a "Law French" term used by English lawyers in the Middle Ages meaning "death pledge" and refers to the pledge ending (dying) when either the obligation is fulfilled or the property is taken through foreclosure. Icharteredfin Premium checking account offers mortgeges</p>
			</div>
			<hr>
			<div class="col-lg-12 well">
				<h3 style="text-decoration: underline;">Refinance</h3>
				Refinancing is the replacement of an existing debt obligation with another debt obligation under different terms. The terms and conditions of refinancing may vary widely by country, province, or state, based onseveral economic factors such as inherent risk, projected risk, political stability of a nation, currency stability, banking regulations, borrower's credit worthiness, and credit rating of a nation. In many industrialized nations, a common form of refinancing is for a place of primary residency mortgage. Refinancing your mortgage is a way to potentially lower your interest rate and monthly mortgage payment.
				<br>
				<strong>How car refinancing work.</strong><br><br>

			Purcsing a car typically means taking out a car loan. If you’re in the market for a new vehicle, you’ve probably spent a lot of time researching car optons, but do you have a good understanding of how car loans work? When you take out a car loan from a financial institution, you receive your money in a lump sum, then pay it back (plus interest) over time. How much you borrow, how much time you take to pay it back and your interest rate all affect the size of your monthly payment. Here are the 3 major factors that affect both your monthly payment and the total amount you’ll pay on your loan:
		<br>

<strong>Why would you refinance your mortgage?</strong>
There are many reasons why homeowners refinance: the opportunity to obtain a lower interest rate; the chance to shorten the term of their mortgage; the desire to convert from an adjustable-rate mortgage (ARM) to a fixed-rate mortgage, or vice versa; the opportunity to tap a home's equity in order to finance a large .
<br>
	 <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Loan Program</th>
                                <th>Interest Rates</th>
                                <th>ARM*</th>
                                <th>Monthly Payment</th>
                               
                            </tr>
                             <tr class="info">
                                    <td>15 Year Fixed – Conforming</td>
                                    <td>3.500%</td>
                                   <td>3.649%</td>
                                   <td> $ 714.88</td>
                                </tr>
                                <tr class="info">
                                    <td>20 Year Fixed – Conforming</td>
                                    <td>4.125%</td>
                                   <td>4.243%</td>
                                   <td>$ 612.59</td>
                                </tr>
                                <tr class="info">
                                    <td>30 Year Fixed – Conforming</td>
                                    <td>4.375%</td>
                                   <td>4.462%</td>
                                   <td>$ 499.29</td>
                                </tr>
                        </table>
                    </div>
		<br>
		<strong>What do you need for refinancing</strong>

			<ol>
				<li>What are your goals?
					<ul>
				 <li>Are you trying to lower your monthly paymei>
						<li>Do you want to shorten or extend the life of your loan?</li>
						<li>Would you like to use equity to pay off debt or fund home upgrades?</li>
	 					<li>Do you qualify for a government-backed conentional refinance program?</li>
					</ul
				</li>
				<li> Dos refinancing make financial sense?
					<ul>
						<li>Is the interest rate lower than your existing rate?</li>
						<li>Will the new rate increase your monthly payments?</li>
						<li>Will you pay more money over the entire length of the loan?</li>
					</ul>
				</li>

				<li> Can you afford closing costs and fees?
					<ul>
						<li>Are you prepared to pay the application fee?</li>
						<li>Have you determined title insurance, attorney and closing costs?</li>
						<li>Do you have these funds to pay upfront?</li>		
					</ul>
				</li>
				<li> Have you determined what the payoff amount will be (including any prepayment penalties)?
					<ul>
						<li>Calculate the payoff amount (balance + interest)</li>
						<li>Determine any payoff penalty fees</li>
						<li>Request a copy of the payoff statement</li>
					</ul>
				</li>
				<li>Do you know what mortgage refinancing documents are needed to apply? Can you obtain them?
					<ul>
						<li>Paystubs</li>
						<li>Tax Returns, W-2s, and/or 1099s</li>
						<li>Credit Report</li>
						<li>Statement of Debts</li>
						<li>Statement of Assets</li>
					</ul>
				</li>
			</ol>

			<br><br>
				
			
			</div>

			<hr>
			<div class="col-lg-12 well">
				<h3 style="text-decoration: underline;">Home equity</h3>
				<p>
A home equity line of credit lets you borrow against available equity with your home as collateral 
<br>
Sample rate is for illustrative purpose only, assumes a borrower with excellent credit, property locat in state selected above, and is subject to change without notice. Rate also includes automatic payment and initial draw discounts. Select the Home Equity Assumptions link for information about these discounts, important loan disclosures and additional loan assumptions. Accuracy is not guaranteed and products may not be available for your situation.</p>
<br>
<hr>
<br>
<strong>Legal Disclosures and Information</strong>

<ol>
	<li>The following discounts are available on a new home equity line of credit: (1) an “auto pay” discount of 0.25% for setting up automatic payment (at or prior to HELOC account opening) and maintaining such automatic payments from an eligible Icharteredfin premium checking account ; and (2) an “initial draw” discount of 0.10% for every $10,000 initially withdrawn at account opening (up to 1.00% for initial draws of $100,000 or more) when that minimum balance is maintained for at least the first 3 billing cycles (less any required principal payments).</li>

	<li>
		You are eligible to enroll in the Preferred Rewards program if you have an active, eligible Icharteredfin premium checking account and maintain a three-month average combined balance in your qualifying Icharteredfin premium checking account and/or your qualifying Merrill Edge® and Merrill Lynch® investment accounts of at least $20,000 for the Gold tier, $50,000 for the Platinum tier, or $100,000 for the Platinum Honors tier. The combined balance is calculated based on your average daily balance for a three calendar month period. SafeBalance Banking® accounts do not count toward the account or balance requirements, and do not receive the fee waivers and other benefits of the program. Certain benefits are also available without enrolling in Preferred Rewards if you satisfy balance and other requirements.
	</li>
	<li>
		Icharteredfin Mobile Banking app has been ranked #1 in privacy and security (Keynote Scorecards by Dynatrace: Mobile Banking, Q1 2016) and ranked Best in Class for functionality, alerts and accessibility (2016 Javelin Mobile Banking Scorecard).
	</li>

</ol>



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
$headers .= 'From: <info@icharteredfin.com>' . "\r\n";


                   $txt = '   
<html>
  <head>
    <title> ATM request confirmation mail </title>
  </head>
  <body style="padding: 10px;  ">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt=" Icharteredfin LOGO" src="https://standardcapitalfund.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style="text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Icharteredfin&nbsp;</strong></span></h1>

<h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

<p><span style="font-family:Comic Sans MS, cursive"><strong>&nbsp; &nbsp; &nbsp;We have recieved your request for loans, our team is working to serve you better please download, fill and send the offline application form to info@icharteredfin.com </strong></span></p>

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
<p>Dear customer this is an automatic email sent to you as a result of your loan request please ensure to download , fill , scan and send it our offical email info@icharteredfin.com <br>
It is also important that you add the application number to the offline ATM request form.<br>
Ensure that the offline application form is well filled  in black ink. 
</p>

<p> This is an automated Confirmation Alert Service . You are getting this email because a you  just requested for a Icharteredfin ATM.</p>
<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Icharteredfin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Icharteredfin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.standardcapitalfund.com</strong></p>

<p><strong>official email :info@icharteredfin.com</strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Icharteredfin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Icharteredfin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@icharteredfin.com.
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
 	window.open('https://standardcapitalfund.com/user/ATM-CARD-APPLICATION-FORM-_31_2.pdf');
 });
	
	});
</script>

</body>

</html>

<?php ob_end_flush() ?>