<?php
session_start();
require('../script.php');
    $classObj = new ok;
    $classObj->dbcon();
    $classObj->trans_status();
?>