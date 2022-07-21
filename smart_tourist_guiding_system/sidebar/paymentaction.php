<?php
include 'connection.php';
$bid=$_GET['bid'];
$amount=$_GET['amt'];
$lid=$_GET['lid'];
$pid=$_GET['pid'];
$eml=$_GET['eml'];
$status=1;

//$query="INSERT INTO tbl_payment(amount,booking_id,package_id,login_id,status) VALUES ('$amount','$bid','$pid','$lid','$status')";

$query="UPDATE tbl_payment SET amount='$amount',payment_status='$status' WHERE booking_id='$bid' and package_id='$pid' and login_id='$lid'";
mysqli_query($con,$query);
header("location:paymentsucessemail.php?eml=$eml");






?>