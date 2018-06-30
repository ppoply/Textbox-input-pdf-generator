<?php 


if(isset($_POST['but'])){
	$text = $_POST["text_area"];
	
}


require('fpdf181/fpdf.php');

class PDF extends FPDF
{

function Header()
{
    
    $this->Image('https://img.etimg.com/thumb/msid-60825620,width-300,imgsize-46830,resizemode-4/cardekho-com-ties-up-with-hero-fincorp-for-used-car-financing.jpg',10,6,30);
    
    $this->SetFont('Arial','BU',15);
    
    $this->Cell(80);
    
    $this->Cell(30,10,'Simple PDF generator',0,0,'C');
    
    $this->Ln(30);
}


function Footer()
{
    
    $this->SetY(-15);
    
    $this->SetFont('Arial','I',8);
    
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(190,10,$text);
$pdf->Ln();
$pdf->SetFont('Times','BI',10);
$pdf->Cell(35,10,'Made by Parth Poply.',1,1);
$pdf->Output();
?>
 