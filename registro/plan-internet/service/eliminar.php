<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_plan WHERE cod_pla='$id'");

if($eliminar) {
  echo 200;
}