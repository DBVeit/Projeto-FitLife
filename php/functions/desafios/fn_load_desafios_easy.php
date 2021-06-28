<?php
include_once("../database/conexao.php");

$select = $mysqli->query("SELECT * FROM desafios WHERE nivel='1'");

while($row = $select->fetch_assoc()){
    echo "<td><button>".$row['nome']."</button></td>";
}
?>