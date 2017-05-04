<?php
include "../../conexion/conexion.php";

date_default_timezone_set('America/Guayaquil');

$query_params = $pdo->query("SELECT * FROM net_params WHERE id_param=1");
$params = $query_params->fetch();

$mes = $params["fact_param"];
$mesHoy = date("d");
$fecha = date("Y-m-d");
$estado = "debe";

if ($mes == $mesHoy) {
  $contratos = $pdo->query("SELECT * FROM vista_internet");

  $existe = $pdo->query("SELECT * FROM pag_inter WHERE fec_cont='$fecha'");

  if($existe->rowCount() == 0) {
    while ($row = $contratos->fetch()) {
      $codigo = $row["cod_int"];
      $pago = $row["pri_pla"];
      
      $pagos = $pdo->prepare("INSERT INTO pag_inter (cod_cont, fec_cont, pag_cont, est_cont) 
                            VALUES (?, ?, ?, ?)");

      $pagos->bindParam(1, $codigo);
      $pagos->bindParam(2, $fecha);
      $pagos->bindParam(3, $pago);
      $pagos->bindParam(4, $estado);
      $pagos->execute();
    }
  }

}