<?php
include_once ("../database/conexao.php");
if (isset($_POST['email'])){
    $email = $mysqli->real_escape_string($_POST['email']);
    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    echo mysqli_num_rows($result);
}
