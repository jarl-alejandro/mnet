<?php
include '../../../conexion/conexion.php';

$id = $_POST["id"];
$tecnico = $_POST["tecnico"];

$pdo->query("UPDATE net_pedido SET esta_ped='1', tecn_ped='$tecnico' WHERE cod_ped='$id'");
