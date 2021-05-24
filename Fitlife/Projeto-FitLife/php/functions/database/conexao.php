<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');//Usar apenas durante desenvolvimento

session_start();

$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_SQUEMA = "project_fit-life";

$mysqli = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB_SQUEMA);

?>
