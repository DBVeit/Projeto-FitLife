<?php
include_once ("../../database/conexao.php");
include_once ("../../admin/logger.php");
$id_desafio = $mysqli->real_escape_string($_POST['id_desafio']);
$usuarioEmail = $mysqli->real_escape_string($_POST['usuarioEmail']);

$select = $mysqli->query("SELECT * FROM usuarios WHERE email='$usuarioEmail'");

$row = $select->fetch_assoc();
if ($row['id_desafio'] != $id_desafio) {
    $update = $mysqli->query("UPDATE usuarios SET id_desafio='$id_desafio', status_desafio='0', inicio_desafio=CURRENT_TIMESTAMP() WHERE email='$usuarioEmail'");
    if ($update) {
        $logUserNewActivity = "User ".$usuarioEmail." added new activity";
        logger($logUserNewActivity);
        echo json_encode(array("statusCode" => 200));
    } else {
        $logUserUpdateError = "An error has occured on update execution for user ".$usuarioEmail;
        logger($logUserUpdateError);
        echo json_encode(array("statusCode" => 201));
    }
}else{
    $logUserIdDesafioError = "User ".$usuarioEmail." tried to add an already registered activity";
    logger($logUserIdDesafioError);
    echo json_encode(array("statusCode" => 202));
}
$mysqli->close();
?>