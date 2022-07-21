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
	 //@$cit = $_POST['city'];
	 @$pinc = $_POST['pin'];
	 @$user = $_POST['username'];
	 @$pass = $_POST['password'];


	
	//@$flag = $_POST['flag'];

	//@$register_type = $_POST['regtype'];
	//@$year = "0";
	 $roll="driver";

	 mysqli_query($con, "insert into tbl_login(username,password,role) values ('$user','$pass','$roll')");

	     $roleid =mysqli_insert_id($con);

             
	           
	$queryy = mysqli_query($con, "INSERT INTO tbl_registration(firstname,lastname,address,emails,state,pincode,dobs,phone,gender,login_id) VALUES ('$name','$lastname','$add','$emil','$stst','$pinc','$dobs','$num','$gen','$roleid')");

	//$sqll="INSERT INTO tbl_regpics(prof_img,pro_proof,proof_type,login_id) VALUES ('personicon.jpg','Not Uploaded','Not Uploaded','$roleid')";
       		//mysqli_query($con, $sqll);
    $sqlll="INSERT INTO tbl_driver_profle(image, image_url, login_id) VALUES ('Not Uploaded','Not Uploaded','$roleid')";
    mysqli_query($con, $sqlll);


		 	
	   

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