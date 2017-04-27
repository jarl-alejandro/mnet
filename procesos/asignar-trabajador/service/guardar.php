<?php
include '../../../conexion/conexion.php';

$id = $_POST["id"];
$tecnico = $_POST["tecnico"];

$pdo->query("UPDATE net_pedido SET esta_ped='4' WHERE cod_ped='$id'");

$pdo->query("INSERT INTO net_trabajo (cod_trab, tec_trab) VALUES ('$id', '$tecnico')");
