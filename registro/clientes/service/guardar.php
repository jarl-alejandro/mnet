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
    $new = $pdo->prepare("INSERT INTO net_cliente (ced_cli, nom_cli, ape_cli, emi_cli, tel_cli,
                            cel_cli, dir_cli, pass_cli) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

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
    $new = $pdo->query("UPDATE net_cliente SET nom_cli='$nombre', ape_cli='$apellido',
        emi_cli='$email', tel_cli='$telefono', cel_cli='$celular', dir_cli='$direccion'
        WHERE ced_cli='$id'");
  }

  if($new) {
    echo 201;
  }

}