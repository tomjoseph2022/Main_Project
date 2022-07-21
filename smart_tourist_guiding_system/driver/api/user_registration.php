<?php 

include 'connection.php';

	
	@$name = 'an';
	@$email = 'a@';
	@$gender = 'male';
	@$mobile = 95862;
	@$registerno = 754;
	$roleid=1;
	$year=2022;
	//@$username = 'efdgcb';
	//@$password = 'zsdxfcv';
	//@$flag = $_POST['flag'];


	/*
	@$name = $_POST['name'];
	@$email = $_POST['email_id'];
	@$gender = $_POST['gender'];
	@$mobile = $_POST['mobile_num'];
	@$registerno = $_POST['register_no'];
	@$username = $_POST['username'];
	@$password = $_POST['password'];
	@$flag = $_POST['flag'];
*/
	
	
		
	    $query= mysqli_query($con, "INSERT INTO `stud_detail`(`nme`, `email`, `mobile`, `gender`,`role_id`, `register_no`, `year`) VALUES ('$name','$email','$mobile','$gender','$roleid','$registerno','$year')");

	

		if($query)
		{
			$response['success'] = 1;
			$response['message'] = "Your registration is successfully completed!";

			echo json_encode($response);

		}
		else
		{
			$response['success'] = 0;
			$response['message'] = "Error occured!";

			echo json_encode($response);

		}






?>