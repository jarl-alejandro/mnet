<?php
include '../../../conexion/conexion.php';
$id = $_POST["id"];


$pdo->query("DELETE FROM trabajo_detalle WHERE cod_trab='$id'");
$pdo->query("DELETE FROM net_trabajo WHERE cod_trab='$id'");
$elim = $pdo->query("UPDATE net_pedido SET esta_ped='3' WHERE cod_ped='$id'");

if ($elim) {
  echo 2;
}