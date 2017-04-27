<?php
include "../../../conexion/conexion.php";
include "../../../conexion/helpers.php";
if($_POST["nombre"] != "") {
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $detalle = $_POST["detalle"];
  $codigo = setCode('TP-', 8, 'net_tipo', 'cont_tipo');

  if($id == ""){
    $new = $pdo->prepare("INSERT INTO net_tipo (cod_tip, nom_tip, det_tip) 
              VALUES (?, ?, ?)");

    $new->bindParam(1, $codigo);
    $new->bindParam(2, $nombre);
    $new->bindParam(3, $detalle);

    $new->execute();
    updateCode("cont_tipo");
  }
  else {
    $new = $pdo->query("UPDATE net_tipo SET nom_tip='$nombre', det_tip='$detalle' 
                                    WHERE cod_tip='$id'");
  }

  if($new) {
    echo 201;
  }

}