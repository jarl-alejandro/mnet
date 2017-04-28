<?php
include '../../../conexion/conexion.php';

$id = $_POST["id"];
$informe = $_POST["informe"];
$calificar = $_POST["calificar"];

$pdo->query("UPDATE net_pedido SET esta_ped='5' WHERE cod_ped='$id'");

$trab = $pdo->query("UPDATE net_trabajo SET inf_trab='$informe', cal_trab='$calificar' 
              WHERE cod_trab='$id'");

if ($trab) {
  echo 2;
}