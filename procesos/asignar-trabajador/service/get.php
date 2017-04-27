<?php
include '../../../conexion/conexion.php';

$id = $_GET["id"];
$materiales = array();

$pedido_query = $pdo->query("SELECT * FROM net_pedido WHERE cod_ped='$id'");
$pedido = $pedido_query->fetch();

$servicio = $pedido["serv_ped"];

$capsula_query = $pdo->query("SELECT * FROM net_capsula WHERE serv_capsu='$servicio'");
$capsula = $capsula_query->fetch();
$codigo = $capsula["cod_capsu"];

$materiales_query = $pdo->query("SELECT * FROM vista_capsu_det WHERE cod_capsu='$codigo' 
                                                                AND nom_cate!='Herramientas'");
while($row = $materiales_query->fetch()){
  $codigo = $row['cod_bode'];
  $nombre = $row['nom_bode'];
  $cant = $row['cant_bode'];
  $precio = $row['vent1_bode'];
  $materiales[] = array('codigo'=>$codigo, 'nombre'=>$nombre, 'cant'=>$cant, 'precio'=>$precio);
}

$json = array('pedido'=>$pedido, 'materiales'=>$materiales);

print json_encode($json);