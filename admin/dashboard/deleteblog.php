<?php ob_start() ?>

<?php
session_start();
require('../../script.php');
    $classObj = new ok;
    $classObj->dbcon();
    $classObj->delepost();
?>
<?php
if (!isset($_SESSION["aname"])) {
  header('location:../');
}
?>

<?
ob_end_flush();
?>