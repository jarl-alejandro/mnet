<?php
include '../../../conexion/conexion.php';

$id = $_POST["id"];
$hora = $_POST["hora"];
$fecha = $_POST["fecha"];
$informe = $_POST["informe"];

$pdo->query("UPDATE net_pedido SET fevis_ped='$fecha', hovis_ped='$hora', infor_ped='$informe'
            WHERE cod_ped='$id'");
