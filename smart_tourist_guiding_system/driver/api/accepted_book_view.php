<?php
include 'connection.php';

$data_list = array();
// @$userid=$_POST['key_user_id'];
@$userid=$_POST['leaid'];

$query=mysqli_query($con,"SELECT tbl_cab_booking.*,tbl_registration.* from tbl_cab_booking,tbl_registration where tbl_cab_booking.login_id=tbl_registration.login_id and tbl_cab_booking.status = 1 and tbl_cab_booking.driver_id='$userid'" );

/*$result=mysqli_query($connection,"SELECT group_list.group_name,group_list.group_id FROM group_list LEFT JOIN member ON group_list.group_id=member.group_id WHERE member.user_register_id='$user_id'");*/

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

