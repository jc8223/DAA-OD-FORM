<?php
if (!empty($_POST['submit'])) {
	$Name = $_POST['Name'];
	$dept = $_POST['Department'];
	$reg = $_POST['Registration_Number'];
	$yos = $_POST['year_of_studing'];
	$branch = $_POST['Branch'];
	$date = $_POST['Date'];
	$Event = $_POST['Event'];
	$hour = $_POST['Hours'];

	include 'fpdf/fpdf.php';


	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial", "", 15);
	$pdf->Image('Screenshot_20230218-113121_Drive.jpg',0,0,100,0);
	
	$pdf->Cell(0, 10, "To,", 0, 0);
	$pdf->Cell(0,10,"Date : $date ",0,1,'R');
	$pdf->Cell(0, 10, "The Faculty Advisor", 0, 1);
	$pdf->Cell(0, 10, "$dept", 0, 1);
	$pdf->Cell(0, 10, "SRMIST,", 0, 1);
	$pdf->Cell(0, 10, "Kattankulathur Campus ", 0, 1);
	$pdf->Cell(0, 10, "Respected Sir/Madam, ", 0, 1);
	$pdf->Cell(0, 10, "Sub:- On Duty for the event - $Event", 0, 1);
	$pdf->Cell(0, 10, "The following student was working for the Event $Event on $date.", 0, 1);
	$pdf->Cell(0, 10, "The details are given below:", 0, 1);
	$pdf->Cell(90, 10, "Name:", 1, 0);
	$pdf->Cell(0, 10, $Name, 1, 1);
	$pdf->Cell(90, 10, "Registration No.", 1, 0);
	$pdf->Cell(0, 10, $reg, 1, 1);
	$pdf->Cell(90, 10, "Hours", 1, 0);
	$pdf->Cell(0, 10, $hour, 1, 1);
	$pdf->Cell(90, 10, "Year/branch", 1, 0);
	$pdf->Cell(0, 10, "$yos/$branch", 1, 1);
	$pdf->Cell(0, 10, "Please contact the Director, Directorate Of Alumni Affairs if the student has low", 0, 1);
	$pdf->Cell(0, 10, "attendance percentage in any of the subjects and will not be able to make up in that", 0, 1);
	$pdf->Cell(0, 10, "subject in-spite of the applied ODs.", 0, 1);
	$pdf->Cell(0, 10, "Kindly do the needful.", 0, 1);
	$pdf->Cell(0, 10, "Thanking you in anticipation.", 0, 1);
	$pdf->Cell(0, 10, "Yours sincerely,", 0, 1);

	$pdf->Output();
}