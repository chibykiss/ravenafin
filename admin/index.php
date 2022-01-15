<?php
ob_start();
require('../script.php');
    $classObj = new ok;
    $classObj->dbcon();
?>

<?php
session_start();
if (isset($_SESSION["aname"])) {
  header('location: dashboard');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Admin login</title>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Karla|Lobster|Pacifico" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="dashboard/css/bootstrap.min.css">
<link rel="stylesheet" href="dashboard/css/font-awesome.css">
<link rel="shortcut icon" href="dashboard/images/favicon.ico" type="image/x-icon">	
  <style type="text/css">
	body{
		font-family: 'Karla', sans-serif;
	}
	</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- font-family: 'Pacifico', cursive; -->

<p style="height: 100px;"></p>

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 well">
			<h3 class="text-center"> Bank Admin Login</h3>
		
<form method="POST">
<?php $classObj->logic1(); ?>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="user name" name="username" required="required/">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="customer password" name="pass" required="required/">
  </div>
  <button type="submit" name="logic" class="btn btn-info">Submit</button>

</form>
		</div>
	</div>
</div>

<p style="height: 100px;"></p>
<script src="dashboard/js/jquery-2.1.4.min.js"></script>
<script src="dashboard/js/bootstrap.min.js"></script>
</body>
</html>

<?
ob_end_flush();
?>