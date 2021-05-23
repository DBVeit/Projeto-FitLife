<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');//Usar apenas durante desenvolvimento

session_start();

$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PASS = "180317";
$DB_SQUEMA = "project_fit-life";

$connect = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB_SQUEMA);

if ($connect->connect_error) {
    die("Conexão com banco de dados falhou: " . $connect->connect_error);
    $connect->close();
}else{
    $success = "Conexão bem-sucedida";
    return $success;
    $connect->close();
}
?>