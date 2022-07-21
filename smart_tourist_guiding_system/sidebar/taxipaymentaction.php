<?php
include 'connection.php';
$bid=$_GET['cid'];
$amount=$_GET['amt'];
$lid=$_GET['lid'];
$did=$_GET['did'];
$eml=$_GET['eml'];
$statuss=1;

//$query="INSERT INTO tbl_payment(amount,booking_id,package_id,login_id,status) VALUES ('$amount','$bid','$pid','$lid','$status')";

$query="UPDATE tbl_cab_payment SET amount='$amount',payment_status='$statuss' WHERE cabbook_id='$bid' and driver_id='$did' and login_id='$lid'";
mysqli_query($con,$query);
header("location:taxipaymentsucessmail.php?eml=$eml");






?>