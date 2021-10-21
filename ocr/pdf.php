<?php
require '../PDF/fpdf.php';

class PDF extends FPDF
{
  
// Cabecera de página
function Header()
{
    // // Logo
    //  $this->Image('logo.png',10,8,33);
    // // Arial bold 15
     $this->SetFont('Arial','B',15);
    // // Movernos a la derecha
     $this->Cell(80);
    // // Título
     $this->Cell(30,10,'Title',1,0,'C');
    // // Salto de línea
     $this->Ln(20);
}

// Pie de página
function Footer()
{
    // // Posición: a 1,5 cm del final
     $this->SetY(-15);
    // // Arial italic 8
     $this->SetFont('Arial','I',8);
    // // Número de página
     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


require 'conexion.php';

$con = $conexion->query("SELECT * FROM registrodatos");

// $consulta = "SELECT * FROM registrodatos";
// $resultado = $mysqli->query($consulta);



$pdf = new PDF();
 $pdf->AddPage();
$pdf->SetFont('Arial','I',8);
$pdf->Cell(40,10,('¡Hola, Mundo!'));

while($row = $con->fetch_assoc()){
   $pdf->Cell(90, 10, $row['id'], 1, 0, 'C', 0); 
   $pdf->Cell(90, 10, $row['primer_nombre'], 1, 0, 'C', 0);
}








$pdf->Output();



?>