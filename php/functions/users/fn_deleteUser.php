<?php
session_start();
include_once ("../database/conexao.php");
if (isset($_POST['excluirPerfil'])) {
    $_GET['email'] = $_SESSION['email'];
    $email = $_GET['email'];
    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    $usuario = mysqli_num_rows($result);

    if ($result == 1) {
        $delete = $mysqli->query("DELETE FROM usuarios WHERE email='$email'");
        header('Location: ../../../index.php');
    }
}
?>