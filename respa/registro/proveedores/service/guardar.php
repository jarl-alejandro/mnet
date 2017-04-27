<?php
include "../../../conexion/conexion.php";
include "../../../conexion/helpers.php";
if($_POST["nombre"] != "") {
  $codigo = setCode('PR-', 8, 'net_proveedor', 'cont_provedor');
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $celular = $_POST["celular"];
  $direccion = $_POST["direccion"];

  $nombreContacto = $_POST["nombreContacto"];
  $emailContacto = $_POST["emailContacto"];
  $telefonoContacto = $_POST["telefonoContacto"];
  $celularContacto = $_POST["celularContacto"];

  if($id == ""){
    $new = $pdo->prepare("INSERT INTO net_proveedor(cod_prove, nom_prove, emi_prove, tel_prove,
          cel_prove, dir_prove, nom_contac, emi_contac, tel_contac, cel_contac) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $new->bindParam(1, $codigo);
    $new->bindParam(2, $nombre);
    $new->bindParam(3, $email);
    $new->bindParam(4, $telefono);
    $new->bindParam(5, $celular);
    $new->bindParam(6, $direccion);
    $new->bindParam(7, $nombreContacto);
    $new->bindParam(8, $emailContacto);
    $new->bindParam(9, $telefonoContacto);
    $new->bindParam(10, $celularContacto);

    $new->execute();
    updateCode("cont_provedor");
  }
  else {
    $new = $pdo->query("UPDATE net_proveedor SET nom_prove='$nombre', emi_prove='$email', 
        tel_prove='$telefono', cel_prove='$celular', dir_prove='$direccion', 
        nom_contac='$nombre', emi_contac='$email', tel_contac='$telefono', cel_contac='$celular'
        WHERE cod_prove='$id'");
  }

  if($new) {
    echo 201;
  }

}