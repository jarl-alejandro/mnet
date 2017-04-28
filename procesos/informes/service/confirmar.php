<?php
include '../../../conexion/conexion.php';

$id = $_POST["id"];

$confirmacion = $pdo->query("UPDATE net_pedido SET esta_ped='3' WHERE cod_ped='$id'");

if($confirmacion){
  echo 2;
}