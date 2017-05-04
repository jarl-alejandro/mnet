<?php
include "conexion/conexion.php";

$count_query = $pdo->query("SELECT * FROM net_params");
$count_empleado = $pdo->query("SELECT * FROM net_usuario");

if($count_query->rowCount() == 0) {
  $pdo->query("INSERT INTO net_params (id_param, iva_param, fact_param, cadu_param) 
                VALUES (1, 0, 0, 0)");
}

if($count_empleado->rowCount() == 0) {
  $password = sha1("admin");
  $pdo->query("INSERT INTO net_usuario (ced_usu, nom_usu, ape_usu, emi_usu, tel_usu,
          cel_usu, dir_usu, pass_usu, rol_usu) VALUES ('1234567890', 'admin', 'admin', 
          'admin@admin.com','1234567890', '1234567890', 'admin', '$password', 'Administrador')");
}

header("Location: login.php");