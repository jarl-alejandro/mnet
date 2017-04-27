<?php
include '../../../conexion/conexion.php';

$id = $_GET["id"];
$empledos = array();

$pedido_query = $pdo->query("SELECT * FROM net_pedido WHERE cod_ped='$id'");
$pedido = $pedido_query->fetch();

$tecnico_query = $pdo->query("SELECT * FROM net_trabajo WHERE cod_trab='$id'");
$tecnico = $tecnico_query->fetch();

$materiales_query = $pdo->query("SELECT * FROM vista_trabajores WHERE cod_trab='$id'");

while($row = $materiales_query->fetch()){
  $id = $row['id_empl'];
  $nombre = $row['empleado'];
  $empledos[] = array('id'=>$id, 'nombre'=>$nombre);
}

$json = array('pedido'=>$pedido, 'empleados'=>$empledos, 'tecnico'=>$tecnico);

print json_encode($json);