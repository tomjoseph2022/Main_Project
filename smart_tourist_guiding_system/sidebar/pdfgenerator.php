<?php
session_start();

include 'connection.php';
$uname=$_SESSION['login_id'];
date_default_timezone_set('Asia/Kolkata');
//echo date('d-m-Y H:i');
$date = date('Y-m-d H:i:s');

$result=mysqli_query($con,"SELECT tbl_payment.*,tbl_registration.*,tbl_booking.*,tbl_package.* from tbl_payment,tbl_registration,tbl_booking,tbl_package where tbl_registration.login_id=tbl_booking.login_id and tbl_booking.login_id=tbl_payment.login_id and tbl_package.package_id=tbl_payment.package_id and tbl_payment.login_id='$uname'") or die(mysqli_error($con));


include('pdf_mc_table.php');
$pdf = new PDF_MC_TABLE();

$pdf->AddPage();
$pdf->SetFont('Arial','B',21);
$pdf->SetX(40);
$pdf->SetTextColor(0,25,10);
$pdf->Cell(276,5,'SMART TOURIST GUIDING SYSTEM',0,0);
$pdf->Ln();
$pdf->SetFont('Times','',12);
$pdf->SetTextColor(0,0,0);

$pdf->SetY(205);
$pdf->SetX(140);
$pdf->Cell(276,10,'Sd/-',0,0);
$pdf->SetY(215);
$pdf->SetX(120);
$pdf->Cell(276,10,'Smart Tourist Guiding Team',0,0);

$pdf->SetY(235);
$pdf->SetX(30);
$pdf->Cell(276,10,'This is Computer Generated Print.Hence there is no need for the physical signature',0,0);
$pdf->SetY(265);
$pdf->SetX(80);
$pdf->Cell(276,10,$date,0,0);

$pdf->SetFont('Times','U',12);
$pdf->SetTextColor(0,0,250);
$pdf->SetY(29);
$pdf->Cell(176, 5, 'Bill Recepit', 0, 0, 'C');
$pdf->SetTextColor(194,8,8);
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Ln();	
  
$row=mysqli_fetch_array($result);
$pdf->SetY(45);

$pdf->SetFont('Arial','',12);	
$pdf->SetX(30);
$pdf->Multicell(149,12,'Name : '. $row['firstname'].''.$row['lastname'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Address : '. $row['address'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'E-mail : '. $row['emails'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'State : '. $row['state'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Pincode : '. $row['pincode'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Phone Number : '. $row['phone'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Package Name : '. $row['package_name'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Package Type : '. $row['package_type'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Starting Date : '. $row['book_date_start'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Ending Date : '. $row['book_date_end'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'No .of Persons : '. $row['book_no_person'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Booked Date : '. $row['booked_date'],1);
$pdf->SetX(30);
$pdf->Multicell(149,12,'Total Amount Paid : '. $row['amount'],1);
$pdf->SetX(30);







$pdf->Output();
?>