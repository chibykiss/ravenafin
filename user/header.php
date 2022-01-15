<?php
$classObj->check_freeze();
?>
<?php $classObj->trasord(); ?>
	<?php $classObj->diffbank(); ?>
 <?php $classObj->witho(); ?>

<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="../image/logo.png" alt=""></a>
					
                            <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
					<ul id="responsive">
					<li><a href="index.php">Home</a></li>
					
					<li><a href="dashboard-messages.php">Messages</a></li>
					
					<li><a href="profile.php">Profile</a></li>	
				
					<li><a href="withdraw.php">Withdraw</a></li>
					
					<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim">Transfer</a></li>
					<li><a href="transaction.php"> Transactions </a></li>
                    <li><a href="cards-application.php">Atms</a></li>
    
					<?php $classObj->mann(); ?>
					<!-- mann first link -->
					<li><a href="logout.php">log out</a></li>
					
					<li ></li>
					<div id="google_translate_element" style="background: black;"></div>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="../upload/<?php $classObj->pullproim(); ?>" alt=""></span>My Account
						</div>

						<ul>
							<li><a href="index.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.php"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="profile.php">
				            <i class="sl sl-icon-user"></i>Profile</a></li>
							<li><a href="cards-application.php">
								<i class="sl sl-icon-credit-card"></i> Atms</a></li>
							<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-logout"></i>Transfer</a></li>

							<li><a href="withdraw.php"><i class="sl sl-icon-map"></i> Withdraw</a></li>
							<li><a href="transaction.php"><i class="sl sl-icon-book-open"></i> Transactions</a></li>
							<?php $classObj->mann1(); ?> 
							<!-- mann1 link 2  -->
							 <li><a href="logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>
					<a href="#" style="color: #2a2a2a; border-color: #2a2a2a; margin-top: 20px;" class="button border nan with-icon"> 
				<?php echo $classObj->genbal() ?>
				$<?php echo $classObj->genbal2() ?>		
					</a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">

		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="active"><a href="index.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="dashboard-messages.php"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages"><?php $classObj->count();  ?></span></a></li>
				
				<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Transfer </a></li>
				 
				<li><a href="transaction.php"><i class="sl sl-icon-book-open"></i> Transactions </a></li> 
				<li><a href="cards-application.php"><i class="sl sl-icon-credit-card"></i> Atms </a></li>
				

				<li><a href="withdraw.php"><i class="sl sl-icon-map"></i> Withdraw </a></li>
				
				<?php $classObj->mann2(); ?>
				<!-- mann2 link 3 -->

				<li><a href="profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>		
		</div>
	</div>

