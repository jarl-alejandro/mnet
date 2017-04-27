<?php
include "../../../conexion/conexion.php";
include "../../../conexion/helpers.php";
if($_POST["nombre"] != "") {
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $detalle = $_POST["detalle"];
  $codigo = setCode('TP-', 8, 'net_categoria', 'cont_categ');

  if($id == ""){
    $new = $pdo->prepare("INSERT INTO net_categoria (cod_cate, nom_cate, det_cate) 
              VALUES (?, ?, ?)");

    $new->bindParam(1, $codigo);
    $new->bindParam(2, $nombre);
    $new->bindParam(3, $detalle);

    $new->execute();
    updateCode("cont_categ");
  }
  else {
    $new = $pdo->query("UPDATE net_categoria SET nom_cate='$nombre', det_cate='$detalle' 
                                    WHERE cod_cate='$id'");
  }

  if($new) {
    echo 201;
  }

}