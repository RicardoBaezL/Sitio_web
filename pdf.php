<?php
$id_producto = $_REQUEST['id_producto'];
$productos = json_decode(file_get_contents('productos.json'), true);
$producto = $productos[$id_producto];

require('pdf\fpdf.php');


class PDF extends FPDF
{
function Header()
{
    
    $this->SetFont('Arial','B',20);
    $this->Cell(70);
    $this->Cell(70,10,'Detalles del prodcuto',0,0,'C');
    $this->Ln(20);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,50,'Nombre: '.$producto['nombre'],0,1);
$pdf->Cell(60,50,'Precio: $'.$producto['precio'],0,1);
$pdf->Output();
?>