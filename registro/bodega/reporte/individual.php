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
    $this->Text(110, 54, 'LISTADO DE BODEGAS');
    $this->Ln(25);
  }

  function TablaColores($header) {
    $this->SetFillColor(192, 192, 192);
    $this->SetTextColor(255);
    $this->SetLineWidth(.3);
    $this->SetFont('Arial', 'B');

    $w = array(30, 80, 20, 20, 20, 50);

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

$header = array('CODIGO', 'NOMBRE', 'CANT', 'PRECIO', 'COSTO', 'FOTO');

$pdf -> SetX(30);
$pdf->SetFont('Arial', '',12);
$pdf->TablaColores($header);

$id = $_GET["id"];

$query = $pdo->query("SELECT * FROM net_bodega WHERE cod_bode='$id'");
$total = 0;

foreach ($query as $detail) {
  $pdf -> SetX(30);
  
  $pdf->Cell(30, 17, $detail["cod_bode"], 1, 'C');
  $pdf->Cell(80, 17, utf8_decode( substr($detail["nom_bode"], 0, 45) ), 1, 'C');
  $pdf->Cell(20, 17, $detail["cant_bode"], 1, 'C');
  $pdf->Cell(20, 17, $detail["preci_bode"], 1, 'C');
  $pdf->Cell(20, 17, $detail["cost_bode"], 1, 'C');
  $pdf->Cell(50, 17, $pdf->Image("../../../media/fotos/".$detail["imag_bode"], $pdf->GetX(), $pdf->GetY(), 50, 16), 1,0,'R');
  $pdf->Ln();

}


$pdf->Output();
?>
