<?php
$emailLogado = $_SESSION['email'];
$result = $mysqli->query("SELECT * FROM usuarios WHERE email='$emailLogado'");
$row = $result->fetch_assoc();
$nome = $row['nome_completo'];
?>
