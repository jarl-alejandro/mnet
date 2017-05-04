<?php
include "../../../conexion/conexion.php";
include "../../../conexion/helpers.php";
if($_POST["nombre"] != "") {
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $detalle = $_POST["detalle"];
  $codigo = setCode('PL-', 8, 'cont_internet', 'cont_internet');

  if($id == ""){
    $new = $pdo->prepare("INSERT INTO net_internet (cod_int, cli_int, pla_int) 
              VALUES (?, ?, ?)");

    $new->bindParam(1, $codigo);
    $new->bindParam(2, $nombre);
    $new->bindParam(3, $detalle);

    $new->execute();
    updateCode("cont_internet");
  }
  else {
    $new = $pdo->query("UPDATE net_internet SET cli_int='$nombre', pla_int='$detalle' 
                                    WHERE cod_int='$id'");
  }

  if($new) {
    echo 201;
  }

}