<?php
session_start();
include "../conexion/conexion.php";

$email = $_POST["email"];
$password = sha1($_POST["password"]);

$loginQuery = $pdo->query("SELECT * FROM net_usuario WHERE emi_usu='$email' AND pass_usu='$password'");

if($loginQuery->rowCount() == 1){
  $user = $loginQuery->fetch();

  $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"] = $user["ced_usu"];
  $_SESSION["b5945009161e239ef9164232db640cdfb1829e49"] = $user["nom_usu"]." ".$user["ape_usu"];

  echo 200;
}
else{
  echo 1;
}