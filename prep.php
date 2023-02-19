<?php
exec('uploading.html');
if (!empty($_POST['submit'])) {
	$Name = $_POST['Name'];
	$dept = $_POST['Department'];
	$reg = $_POST['Registration_Number'];
	$yos = $_POST['year_of_studing'];
	$branch = $_POST['Branch'];
	$date = $_POST['Date'];
	$Event = $_POST['Event'];
	$hour = $_POST['Hours'];
	
	require('fpdf/fpdf.php');
	class PDF extends FPDF
	{
	// Page header
	function Header()
	{
	$this->Image('Header.jpg',10,0,190,45);
	}
	// Page footer
	function Footer()
	{
	$this->SetY(-20);
	$this->Image('Footer.jpg',10,245 ,190,45);
	}
	}
	// Instanciation of inherited class
	$pdf = new PDF();
	$pdf->SetMargins(20,50,20);
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont("Arial", "", 12);
	$pdf->Cell(0,6, "To,", 0, 0);
	$pdf->Cell(0,6,"Date : $date ",0,1,'R');
	$pdf->Cell(0, 6, "The Faculty Advisor", 0, 1);
	$pdf->Cell(0, 6, "$dept", 0, 1);
	$pdf->Cell(0, 6, "SRMIST,", 0, 1);
	$pdf->Cell(0, 6, "Kattankulathur Campus ", 0, 1);
	$pdf->Cell(0, 15, " ", 0, 1);
	$pdf->Cell(0, 6, "Respected Sir/Madam, ", 0, 1);
	$pdf->Cell(0, 10, " ", 0, 1);
	$pdf->Cell(0, 6, "Sub:- On Duty for the event - $Event", 0, 1);
	$pdf->Cell(0, 10, " ", 0, 1);
	$pdf->Cell(0, 6, "The following student was working for the Event $Event on $date.", 0, 1);
	$pdf->Cell(0, 6, "The details are given below:", 0, 1);
	$pdf->Cell(0, 10, " ", 0, 1);
	$pdf->Cell(90, 6, "Name:", 1, 0);
	$pdf->Cell(0,6, $Name, 1, 1);
	$pdf->Cell(90, 6, "Registration No.", 1, 0);
	$pdf->Cell(0, 6, $reg, 1, 1);
	$pdf->Cell(90, 6, "Hours", 1, 0);
	$pdf->Cell(0, 6, $hour, 1, 1);
	$pdf->Cell(90, 6, "Year/branch", 1, 0);
	$pdf->Cell(0, 6, "$yos/$branch", 1, 1);
	$pdf->Cell(0, 10, " ", 0, 1);
	$pdf->Cell(0, 6, "Please contact the Director, Directorate Of Alumni Affairs if the student has low", 0, 1);
	$pdf->Cell(0, 6, "attendance percentage in any of the subjects and will not be able to make up in", 0, 1);
	$pdf->Cell(0, 6, "that subject in-spite of the applied ODs.", 0, 1);
	$pdf->Cell(0, 10, " ", 0, 1);
	$pdf->Cell(0, 6, "Kindly do the needful.", 0, 1);
	$pdf->Cell(0, 6, "Thanking you in anticipation.", 0, 1);
	$pdf->Cell(0, 6, "Yours sincerely,", 0, 1);
	$file = time().'.pdf';
	$pdf->Output($file,'D');
}
?>