<?php
include_once ("../functions/database/conexao.php");
include_once ("../functions/admin/logger.php");
$email = $mysqli->real_escape_string($_GET['email']);
$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=? AND verificacao='0'");
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$count = mysqli_num_rows($result);

if ($count == 1){
    $stmt = $mysqli->prepare("UPDATE usuarios SET verificacao='1' WHERE email=? AND verificacao='0'");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $mysqli->close();
    header('Location: ../../index.php');
    $logConfirmationSuccess = "User ".$email." has been confirmed successfully";
    logger($logConfirmationSuccess);
}else{
    header('Location: ../../error/error404.php');
    $logConfirmationError = "User ".$email." couldn't be confirmed";
    logger($logConfirmationError);
}
?>
