<?php
session_start();

include '../conexion/conexion.php';

function setCode($letra=NULL, $digitos=NULL, $tabla=NULL, $fila){
  global $pdo;

  $query = $pdo->query("SELECT * FROM net_params");
  $row = $query->fetch();
  $cant = $row[$fila];
  $str_ceros = "";

  $nletra = strlen($letra);
  $ncant = strlen($cant);

  $ceros = $digitos - ($nletra + $ncant);
  $i = 1;

  while($i <= $ceros){
    $str_ceros .= "0";
    $i += 1;
  }

  $cant++;
  $codigo = $letra.$str_ceros.$cant;
  return $codigo;
}

function updateCode($campo) {
  global $pdo;

  $query1 = $pdo->query("SELECT * FROM net_params WHERE id_param=1");
  $row1 = $query1->fetch();
  $canta = $row1[$campo];
  $canta = $canta + 1;

  $pdo->query("UPDATE net_params SET $campo='$canta' WHERE id_param=1");
}

if(isset($_POST["servicio"])){

  $codigo = setCode('PE-', 8, 'net_pedido', 'cont_pedido');
  $cliente = $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"];
  $servicio = $_POST["servicio"];
  $fecha = $_POST["fecha"];
  $fechaVisita = $_POST["fechaVisita"];
  $horaVisita = $_POST["horaVisita"];
  $estado = 0;

  $new = $pdo->prepare("INSERT INTO net_pedido (cod_ped, serv_ped, clie_ped, fech_ped, fevis_ped, hovis_ped, esta_ped) VALUES (?, ?, ?, ?, ?, ?, ?)");

  $new->bindParam(1, $codigo);
  $new->bindParam(2, $servicio);
  $new->bindParam(3, $cliente);
  $new->bindParam(4, $fecha);
  $new->bindParam(5, $fechaVisita);
  $new->bindParam(6, $horaVisita);
  $new->bindParam(7, $estado);

  $new->execute();

  if($new) {
    updateCode("cont_pedido");
    echo 201;
  }

}
