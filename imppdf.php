<?php
 require_once("validarlogin.php");
                    if($estado){
$nom=$_SESSION['nomco'];
date_default_timezone_set('America/Mexico_City');
                 
$fec=date("F j, Y, g:i a"); 
   $file = fopen("examenes.txt","a+");
     
    fwrite($file, $nom." "."Certificacion_C"." "."Aprobado"." ".$fec."\r\n");
    
    fclose($file);                     


    require('fpdf/fpdf.php');




$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('img/logo.png',10,10,-1100);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',30);

$pdf->Ln(30);
$pdf->Cell(15);
$pdf->Cell(0,0,utf8_decode('CertificaT '),0,0,'C');
$pdf->Ln(20);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(0,0,utf8_decode('"Por medio de la presente otorga la siguiente"'),0,0,'C');
$pdf->Ln(20);
$pdf->SetFont('Arial','B',24);
$pdf->Cell(0,0,utf8_decode('Certificacion en C'),0,0,'C');


$pdf->SetFont('Arial','B',16);
// Move to 8 cm to the right
$pdf->Cell(20);
$pdf->Ln(20);
// Texto centrado en una celda con cuadro 20*10 mm y salto de línea
$pdf->Cell(0,0,utf8_decode('A: '.$nom.' '),0,0,'C');
$pdf->Cell(20);
$pdf->Ln(20);
$pdf->Cell(0,0,utf8_decode('Por graduarse en el curso de C '),0,0,'C');
$pdf->Cell(20);
$pdf->Ln(20);
$pdf->Cell(0,0,utf8_decode('Impartido por el Jesus Alberto Romo Mendez: '),0,0,'C');
$pdf->Cell(20);
$pdf->Ln(20);


$pdf->Cell(0,0,utf8_decode('Con fecha de: '.$fec),0,0,'C');
$pdf->Cell(20);
$pdf->Ln(20);
$pdf->Cell(0,0,utf8_decode('Firma del director: '),0,0,'C');
$pdf->Cell(20);
$pdf->Ln(20);
$pdf->Image('img/firma.png',85,195,50);
$pdf->Cell(20);
$pdf->Ln(20);
$pdf->Cell(0,0,utf8_decode('Jesus Alberto Romo Mendez'),0,0,'C');
$pdf->Cell(20);
$pdf->Ln(10);
$pdf->Cell(0,0,utf8_decode('Director de la Institucion '),0,0,'C');
$pdf->Ln(10);
$pdf->Cell(0,0,utf8_decode('Aguascalientes, Ags. '),0,0,'C');
$pdf->Image('img/der.png',160,200,50);





$pdf->Output();



}
?>