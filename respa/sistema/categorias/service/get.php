<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_categoria WHERE cod_cate='$id'");
$get = $query->fetch();

print json_encode($get);
