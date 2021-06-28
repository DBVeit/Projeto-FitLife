<?php
session_start();
include_once("../database/conexao.php");
if (isset($_POST['salvarPerfil'])) {

    $_GET['email'] = $_SESSION['email'];
    $email = $_GET['email'];
    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $nome_completo = $_POST['nome_completo'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];
        if ($senha == $confirmar_senha){
            $update = $mysqli->query("UPDATE usuarios SET nome_completo='$nome_completo', senha=md5('$senha') WHERE email='$email'");
            header('Location: ../../../home.php');
        }else{
            echo "Senhas não são idênticas!";
        }
    }
}
