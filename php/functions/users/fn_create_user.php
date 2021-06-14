<?php
include_once ("../database/conexao.php");

if (isset($_POST['cadastrar'])){
    $nome = $mysqli->real_escape_string($_POST['nome_completo']);
    $newEmail = $mysqli->real_escape_string($_POST['newEmail']);
    $newSenha = $mysqli->real_escape_string(md5($_POST['newSenha']));
    $confSenha = $mysqli->real_escape_string(md5($_POST['confSenha']));

    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param("s", $email);
    $email = $newEmail;
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $results = mysqli_num_rows($result);
    if ($results > 0){
        echo "emailExiste";
    }else{
        $statement = $mysqli->prepare("INSERT INTO usuarios (nome_completo, email, senha) VALUES (?, ?, ?)");
        $statement->bind_param("sss", $nome_completo, $email, $senha);
        $nome_completo = $nome;
        $email = $newEmail;
        $senha = $newSenha;
        $statement->execute();
        echo "emailCadastrado";
        $statement->close();
    }
    $stmt->close();
    $mysqli->close();
    exit();
}
?>
