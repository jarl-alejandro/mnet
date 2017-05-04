<?php session_start();
include "../../../conexion/conexion.php";

$password = sha1($_POST["password"]);
$id = $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"];

$new = $pdo->query("UPDATE net_usuario SET pass_usu='$password' WHERE ced_usu='$id'");

if($new) {
  echo 201;
}