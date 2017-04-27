<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_tipo WHERE cod_tip='$id'");

if($eliminar) {
  echo 200;
}