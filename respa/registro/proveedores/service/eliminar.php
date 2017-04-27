<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_proveedor WHERE cod_prove='$id'");

if($eliminar) {
  echo 200;
}