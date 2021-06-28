<?php
$select = $mysqli->query("SELECT * FROM usuarios WHERE email='$emailLogado'");
$row = $select->fetch_assoc();

if ($row['id_desafio'] != ""){

}