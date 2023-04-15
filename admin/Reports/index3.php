<?php
include('config.php');
$database = new Database();

$sql = "SELECT user_id , user_name , email_id  ,contact_no ,address FROM user where user_id = user_id  ";


if(isset($_GET["d1"]) && isset($_GET["d2"]) )
{
					$start = $_GET["d1"];
					$end = $_GET["d2"];
					
					$sql  = $sql . " and regidate between '".$start."' and '".$end."'";    
					//echo $sql;
					//die;
}
$result = $database->runQuery($sql);
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='rutu' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('user_name','email_id','address','contact_no')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A3");
$pdf->SetFont('Arial','B',12);

// Set header
// $pdf->Image('logop2.jpg',7,1,60);
    // Move to the right
    $pdf->Cell(80);			
    // Title
  $pdf->Cell(80,10,'Date Wise user List',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(80,12,"user_id",1);
		$pdf->Cell(80,12,"user_name",1);
		$pdf->Cell(80,12,"email_id",1);
		$pdf->Cell(80,12,"contact_no",1);
		$pdf->Cell(80,12,"address",1);
		

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(80,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>