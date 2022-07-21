<?php 

include 'connection.php';

if(isset($_POST['carmanufature']))
{
	@$carmen = $_POST['carmanufature'];
	@$mod = $_POST['carmodel'];
	@$col = $_POST['carcolor'];
	@$regno = $_POST['carregno'];
	@$carty = $_POST['cartype'];
	@$carseat = $_POST['carseats'];
	@$carchg = $_POST['carcharge'];
	@$carimg = $_POST['carimage'];
	@$carsess = $_POST['session'];


	$query = mysqli_query($con, "INSERT INTO `tbl_cab_details`(`cab_company`, `cab_model`, `cab_color`, `cab_reg_no`, `cab_type`, `cab_no_seats`, `cab_charge`,`carimg`,`login_id`) VALUES ('$carmen','$mod','$col','$regno','$carty','$carseat','$carchg','$carimg','$carsess')");
	
if($query)
{
	$response['success'] = 1;
	$response['message'] = "Car Details Submitted Successfully!";

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