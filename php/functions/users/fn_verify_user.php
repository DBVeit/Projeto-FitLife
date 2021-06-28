<?php
include_once ("../database/conexao.php");
$_POST['email'] = "expcriativa3@gmail.com";
if (isset($_POST['email'])){
    $email = $mysqli->real_escape_string($_POST['email']);
    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    //echo mysqli_num_rows($result);
    $row = $result->fetch_assoc();
    echo "Nome: ".$row['nome_completo'];
    echo "<br> Email: ".$row['email'];
    echo "<br> Senha: ".$row['senha'];
    echo "<br> Pontuacao: ".$row['pontuacao'];
    echo "<br> Desafio: ".$row['id_desafio'];
    echo "<br> Status Desafio: ".$row['status_desafio'];
    echo "<br> Iniciado em: ".$row['inicio_desafio'];
}
