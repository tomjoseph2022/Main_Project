<?php 

include 'connection.php';

if(isset($_POST['name']))
{
	@$name = $_POST['name'];
	@$sub = $_POST['subj'];
	@$des = $_POST['descri'];
	@$fname = $_POST['file_name'];
	@$furl = $_POST['file_name_url'];
	@$sess = $_POST['session'];
	@$deta = $_POST['details'];


	$query = mysqli_query($con, "INSERT INTO `assignment_db`(`name`, `subject`, `desc`, `file`, `url`,`login_id`,`details`) VALUES ('$name','$sub','$des','$fname','$furl','$sess','$deta')");
	
if($query)
{
	$response['success'] = 1;
	$response['message'] = "Assignment application submitted!";

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