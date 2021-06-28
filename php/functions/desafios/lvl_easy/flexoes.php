<?php
include_once ("../../database/conexao.php");
$id_desafio = $mysqli->real_escape_string($_POST['id_desafio']);
$usuarioEmail = $mysqli->real_escape_string($_POST['usuarioEmail']);

$select = $mysqli->query("SELECT * FROM usuarios WHERE email='$usuarioEmail'");

$row = $select->fetch_assoc();
if ($row['id_desafio'] != $id_desafio) {
    $update = $mysqli->query("UPDATE usuarios SET id_desafio='$id_desafio' WHERE email='$usuarioEmail'");
    if ($update) {
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 201));
    }
}else{
    echo json_encode(array("statusCode" => 202));
}
$mysqli->close();
?>