<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_cliente WHERE ced_cli='$id'");

if($eliminar) {
  echo 200;
}