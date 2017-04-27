<?php
include "../../../conexion/conexion.php";

$iva = $_POST["iva"];
$factura = $_POST["factura"];
$caduca = $_POST["caduca"];

$new = $pdo->query("UPDATE net_params SET iva_param='$iva', fact_param='$factura', 
            cadu_param='$caduca' WHERE id_param=1");

if($new) {
  echo 201;
}