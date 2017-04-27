<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_cliente WHERE ced_cli='$id'");
$get = $query->fetch();

print json_encode($get);
