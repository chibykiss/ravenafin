<?php
    ob_start();
    require('script.php');
    $classObj = new ok;
    $classObj->dbcon();
?>
<!doctype html>
<html lang="zxx">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Bnker. - Banking and Loan HTML Templates </title>
    <!-- /Required meta tags -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- /Favicon -->

    <!-- All CSS -->

    <!-- Vendor Css -->
    <link rel="stylesheet" href="css/vendors.css">
    <!-- /Vendor Css -->

    <!-- Plugin Css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Plugin Css -->

    <!-- Icons Css -->
    <link rel="stylesheet" href="css/icons.css">
    <!-- /Icons Css -->

    <!-- Style Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /Style Css -->

	<!-- cdn bootstrap -->
	

    <!-- /All CSS -->

</head>

<body>

<!-- Login -->
	<div class="login-page d-flex align-items-center vh-100">
		<div class="overlay"></div>
		<div class="login-form">
			<!-- Container -->
			<div class="container">
				<form method="post">
				<?php $classObj->ulogin(); ?>
					<div class="login-social-icon">
						<h2>Login</h2>
						<!-- <ul class="social-buttons">
							<li class="social-buttons-hover">
								<a href="http://google.com/">
									<i class="ri-google-fill"></i>
								</a>
							</li>
							<li class="social-buttons-hover">
								<a href="https://twitter.com/">
									<i class="uil uil-twitter"></i>
								</a>
							</li>
							<li class="social-buttons-hover">
								<a href="https://www.facebook.com/">
									<i class="uil uil-facebook-f"></i>
								</a>
							</li>
						</ul> -->
					</div>
					
					<div class="input-group">
						<span class="login-form-icon"><i class="uil uil-user"></i></span>
						<input type="text" class="form-control" name="username" tabindex="1" placeholder="Account No" required>
					</div>
					
					<div class="input-group">
						<span class="login-form-icon"><i class="uil uil-lock"></i></span>
						<input type="password" class="form-control" name="pass" tabindex="2" placeholder="Password" required>
					</div>
	
					<div class="input-group">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="rememberMe">
							<label class="form-check-label form-check-box" for="rememberMe">Keep me logged in</label>
						</div>
					</div>

					<div class="row justify-content-center mb-md-3">
						<div class="col-sm-6 mb-md-3 mb-sm-0">
							<button type="submit" name="ulogin" class="btn theme-btn-1">Log In</button>
						</div>
						
						<div class="col-sm-6 text-sm-end">
							<a class="" href="recover.php">Forgot Password?</a>
						</div>
					</div>

					<div class="login-footer">Don't have an account? <a href="open-account.php">Open Account</a><br>
					<a href="index.php">Back Home </a>
					</div>
					
				</form>
				
			</div>
			<!-- Container -->
		</div>
	</div>
	<!-- /login -->

    <!-- JS -->

    <!-- Vendor Js -->
    <script src="js/vendors.js"></script>
    <!-- /Vendor js -->

    <!-- Plugins Js -->
    <script src="js/plugins.js"></script>
    <!-- /Plugins Js -->

    <!-- Main JS -->
    <script src="js/main.js"></script>
    <!-- /Main JS -->

    <!-- /JS -->

</body>

</html>
<?php ob_end_flush(); ?>