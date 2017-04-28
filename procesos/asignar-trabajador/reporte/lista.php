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
    $this->Text(110, 54, 'ASIGNAR EQUIPO');
    $this->Ln(25);
  }

  function TablaColores($header) {
    $this->SetFillColor(192, 192, 192);
    $this->SetTextColor(255);
    $this->SetLineWidth(.3);
    $this->SetFont('Arial', 'B');

    $w = array(10, 30, 30, 150, 70);
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

$a = "Ensamblaje, Mantenimiento y Reparacion de Compu";
$b = substr($a, -47);
//echo $b;

$header = array('#', 'FECHA VISITA', 'HORA VISITA', 'DETALLE', 'TECNICO');
$pdf->SetFont('Arial', 'B', 11);

$pdf -> SetX(5);
$pdf->SetFont('Arial', '',12);
$pdf->TablaColores($header);

$id = $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"];

$query = $pdo->query("SELECT * FROM vista_trabajo WHERE cod_ped=4");
$index = 0;
$pdf->SetFont('Arial', '', 9);

foreach ($query as $detail) {
  $pdf -> SetX(5);
  $index++;
  
  $pdf->Cell(10, 6.5, $index, 1, 'C');
  $pdf->Cell(30, 6.5, $detail["fevis_ped"], 1, 'C');
  $pdf->Cell(30, 6.5, $detail["hovis_ped"], 1, 'C');
  $pdf->Cell(150, 6.5, utf8_decode($detail["cliente"]." - ".$detail["nom_tip"]), 1, 'C');
  $pdf->Cell(70, 6.5, utf8_decode($detail["tecnico"]), 1, 'C');
  $pdf->Ln();

}


$pdf->Output();
?>
