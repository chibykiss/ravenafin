<?php ob_start() ?>

<?php
require('../../script.php');
    $classObj = new ok;
    $classObj->dbcon();
    $classObj->ctac();
    session_start();
?>
<?php
if (!isset($_SESSION["aname"])) {
  header('location:../');
}
?>

<?php ob_end_flush(); ?>