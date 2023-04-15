<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select * from categories");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='rutu' 
AND `TABLE_NAME`='categories'
and `COLUMN_NAME` in ('categories_id','categories_name','categories_description')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',12);

// Set header
 //$pdf->Image('Logop2.jpg',7,1,60);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'categories report',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(95,12,"categories_id",1);
		$pdf->Cell(95,12,"categories_name",1);
		$pdf->Cell(95,12,"categories_description",1);
		//$pdf->Cell(70,12,"Quantity",1);
		//$pdf->Cell(70,12,"Amount",1);
		//$pdf->Cell(70,12,"Size",1);
		//$pdf->Cell(70,12,"Area Name",1);

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(95,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>