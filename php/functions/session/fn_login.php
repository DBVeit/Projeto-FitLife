<?php
include_once ("../database/conexao.php");

if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header("Location: ");
    exit();
}

$usuario = $connect->real_escape_string($_POST['usuario']);
$senha = $connect->real_escape_string($_POST['senha']);

$stmt = $connect->prepare("SELECT * FROM usuarios WHERE usuario=? AND senha=?");
$stmt->bind_param("ss", $username, $password);

$username = $usuario;
$password = md5($senha);
$stmt->execute();

$stmt->close();
$connect->close();
