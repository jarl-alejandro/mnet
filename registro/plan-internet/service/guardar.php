<?php
include "../../../conexion/conexion.php";
include "../../../conexion/helpers.php";
if($_POST["nombre"] != "") {
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $detalle = $_POST["detalle"];
  $codigo = setCode('PL-', 8, 'cont_plan', 'cont_plan');

  if($id == ""){
    $new = $pdo->prepare("INSERT INTO net_plan (cod_pla, nom_pla, pri_pla) 
              VALUES (?, ?, ?)");

    $new->bindParam(1, $codigo);
    $new->bindParam(2, $nombre);
    $new->bindParam(3, $detalle);

    $new->execute();
    updateCode("cont_plan");
  }
  else {
    $new = $pdo->query("UPDATE net_plan SET nom_pla='$nombre', pri_pla='$detalle' 
                                    WHERE cod_pla='$id'");
  }

  if($new) {
    echo 201;
  }

}