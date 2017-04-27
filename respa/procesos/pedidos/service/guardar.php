<?php
include '../../../conexion/conexion.php';
include "../../../conexion/helpers.php";

if(isset($_POST["servicio"])){

  $codigo = setCode('PE-', 8, 'net_pedido', 'cont_pedido');
  $servicio = $_POST["servicio"];
  $cliente = $_POST["cliente"];
  $tecnico = $_POST["tecnico"];
  $fecha = $_POST["fecha"];
  $fechaVisita = $_POST["fechaVisita"];
  $horaVisita = $_POST["horaVisita"];
  $estado = 1;

  $new = $pdo->prepare("INSERT INTO net_pedido (cod_ped, serv_ped, clie_ped, tecn_ped, fech_ped, fevis_ped,   
                        hovis_ped, esta_ped) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

  $new->bindParam(1, $codigo);
  $new->bindParam(2, $servicio);
  $new->bindParam(3, $cliente);
  $new->bindParam(4, $tecnico);
  $new->bindParam(5, $fecha);
  $new->bindParam(6, $fechaVisita);
  $new->bindParam(7, $horaVisita);
  $new->bindParam(8, $estado);

  $new->execute();

  if($new) {
    updateCode("cont_pedido");
    echo 201;
  }

}
