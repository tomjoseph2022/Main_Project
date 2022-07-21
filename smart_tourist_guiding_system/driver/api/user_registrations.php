<?php 

include 'connection.php';

if(isset($_POST['name']))
{



	 @$name = $_POST['name'];
	 @$lastname = $_POST['lname'];
	 @$dobs = $_POST['dob'];
	 @$add = $_POST['address'];
	 @$emil = $_POST['email'];
	 @$num = $_POST['number'];
	 @$stst = $_POST['state'];
	 @$gen = $_POST['gender'];
	 @$cit = $_POST['city'];
	 @$pinc = $_POST['pin'];
	 @$user = $_POST['username'];
	 @$pass = $_POST['password'];


	
	//@$flag = $_POST['flag'];

	//@$register_type = $_POST['regtype'];
	//@$year = "0";
	 $role="driver";

	 mysqli_query($con, "INSERT INTO driverlogin(name, password, role) VALUES ('$user','$pass','$role')");

	     $roleid =mysqli_insert_id($con);

             
	           
$queryy = mysqli_query($con, "INSERT INTO driver(name,last_name,dob,address,email,numbers,state,gender,city,pin,username,password,login_id) VALUES ('$name','$lastname','$dobs','$add','$emil','$num','$stst','$gen','$cit','$pinc','$user','$pass','$roleid')");


		 	
	   

		if($queryy)
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
}
//else
// {
// 	$response['success'] = 0;
// 	$response['message'] = "No access!";

// 	echo json_encode($response);
// }		




?>