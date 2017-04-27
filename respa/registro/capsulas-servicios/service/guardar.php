<?php
include "../../../conexion/conexion.php";
include "../../../conexion/helpers.php";
if($_POST["nombre"] != "") {
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $bodegas = $_POST["bodegas"];
  $codigo = setCode('CP-', 8, 'net_capsula', 'cont_capsula');

  $detail = $pdo->prepare("INSERT INTO net_det_caps (cod_capsu, cod_bod) VALUES (?, ?)");  

  if($id == ""){
    $new = $pdo->prepare("INSERT INTO net_capsula (cod_capsu, serv_capsu) 
              VALUES (?, ?)");

    $new->bindParam(1, $codigo);
    $new->bindParam(2, $nombre);

    $new->execute();
    updateCode("cont_capsula");

    foreach($bodegas as $bodega){
      $code = $bodega["code"];
      $name = $bodega["name"];

      $detail->bindParam(1, $codigo);
      $detail->bindParam(2, $code);
      $detail->execute();
    }
  }
  else {
    $new = $pdo->query("UPDATE net_capsula SET serv_capsu='$nombre' WHERE cod_capsu='$id'");

    $pdo->query("DELETE FROM net_det_caps WHERE cod_capsu='$id'");

    foreach($bodegas as $bodega){
      $code = $bodega["code"];
      $name = $bodega["name"];

      $detail->bindParam(1, $id);
      $detail->bindParam(2, $code);
      $detail->execute();
    }
  }

  if($new) {
    echo 201;
  }

}