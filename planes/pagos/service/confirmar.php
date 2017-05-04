<?php
include "../../../conexion/conexion.php";

date_default_timezone_set('America/Guayaquil');

$id = $_POST["id"];

$pagos = $pdo->query("UPDATE pag_inter SET est_cont='pagado' WHERE id_cont='$id'");

if ($pagos) {
  echo 2;
}