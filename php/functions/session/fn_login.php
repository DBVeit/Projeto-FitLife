<?php
include_once ("../database/conexao.php");

$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);

if (empty($email) || empty($senha)){
    header("Location: ../../../index.php");
    exit();
}

$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=? AND senha=? AND verificacao='1'");
$stmt->bind_param("ss", $email, $senha);

$email = $email;
$senha = md5($senha);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();
$results = mysqli_num_rows($result);
if ($results == 1){
    $_SESSION['logado'] = true;
    $_SESSION['nome'] = $row['nome_completo'];
    //$retorno = array('codigo' => 1, 'msg' => 'Logado');
    //echo json_encode($retorno);
    header("Location: ../../../home.php");
    //exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    //$retorno = array('codigo' => '0', 'msg' => 'Dados de login inválidos ou usuário não cadastrado');
    //echo json_encode($retorno);
    header("Location: ../../../index.php");
    //exit();
}

$stmt->close();
$mysqli->close();
?>