<?php
include_once ("../database/conexao.php");

$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);

if (empty($email) || empty($senha)){
    header("Location: ../../../index.php");
    exit();
}

$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=? AND senha=?");
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
    header("Location: ../../../home.php");
}else{
    $_SESSION['nao_autenticado'] = true;

}

$stmt->close();
$mysqli->close();
?>