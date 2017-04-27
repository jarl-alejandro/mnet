<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_bodega WHERE cod_bode='$id'");
$get = $query->fetch();

print json_encode($get);
