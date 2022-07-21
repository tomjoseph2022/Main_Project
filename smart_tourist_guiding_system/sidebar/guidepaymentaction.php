<?php
include 'connection.php';
$gb_id=$_GET['gb_id'];
$amount=$_GET['amt'];
$lid=$_GET['lid'];
$gid=$_GET['gid'];
$eml=$_GET['eml'];
$statuss=1;

//$query="INSERT INTO tbl_payment(amount,booking_id,package_id,login_id,status) VALUES ('$amount','$bid','$pid','$lid','$status')";

$query="UPDATE tbl_guide_payment SET amount='$amount',payment_status='$statuss' WHERE login_id='$lid' and guide_id='$gid' and gb_id='$gb_id'";
mysqli_query($con,$query);
header("location:guidepaymentsucessmail.php?eml=$eml&&gb_id=$gb_id");






?>