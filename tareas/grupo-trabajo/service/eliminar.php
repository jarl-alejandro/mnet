<?php
include "../../../conexion/conexion.php";

$id = $_POST["id"];

$eliminar = $pdo->query("DELETE FROM net_categoria WHERE cod_cate='$id'");

if($eliminar) {
  echo 200;
}