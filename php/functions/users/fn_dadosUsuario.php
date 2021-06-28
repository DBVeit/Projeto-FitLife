<?php
session_start();
include_once ("../database/conexao.php");
$_GET['email'] = $_SESSION['email'];
$email = $_GET['email'];
$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=?");
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

$usuario = $result->fetch_assoc();

echo "<tr>
        <td align='right'>Nome: </td>
        <td><input type='text' class='nomeUsuario form-control' name='nome_completo' value='".$usuario['nome_completo']."'/></td>
        </tr>
        <tr>
            <td align='right'>Senha: </td>
            <td><input type='password' required name='senha' class='senhaUsuario form-control'/></td>
          </tr>
          <tr>
            <td align='right'>Confirmar Senha: </td>
            <td><input type='password' required name='confirmar_senha' class='confirmaSenha form-control'/></td>
          </tr>
          ";
