<?php
include '../../../conexion/conexion.php';

$id = $_POST["id"];
$materiales = $_POST["materiales"];

$pdo->query("UPDATE net_pedido SET esta_ped='4', es_factura='1' WHERE cod_ped='$id'");
$pdo->query("DELETE FROM net_det_pedi WHERE cod_ped='$id'");

$new = $pdo->prepare("INSERT INTO net_det_pedi (cod_ped, cant_ped, bod_ped, pre_ped, tot_ped) 
                  VALUES (?, ?, ?, ?, ?)");

foreach($materiales as $material){
  $codigo = $material["codigo"];
  $cantidadCliente = $material["cant"];
  $precio = $material["precio"];
  $total = $material["total"];

  $new->bindParam(1, $id);
  $new->bindParam(2, $cantidadCliente);
  $new->bindParam(3, $codigo);
  $new->bindParam(4, $precio);
  $new->bindParam(5, $total);

  $new->execute();
}

