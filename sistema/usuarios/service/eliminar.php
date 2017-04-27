<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_usuario WHERE ced_usu='$id'");

if($eliminar) {
  echo 200;
}