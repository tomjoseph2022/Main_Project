<?php
include 'connection.php';

@$id = $_POST['leaid'];

$data_list = array();

 
$query=mysqli_query($con,"SELECT tbl_registration.*,tbl_cab_booking.*,tbl_cab_payment.* from tbl_registration,tbl_cab_booking,tbl_cab_payment where tbl_registration.login_id=tbl_cab_booking.login_id and tbl_cab_payment.login_id=tbl_cab_booking.login_id and tbl_cab_payment.payment_status=1 and tbl_cab_booking.driver_id='$id';");



if(mysqli_num_rows($query) > 0)
{
	while($real= mysqli_fetch_assoc($query))
	{

		$data_list[] = $real;
	}	

	$response['success'] =1; 
	$response['result'] = $data_list;
    
	echo json_encode($response);
}
else
{
	$response['success'] =0; 
	$response['result'] = "No data found!";
    
	echo json_encode($response);
}

?>

