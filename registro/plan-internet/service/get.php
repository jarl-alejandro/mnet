<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_plan WHERE cod_pla='$id'");
$get = $query->fetch();

print json_encode($get);
