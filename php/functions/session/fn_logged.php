<?php
session_start();
include_once ('php/functions/admin/logger.php');
$email = $_SESSION['email'];
if (!isset($_SESSION['email'])){
    $logSessionNotSet = "Attempt to access on home.php with no session";
    logger($logSessionNotSet);
    header("Location: error/error401.php");
}else{
    $logSessionSet = "Access granted for user: ".$email." Session has been started.";
    logger($logSessionSet);
}
?>