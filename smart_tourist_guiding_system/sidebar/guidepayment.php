<?php
        $apiKey="rzp_test_IdEeEz7ZLHdIl0";
        include 'connection.php';
        session_start();
        $sid=$_SESSION['login_id'];
        $cusamount=$_GET['amt'];
        
        
        $query="SELECT tbl_registration.firstname,lastname,emails,phone,gb_datef,gb_datee,guide_id,booked_date,status,gb_id,tbl_guide_booking.login_id,tbl_guidedetails.gd_payment
        from tbl_registration,tbl_guide_booking,tbl_guidedetails where tbl_registration.login_id=tbl_guide_booking.login_id and tbl_guidedetails.login_id=tbl_guide_booking.guide_id and tbl_guide_booking.login_id='$sid'";
        $result=mysqli_query($con,$query);
        while ($row = mysqli_fetch_assoc($result)) {
            $gb_id=$row['gb_id'];
            
            $lid=$row['login_id'];
            $gid=$row['guide_id'];
            $email=$row['emails']; 
            $name=$row['firstname'].' '.$row['lastname'];

            

        }

        //$totalamount=$amount + $cusamount;
        
?>
<form action="guidepaymentaction.php?gb_id=<?php echo $gb_id ?>&&amt=<?php echo $cusamount ?>&&lid=<?php echo $lid ?>&&gid=<?php echo $gid  ?>&&eml=<?php echo $email ?>" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $cusamount * 100; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="<?php rand(100000, 999999);?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay"
    data-name="Smart Tourist Guiding System"//project name
    data-description="Make journey Unforgettable "
    data-image=""
    data-prefill.name="<?php echo $name;?>"
    data-prefill.email="<?php echo $email ?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form> 

<!--style>
.razorpay-payment-button { display:none; }
</style>


<script type="text/javascript">
  $(document).ready(function(){
    $('.razorpay-payment-button').click();

});
</script-->
