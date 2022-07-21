<?php 

include 'connection.php';

if(isset($_POST['leaid']))
{
	@$id = $_POST['leaid'];
	

	$query = mysqli_query($con, "UPDATE `tbl_cab_booking` SET `status`='2' WHERE `cabbook_id`='$id'");
	
if($query)
{
	$response['success'] = 1;
	$response['message'] = "Booking Rejected!";

	echo json_encode($response);

}
else
{
	$response['success'] = 0;
	$response['message'] = "Error occured!";

	echo json_encode($response);

}



}else
{
	$response['success'] = 0;
	$response['message'] = "No Access!";

	echo json_encode($response);

}


?>