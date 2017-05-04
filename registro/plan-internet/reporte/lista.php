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
    $this->Text(110, 54, 'LISTADO DE PLAN DE CUENTAS');
    $this->Ln(25);
  }

  function TablaColores($header) {
    $this->SetFillColor(192, 192, 192);
    $this->SetTextColor(255);
    $this->SetLineWidth(.3);
    $this->SetFont('Arial', 'B');

    $w = array(30, 200, 30, 30);

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

$header = array('CODIGO', 'NOMBRE', 'PRECIO');

$pdf -> SetX(15);
$pdf->SetFont('Arial', '',12);
$pdf->TablaColores($header);

$query = $pdo->query("SELECT * FROM net_plan");
$total = 0;

foreach ($query as $detail) {
  $pdf -> SetX(15);
  
  $pdf->Cell(30, 6.5, $detail["cod_pla"], 1, 'C');
  $pdf->Cell(200, 6.5, utf8_decode( substr($detail["nom_pla"], 0, 45) ), 1, 'C');
  $pdf->Cell(30, 6.5, $detail["pri_pla"], 1, 'C');
  $pdf->Ln();

}


$pdf->Output();
?>
