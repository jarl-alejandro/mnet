<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_bodega WHERE cod_bode='$id'");

if($eliminar) {
  echo 200;
}