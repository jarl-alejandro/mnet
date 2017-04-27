<?php
include "../../../conexion/conexion.php";
include "../../../conexion/helpers.php";

if($_POST["nombre"] != "") {
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $costo = $_POST["costo"];
  $cantidad = $_POST["cantidad"];
  $categoria = $_POST["categoria"];
  $cantMax = $_POST["cantMax"];
  $cantMin = $_POST["cantMin"];
  $precioCosto = "";
  $precioVenta1 = $_POST["precioVenta1"];
  $precioVenta2 = $_POST["precioVenta2"];
  $precioVenta3 = $_POST["precioVenta3"];
  $is_imagen = $_POST["is_imagen"];

  $codigo = setCode('BG-', 8, 'net_bodega', 'cont_bode');
  $code_image = setCode('IMG-', 8, 'net_bodega', 'cont_image');

  if($id == ""){
    $foto = upload_image($code_image, "fotos");

    $new = $pdo->prepare("INSERT INTO net_bodega (cod_bode, nom_bode, cost_bode, cant_bode, 
            max_bode, min_bode, preci_bode, vent1_bode, vent2_bode, vent3_bode, imag_bode, cate_bode) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $new->bindParam(1, $codigo);
    $new->bindParam(2, $nombre);
    $new->bindParam(3, $costo);    
    $new->bindParam(4, $cantidad);
    $new->bindParam(5, $cantMax);
    $new->bindParam(6, $cantMin);
    $new->bindParam(7, $precioCosto);
    $new->bindParam(8, $precioVenta1);
    $new->bindParam(9, $precioVenta2);
    $new->bindParam(10, $precioVenta3);
    $new->bindParam(11, $foto);
    $new->bindParam(12, $categoria);

    $new->execute();
    updateCode("cont_bode");
    updateCode("cont_image");
  }
  else {
    if($is_imagen == 0){
      $new = $pdo->query("UPDATE net_bodega SET nom_bode='$nombre', cost_bode='$costo', 
              cant_bode='$cantidad', max_bode='$cantMax', min_bode='$cantMin', 
              preci_bode='$precioCosto', vent1_bode='$precioVenta1', vent2_bode='$precioVenta1',
              vent3_bode='$precioVenta1', cate_bode='$categoria' WHERE cod_bode='$id'");
    }
    else{ 
      $foto = upload_image($code_image, "fotos");
      
      $new = $pdo->query("UPDATE net_bodega SET nom_bode='$nombre', cost_bode='$costo', 
              cant_bode='$cantidad', max_bode='$cantMax', min_bode='$cantMin', 
              preci_bode='$precioCosto', vent1_bode='$precioVenta1', vent2_bode='$precioVenta1',
              vent3_bode='$precioVenta1', imag_bode='$foto', cate_bode='$categoria' WHERE cod_bode='$id'");
    }
    updateCode("cont_image");

  }

  if($new) {
    echo 201;
  }

}