<?php
include "../../../conexion/conexion.php";

$query = $pdo->query("SELECT * FROM net_params WHERE id_param=1");
$get = $query->fetch();

print json_encode($get);
