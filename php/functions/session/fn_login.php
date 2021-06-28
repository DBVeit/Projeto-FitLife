<?php
session_start();
include_once ("../database/conexao.php");
include_once ("../admin/logger.php");

$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);

if (empty($email) || empty($senha)){
    header("Location: ../../../index.php");
    $logEmpty = "Login submit with empty values";
    logger($logEmpty);
    exit();
}

$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=? AND senha=? AND verificacao='1' LIMIT 1");
$stmt->bind_param("ss", $email, $senha);
$email = $email;
$senha = md5($senha);
$retorno = $stmt->fetch();
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$results = mysqli_num_rows($result);

if ($results == 1) {
    $_SESSION['email'] = $email;
    $logSuccess = "User ".$email." has logged in with success";
    logger($logSuccess);
    $retorno = array('codigo' => 1, 'msg' => 'Sucesso ao logar!');
    echo json_encode($retorno);
} else {
    $_SESSION['nao_autenticado'] = true;
    $logError = "Incorrect/Unauthorized login attempt. User: ".$email.", Password: ".$senha;
    logger($logError);
    $retorno = array('codigo' => 0, 'msg' => 'Dados incorretos!');
    echo json_encode($retorno);
}

$stmt->close();
$mysqli->close();
?>