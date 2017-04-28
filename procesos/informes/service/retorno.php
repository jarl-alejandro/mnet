<?php
include '../../../conexion/conexion.php';

$materiales = $_POST["materiales"];


foreach ($materiales as $key) {
  if ($key["devolucion"] == "true") {
    $codigo = $key["codigo"];
    $cant = $key["cant"];

    $query = $pdo->query("SELECT * FROM net_bodega WHERE cod_bode='$codigo'");
    $row = $query->fetch();
    $cant_bod = $row["cant_bode"];
    $cant_new = $cant + $cant_bod;
    $pdo->query("UPDATE net_bodega SET cant_bode='$cant_new' WHERE cod_bode='$codigo'");
  }
}