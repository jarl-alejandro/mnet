<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_internet WHERE cod_int='$id'");
$get = $query->fetch();

print json_encode($get);
