<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_tipo WHERE cod_tip='$id'");
$get = $query->fetch();

print json_encode($get);
