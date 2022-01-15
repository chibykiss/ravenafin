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
<html>
<head>
	<title> Icharteredfin Bank admin transaction page</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Karla|Lobster|Pacifico" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="../admin/dashboard/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="table-reponsive">
		  		<table id="table_id" class="table table-hover display">
				    <thead>
				      <tr>
				      	<th> SN </th>
				      	<th> Bank </th>
				      	<th> Reciever </th>
				        <th> Amount</th>
				        <th> Comment </th>
				        <th style="font-size: x-small;font-weight: bolder;"> <span style="font-size: 9px; font-weight: bold;"> TYPE OF BANK IDENTIFIER CODES</span> SWIFT/IBAN/BIC </th>
				        <th style="font-size: x-small;font-weight: bolder;">  VALUE OF  BANK IDENTIFIER CODES SWIFT/IBAN/BIC </th>
				        <th> Status</th>
				        <th> View </th>
				        <th> Date </th>
				      </tr>
				    </thead>
				    <tbody>
				      <?php $classObj->gettt(); ?>
				    </tbody>
			    </table>
	</div>
</div>


<script src="../admin/dashboard/js/jquery-2.1.4.min.js"></script>
<script src="../admin/dashboard/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#table_id').DataTable();
	});
</script>
</body>
</html>

<?php 
ob_end_flush();
?>