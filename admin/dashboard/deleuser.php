<?php
ob_start();
?>
<?php
if (!isset($_SESSION["aname"])) {
  header('location:../');
}
?>
<?php
  require ('../../script.php');
  $classObj = new ok;
  $classObj->dbcon();
  $classObj->deleuser();
?>


<?php
ob_end_flush();
?>