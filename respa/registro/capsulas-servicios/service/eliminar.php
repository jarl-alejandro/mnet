<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_capsula WHERE cod_capsu='$id'");
$pdo->query("DELETE FROM net_det_caps WHERE cod_capsu='$id'");

if($eliminar) {
  echo 200;
}