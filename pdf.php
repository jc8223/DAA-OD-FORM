<?php
if(!empty($_POST['submit']))
{
	$Name = $_POST['Name'];
	$dept = $_POST['Department'];
	$reg = $_POST['Registration_Number'];
	$yos = $_POST['year_of_studing'];

	include 'fpdf/fpdf.php';

	$pdf = new FPDF();
	$pdf->AddPage();

	$pdf -> SetFont("Arial","",15);
	$pdf -> Cell(0,10,"asdfaf",1,1,'C');

	$pdf-> Cell(20,10,"Name",1,0);
	$pdf-> Cell(45,10,"reg",1,0);
	$pdf-> Cell(45,10,"Nae",1,0);
	$pdf-> Cell(0,10,"year",1,0);

	$pdf-> Cell(20,10,$Name,1,0);
	$pdf-> Cell(45,10,$dept,1,0);
	$pdf-> Cell(45,10,$reg,1,0);
	$pdf-> Cell(0,10,$yos,1,0);

	$file = time().'.pdf';
	$pdf->Output($file,'D');
}
?>