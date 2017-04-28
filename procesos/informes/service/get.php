<?php
include '../../../conexion/conexion.php';

$id = $_GET["id"];
$empledos = array();
$materiales = array();

$pedido_query = $pdo->query("SELECT * FROM net_pedido WHERE cod_ped='$id'");
$pedido = $pedido_query->fetch();

$tecnico_query = $pdo->query("SELECT * FROM net_trabajo WHERE cod_trab='$id'");
$tecnico = $tecnico_query->fetch();


$empleados_query = $pdo->query("SELECT * FROM vista_trabajores WHERE cod_trab='$id'");

$materiales_query = $pdo->query("SELECT * FROM vista_detalle_pedido WHERE cod_ped='$id'");

while($row = $materiales_query->fetch()){
  $codigo = $row['cod_bode'];
  $nombre = $row['nom_bode'];
  $cant = $row['cant_ped'];
  $precio = $row['pre_ped'];
  $total = $row['tot_ped'];

  $materiales[] = array('codigo'=>$codigo, 'nombre'=>$nombre, 'cant'=>$cant, 'precio'=>$precio,
                        'total'=>$total);
}


while($row = $empleados_query->fetch()){
  $id = $row['id_empl'];
  $nombre = $row['empleado'];
  $empledos[] = array('id'=>$id, 'nombre'=>$nombre);
}

$json = array('pedido'=>$pedido, 'empleados'=>$empledos, 'tecnico'=>$tecnico, 
  'materiales'=>$materiales);

print json_encode($json);