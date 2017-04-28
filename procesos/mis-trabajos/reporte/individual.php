<?php
session_start();

require('fpdf.php');
include '../../../conexion/conexion.php';

date_default_timezone_set('America/Guayaquil');

class PDF extends FPDF {

  function Header() {

    $this->Image('../../../assets/img/logo.png', 15, 5, 270, 34);
    $this->SetFont('Arial', 'B', 15);
    $this->SetTextColor(0, 0, 0);
    $this->Ln(1);
    $this->Line(2, 42, 295, 42);
    $this->Text(110, 54, 'FACTURA');
    $this->Ln(25);
  }

  function TablaColores($header) {
    $this->SetFillColor(192, 192, 192);
    $this->SetTextColor(255);
    $this->SetLineWidth(.3);
    $this->SetFont('Arial', 'B');

    $w = array(20, 157, 30, 30);

    for ($i = 0; $i < count($header); $i++)
      $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);

    $this->Ln();

    $this->SetTextColor(0);

    $this->SetFont('Times');
  }

  function Footer() {

    $this->SetY(-15);
    $this->SetFont('Arial', 'I', 8);
    $this->Cell(0, 10, utf8_decode('Página ' . $this->PageNo() . '/MundoNet'), 0, 0, 'C');
  }

}

$pdf = new PDF("L");
$pdf->AddPage();

$pdf->SetY(65);

$pdf->SetFont('Arial', '',12);

$id = $_GET["id"];

$pedido_query = $pdo->query("SELECT * FROM vista_pedidos WHERE cod_ped='$id'");
$pedido = $pedido_query->fetch();

$materiales_query = $pdo->query("SELECT * FROM vista_trabajo WHERE cod_ped='$id'");
$fetch = $materiales_query->fetch();

//////////////tecnico

$pdf->SetX(10);
$pdf->SetFont('Arial', '',10);

$pdf->Cell(200, 6.5, utf8_decode("SERVICIO: " . $pedido["nom_tip"]), 0, 'C');
$pdf->Ln();

$pdf->Cell(150, 6.5, utf8_decode("CLIENTE: " . $pedido["cliente"]), 0, 'C');
$pdf->Cell(150, 6.5, utf8_decode("TECNICO: " . $fetch['tecnico']), 0, 'C');
$pdf->Ln();

$pdf->Cell(150, 6.5, "FECHA DE PEDIDO: " . $pedido["fech_ped"], 0, 'C');
$pdf->Cell(150, 6.5, "FECHA DE VISITA: " . $pedido["fevis_ped"], 0, 'C');

$pdf->Ln();
$pdf->Cell(150, 6.5, "HORA DE VISITA: " . $pedido["hovis_ped"], 0,  'C');

$pdf->Ln();

$pdf->Ln(10);
$header = array('CANT', 'DESCRIPCION', 'V. UNIT', 'V. TOTAL');
$pdf->TablaColores($header);

$total = 0;

$materiales_query = $pdo->query("SELECT * FROM vista_det_pedido WHERE cod_ped='$id'");
$total = 0;

foreach ($materiales_query as $detail) {
  $total = $total + $detail["tot_ped"];
  $pdf->Cell(20, 6.5, $detail["cant_ped"], 1, 'C');
  $pdf->Cell(157, 6.5, utf8_decode($detail["nom_bode"]), 1, 'C');
  $pdf->Cell(30, 6.5, $detail["pre_ped"], 1, 'C');
  $pdf->Cell(30, 6.5, number_format($detail["tot_ped"], 2), 1, 'C');
  $pdf->Ln();

}

$pdf->setX(187);
$pdf->Cell(30, 6.5, "TOTAL   ", 1, 0, 'R');
$pdf->Cell(30, 6.5, number_format($total, 2), 1, 'C');


$pdf->Output();
?>
