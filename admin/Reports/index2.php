<?php
include('config.php');
$database = new Database();

$sql = "select u.user_name , p.pack_name , p.pack_price  from booking b join user u join package p where b.booking_id = b.booking_id and b.user_id = u.user_id and
b.pack_id = p.pack_id ";

if(isset($_GET["d1"]) && isset($_GET["d2"]) )
{
					$start = $_GET["d1"];
					$end = $_GET["d2"];
					
					$sql  = $sql . " and booking_date between '".$start."' and '".$end."'";
					//echo $sql;
					//die;
}

$result = $database->runQuery($sql);
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='rutu' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('user_name','pack_name','pack_price')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A3");
$pdf->SetFont('Arial','B',12);

// Set header
 //$pdf->Image('logop2.jpg',7,1,60);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'Date Wise Booking List',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(60,12,"user_name",1);
		$pdf->Cell(60,12,"pack_name",1);
		$pdf->Cell(60,12,"pack_price",1);
		//$pdf->Cell(60,12,"Quantity",1);
		//$pdf->Cell(60,12,"Amount",1);
		//$pdf->Cell(60,12,"Size",1);
		//$pdf->Cell(70,12,"Area Name",1);

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(60,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>