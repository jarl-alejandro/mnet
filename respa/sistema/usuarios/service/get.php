<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_usuario WHERE ced_usu='$id'");
$get = $query->fetch();

print json_encode($get);
