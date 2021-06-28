<?php
session_start();
include_once ("../database/conexao.php");
$_GET['email'] = $_SESSION['email'];
$email = $_GET['email'];
$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=?");
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$selectDesafio = $mysqli->prepare("SELECT * FROM desafios WHERE id_desafio=?");
$selectDesafio->bind_param('s', $row['id_desafio']);
$selectDesafio->execute();
$resultado = $selectDesafio->get_result();
$lines = $resultado->fetch_assoc();

if ($lines['nivel'] == 1){
   $nivel = 'Inicial';
}elseif ($lines['nivel'] == 2){
    $nivel = 'Intermediário';
}elseif ($lines['nivel'] == 3){
    $nivel = 'Hardcore';
}

if ($row['status_desafio'] == 0){
    $status_desafio = 'Em progresso';
}elseif ($row['status_desafio'] == 1){
    $status_desafio = 'Concluído';
}

echo "
    <div id='leftProfile'>
        <table class='table'>
            <tr>
                <td>Nome: ".$row['nome_completo']."</td>
            </tr>
            <tr>
                <td>Email: ".$row['email']."</td>
            </tr>
            <tr>
                <td>Pontuação: ".$row['pontuacao']."</td>
            </tr>
            <tr>
                <td>
                    <button id='bEditarPerfil' data-toggle='modal' data-target='#modal_profile' class='btn btn-primary'>Editar Perfil</button>
                </td>
            </tr>
        </table>
    </div>
    <div id='rightProfile'>
        <table class='table'>
            <tr>
                <td>Desafio atual: ".$lines['nome']."</td>
            </tr>
            <tr>
                <td>Nível: ".$nivel."</td>
            </tr>
            <tr>
                <td>Descrição: ".$lines['descricao']."</td>
            </tr>
            <tr>
                <td>Status Desafio: ".$status_desafio."</td>
            </tr>
            <tr>
                <td>Iniciado em: ".$row['inicio_desafio']."</td>
            </tr>
        </table>
    </div>";