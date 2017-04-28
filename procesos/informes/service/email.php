<?php 
include '../../../conexion/conexion.php';

$id = $_POST["id"];
$cliente = $_POST["cliente"];
$url = $_POST["url"];

$query = $pdo->query("SELECT * FROM net_cliente WHERE ced_cli='$id'");
$get = $query->fetch();

$mensaje = "Ingrese para que pueda ver la cotizacion $url/reporte/individual.php?id=${id}";

$titulo = "Mundonet";
$flag = false;

$email = $get["emi_cli"];
$bool = mail($email, $titulo, $mensaje);

if ($bool) {
  echo 2;
} else {
  echo 5;
}