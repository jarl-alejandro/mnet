<?php
include '../../../conexion/conexion.php';

$id = $_GET["id"];
$materiales = array();

$pedido_query = $pdo->query("SELECT * FROM vista_trabajo WHERE cod_ped='$id'");
$pedido = $pedido_query->fetch();

$materiales_query = $pdo->query("SELECT * FROM vista_det_pedido WHERE cod_ped='$id' ");

while($row = $materiales_query->fetch()){
  $codigo = $row['bod_ped'];
  $nombre = $row['nom_bode'];
  $cant = $row['cant_ped'];
  $precio = $row['pre_ped'];
  $total = $row['tot_ped'];

  $materiales[] = array('codigo'=>$codigo, 'nombre'=>$nombre, 'cant'=>$cant, 'cantMax'=>$cant, 
                          'precio'=>$precio, 'total'=>$total);
}

$json = array('pedido'=>$pedido, 'materiales'=>$materiales);

print json_encode($json);