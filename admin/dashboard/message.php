<?php ob_start() ?>

<?php
require('../../script.php');
    $classObj = new ok;
    $classObj->dbcon();
    session_start();
?>
<?php
if (!isset($_SESSION["aname"])) {
  header('location:../');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> bank admin message</title>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Karla|Lobster|Pacifico" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/font-awesome.css">
	<style type="text/css">
		h1{
			margin:0px;
		}
	 .page-header{
	 	font-family: font-family: 'Indie Flower', cursive;
	 	background-color: #82837E;
	 	margin: 0px;
	 	padding: 0px;
	 	color: #8C6673;
	 }

	 small{
	font-family: 'Lobster', cursive; 	 	
	 }
	 body{
	 	font-family: 'Karla', sans-serif;
	 	color: #fbf5f7;
	 	margin: 0px;
	 }
	 nav{
	 	color: #fbf5f7;
	 }
	 .lol{
		 color: #8C6673;  	   
	 }
	 .liker{
	 	color: #fbf5f7;
	 	font-size: 40px;
	 }
	 .hix{
	 	background-color: #048091;
	 	border-radius: 0px; margin: 0px;
	 	padding: 0px; border: 0px; 
	 	color: #fbf5f7;
	 }
	 .vom{
	 	color: lightcoral; 
	 	font-size: 6em;
	 }
	 .quill{
	 border:2px blue solid;	
	 border-radius: 10px;	
	 
	 }
	 .quill:hover{

	 border:2px #5C4F79 dotted;
	 border-radius: 10px;
	 background-color: #60B99A; 		
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
<!-- 

font-family: 'Pacifico', cursive; -->
<h1 class="page-header navbar-fixed-top" style="margin-bottom:0px; border: 0px; color: #fbf5f7;">WELCOME  <small style="color: #fbf5f7; ">admin</small></h1>
<p style="height: 37px;background-color: #048091; margin: 0px;"></p>
<!-- navbar -->


<!-- navbar -->

<nav class="navbar navbar-default" style="border: 0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="border: 1px; border-color: : #82837E;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="font-size:20px;">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="color:  #fbf5f7;">
         

        <li style="color: #fbf5f7; font-size:20px;"><a href="users.php">Customers</a></li>

       
        <li style="color: #fbf5f7; font-size:20px;"><a href="message.php">Messages(<?php $classObj->selnumad(); ?>)</a></li>



       

        <li class="dropdown" style="color: #fbf5f7; font-size:20px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="posts.php">Blog posts</a></li>
          	<li><a href="addpost.php">Add post </a></li>
          </ul>
        </li>


               

        <li class="dropdown" style="color: #fbf5f7; font-size:20px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="resetpass.php">Change password</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </li>


          
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- end navbar -->


<!-- END OF PAGE NAVIGATION AND BEGINNING -->

<p style="30px;"></p>

<div class="container">
<p style="height: 10px;"></p>


<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding: 30px;">
			
	<?php $classObj->adminmess(); ?>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
  </div>


</div>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
