<?php
include "../../../conexion/conexion.php";
include "../../../conexion/helpers.php";
if($_POST["nombre"] != "") {
  $id = $_POST["id"];
  $cedula = $_POST["cedula"];
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $celular = $_POST["celular"];
  $direccion = $_POST["direccion"];
  $password = sha1($cedula);

  if($id == ""){
    $new = $pdo->prepare("INSERT INTO net_usuario (ced_usu, nom_usu, ape_usu, emi_usu, tel_usu,
                        cel_usu, dir_usu, pass_usu) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $new->bindParam(1, $cedula);
    $new->bindParam(2, $nombre);
    $new->bindParam(3, $apellido);
    $new->bindParam(4, $email);
    $new->bindParam(5, $telefono);
    $new->bindParam(6, $celular);
    $new->bindParam(7, $direccion);
    $new->bindParam(8, $password);

    $new->execute();
  }
  else {
    $new = $pdo->query("UPDATE net_usuario SET nom_usu='$nombre', ape_usu='$apellido',
        emi_usu='$email', tel_usu='$telefono', cel_usu='$celular', dir_usu='$direccion'
        WHERE ced_usu='$id'");
  }

  if($new) {
    echo 201;
  }

}