<?php
include_once ("../../database/conexao.php");
$id_desafio = $mysqli->real_escape_string($_POST['id_desafio']);
$usuarioEmail = $mysqli->real_escape_string($_POST['usuarioEmail']);

$update = $mysqli->query("UPDATE usuarios SET id_desafio='$id_desafio' WHERE email='$usuarioEmail'");
if ($update){
    echo json_encode(array("statusCode"=>200));
}else{
    echo json_encode(array("statusCode"=>201));
}
$mysqli->close();
?>