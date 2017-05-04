<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_internet WHERE cod_int='$id'");

if($eliminar) {
  echo 200;
}