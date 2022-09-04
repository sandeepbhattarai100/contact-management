<?php
include '../logger.php';
session_start();
$log=$_SESSION['username']."logged out of the system";
logger($log);
unset($_SESSION['username']);
header("location:../login/Login.php");

?>