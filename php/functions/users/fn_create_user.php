<?php
include_once("../database/conexao.php");

if (isset($_POST['cadastrar'])){
    $nome_completo = $mysqli->real_escape_string($_POST['nome_completo']);
    $newEmail = $mysqli->real_escape_string($_POST['newEmail']);
    $newSenha = $mysqli->real_escape_string(md5($_POST['newSenha']));
    $confSenha = $mysqli->real_escape_string(md5($_POST['confSenha']));

    $mysqli->query("INSERT INTO usuarios (nome_completo, email, senha_usuario) VALUES ('$nome_completo', '$newEmail', '$newSenha')");
    header("Location: index.php");
    $mysqli->close();
    exit();
}
