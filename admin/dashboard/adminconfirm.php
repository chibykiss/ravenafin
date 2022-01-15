<?php ob_start() ?>

<?php
session_start();
require('../../script.php');
    $classObj = new ok;
    $classObj->dbcon();
    $classObj->adminconfirm();
?>
<?php
if (!isset($_SESSION["aname"])) {
  header('location:../');
}
?>

<?
ob_end_flush();
?>