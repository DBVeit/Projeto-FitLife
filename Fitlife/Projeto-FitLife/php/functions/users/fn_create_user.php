<?php
include_once("../database/conexao.php");
error_reporting(E_ALL);
ini_set('display_errors', 'On');//Usar apenas durante desenvolvimento

if (isset($_POST['cadastrar'])){
    $nome_completo = $connect->real_escape_string($_POST['nome_completo']);
    $newEmail = $connect->real_escape_string($_POST['newEmail']);
    $newSenha = $connect->real_escape_string(md5($_POST['newSenha']));
    $confSenha = $connect->real_escape_string(md5($_POST['confSenha']));

    $mysqli->query("INSERT INTO usuarios (nome_completo, email, senha_usuario) VALUES ('$nome_completo', '$newEmail', '$newSenha')");
    header("Location: index.php");
    $mysqli->close();
    exit();
}
