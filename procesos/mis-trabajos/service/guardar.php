<?php
include '../../../conexion/conexion.php';

$id = $_POST["id"];
$materiales = $_POST["materiales"];

$pdo->query("UPDATE net_pedido SET esta_ped='5' WHERE cod_ped='$id'");

