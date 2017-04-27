<?php
include '../../../conexion/conexion.php';

$idEditar = $_POST["idEditar"];
$id = $_POST["id"];
$tecnico = $_POST["tecnico"];
$equipo = $_POST["equipo"];

$detalle = $pdo->prepare("INSERT INTO trabajo_detalle (cod_trab, id_empl) VALUES (?, ?)");

if ($idEditar == "") {
  $pdo->query("UPDATE net_pedido SET esta_ped='4' WHERE cod_ped='$id'");

  $pdo->query("INSERT INTO net_trabajo (cod_trab, tec_trab) VALUES ('$id', '$tecnico')");


  foreach($equipo as $item) {
    $cedula = $item["id"];
    $nombre = $item["nombre"];

    $detalle->bindParam(1, $id);
    $detalle->bindParam(2, $cedula);

    $detalle->execute();
  }
}
else {
  $pdo->query("DELETE FROM trabajo_detalle WHERE cod_trab='$idEditar'");
  $pdo->query("DELETE FROM net_trabajo WHERE cod_trab='$idEditar'");

  $pdo->query("UPDATE net_pedido SET esta_ped='4' WHERE cod_ped='$idEditar'");

  $pdo->query("INSERT INTO net_trabajo (cod_trab, tec_trab) VALUES ('$idEditar', '$tecnico')");

  foreach($equipo as $item) {
    $cedula = $item["id"];
    $nombre = $item["nombre"];

    $detalle->bindParam(1, $idEditar);
    $detalle->bindParam(2, $cedula);

    $detalle->execute();
  }
}
