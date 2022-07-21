<?php 

include 'connection.php';

if(isset($_POST['doc1']))
{
	@$name = $_POST['doc1'];
	@$sub = $_POST['doc2'];
	@$des = $_POST['doc3'];
	@$fname = $_POST['file_name'];
	//@$furl = $_POST['file_name_url'];
	@$sess = $_POST['session'];
	//@$deta = $_POST['details'];


	//$query = mysqli_query($con, "INSERT INTO `assignment_db`(`name`, `subject`, `desc`, `file`, `url`,`login_id`,`details`) VALUES ('$name','$sub','$des','$fname','$furl','$sess','$deta')");
	$query = mysqli_query($con,"INSERT INTO tbl_car_document(rc_book,insurence,license,license_img,login_id) VALUES ('$name','$sub','$des','$fname','$sess')");
	
if($query)
{
	$response['success'] = 1;
	$response['message'] = "Car Documents Submitted!";

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