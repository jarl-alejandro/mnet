<?php
include "../conexion/conexion.php";

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$direccion = $_POST["direccion"];
$password = sha1($_POST["password"]);

$clien_query = $pdo->query("SELECT * FROM net_cliente WHERE ced_cli='$cedula'");

if ($clien_query->rowCount() > 0) {
  echo 1;
  return false;
}

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

 if($new) {
  echo 201;
}