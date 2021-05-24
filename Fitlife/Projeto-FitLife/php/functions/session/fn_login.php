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

$result = mysqli_stmt_bind_result($stmt);
$user_data = $result->fetch_assoc();
if ($result == 1){
    echo $user_data['usuario']." logado";
}else{
    echo "Não foi possivel logar";

}

$stmt->close();
$connect->close();
