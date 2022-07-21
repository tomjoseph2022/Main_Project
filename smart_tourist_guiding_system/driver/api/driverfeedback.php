<?php 

include 'connection.php';

if(isset($_POST['feedback']))
{

	@$feedback = $_POST['feedback'];
	@$driver = $_POST['driver_id'];




	$query = mysqli_query($con, "INSERT INTO tbl_feedback(feed_message,feed_status,login_id) VALUES ('$feedback','0','$driver')");
	
if($query)
{
	$response['success'] = 1;
	$response['message'] = "feedback submitted!";

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