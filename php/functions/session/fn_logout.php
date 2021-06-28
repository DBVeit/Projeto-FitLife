<?php
include_once ("../admin/logger.php");
session_start();
$email = $_SESSION['email'];
unset($_SESSION['email']);
$logLogout = "User ".$email." has logged out";
logger($logLogout);
header("Location: ../../../index.php");
exit();
?>