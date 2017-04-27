<?php
include "../../../conexion/conexion.php";

$id = $_GET["id"];
$herr_array = array();
$mate_array = array();

$query = $pdo->query("SELECT * FROM net_capsula WHERE cod_capsu='$id'");
$get = $query->fetch();

$herram = $pdo->query("SELECT * FROM vista_capsu_det WHERE cod_capsu='$id' AND nom_cate='Herramientas'");
$material = $pdo->query("SELECT * FROM vista_capsu_det WHERE cod_capsu='$id' AND nom_cate!='Herramientas'");

while($item = $herram->fetch()){
  $code = $item["cod_bod"];
  $name = $item["nom_bode"];

  $herr_array[] = array("code"=>$code, "name"=>$name);
}

while($item = $material->fetch()){
  $code = $item["cod_bod"];
  $name = $item["nom_bode"];

  $mate_array[] = array("code"=>$code, "name"=>$name);
}

$json = array('servicio'=>$get, "herramientas"=>$herr_array, "materiales"=>$mate_array);

print json_encode($json);