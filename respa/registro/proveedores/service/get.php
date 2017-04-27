<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_proveedor WHERE cod_prove='$id'");
$get = $query->fetch();

print json_encode($get);
