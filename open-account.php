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
    <title> Ravennafin. - Banking and Loan HTML Templates </title>
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

    <!-- /All CSS -->

</head>

<body>

    <!-- PreLoader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!--Preloader-->

   <?php include_once 'incs/header.php'; ?>

    <!-- Breadcrumb -->
    <div class="banner-section position-relative">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col  -->
                <div class="col-md-6">
                    <div class="banner-content banner-padding">
                        <h3 class="title">OPEN ACCOUNT</h3>
                        <p>Open an Account in Ravennafin </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="images/bg/6.png" alt="img" />
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Breadcrumb -->

    <!-- Open Account -->
    <div class="open-account-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Account opening form</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Fill the form below inorder to open a bank account in Ravenna Finance</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

            <div class="open-account-form">
                <form method="post">
                <?php $classObj->register(); ?>
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fn" placeholder="Full name">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Account type</label>
                                <select name="acct_type">
                                    <option value="">Please select</option>
                                    <option value="Savings" title="Savings">Savings</option>
	<option value="Checking" title="Checking">Checking</option>
	<option value="Current" title="Current">Current</option>
	<option value="Offshore" title="Offshore">Offshore</option>
	<option value="Transit" title="Transit">Transit</option>
	<option value="Other" title="Other">Other</option></select>
                                </select>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" class="form-control" name="ln" placeholder="lastname">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gen">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Others</option>
                                </select>
                            </div>
                        </div>
                
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input  type="text" class="form-control" name="un" placeholder="Username">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" name="occupation" placeholder="Occupation">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" placeholder="Occupation">
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Monthly income</label>
                                <input type="text" class="form-control" placeholder="Monthly income">
                            </div>
                        </div> -->
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Date of birth</label>
                                <input  type="date" class="form-control" name="dob" placeholder="dd/mm/yy">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Currency</label>
                                <select name="currency">
                                <option value="">Currency</option>
								<option value="USD $" title="USD $">USD $</option>
								<option value="&pound;" title="Pound">Pound £</option>
								<option value="&euro;" title="Euro">Euro €</option>
								<option value="&yen;" title="Yen">Yen ¥</option>
								<option value="Other" title="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Mobile number</label>
                                <input type="text" class="form-control" name="full_phone" placeholder="Mobile number">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="text" class="form-control" name="em" placeholder="Email address">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                          <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pass" placeholder="********">
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Retype Password</label>
                                <input type="password" class="form-control" name="con_pass" placeholder="********">
                            </div>
                        </div> 
                        <div class="col-lg-12">
                            <h3>Address</h3>
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder="Street address">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <!-- <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Street address line 2">
                                    </div>
                                </div> -->
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="state" placeholder="State / Province">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="zip" placeholder="Postal / Zip code">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <input type="text" class="form-control" name="country" placeholder="Your Country">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-12">
                            <div class="banner-form-btn">
                                <button type="submit" name="process" class="default-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </form>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Open Account -->

    <!-- Cta -->
    <div class="cta-area">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-12">
                    <div class="get-start-box">
                        <!-- col -->
                        <div class="col-lg-8">
                            <div class="section-heading">
                                <h5 class="section__meta text-white">#get in touch</h5>
                                <h2 class="section__title">Ready to get started ?</h2>
                                <p class="section__sub">Speak to a Ravennafin specialist at (+19103023579)</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <div class="button-shared text-end">
                                <a href="contact.html" class="btn cta-btn">
                                    Request Call Back <span class="la la-caret-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Cta -->

    <?php include_once 'incs/footer.php'; ?>
   
    <!-- Go top -->
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="las la-angle-double-up"></i>
                    <i class="las la-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- /Go top -->

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