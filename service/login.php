<?php
session_start();
include "../conexion/conexion.php";

$email = $_POST["email"];
$password = sha1($_POST["password"]);

$loginQuery = $pdo->query("SELECT * FROM net_usuario WHERE emi_usu='$email' AND pass_usu='$password'");

if($loginQuery->rowCount() == 1){
  $user = $loginQuery->fetch();

  $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"] = $user["ced_usu"];
  $_SESSION["96e3f164788cb3c54bbf71647b7f54457ec3c3fb"] = $user["rol_usu"];
  $_SESSION["db78ff0a8439032f661fe9f0a13e09c2c5a7c435"] = "empelado";
  $_SESSION["b5945009161e239ef9164232db640cdfb1829e49"] = $user["nom_usu"]." ".$user["ape_usu"];

  echo 200;
}
else{
  echo 1;
}