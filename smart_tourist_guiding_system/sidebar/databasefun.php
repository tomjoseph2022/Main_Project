<?php
	 include 'connection.php';
     
//<<<<<<<<<<<<<=================== tourist package cancellation=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["cid"])){
					 //$condition=$_GET;
					 $condition=$_GET["cid"];
					 $cond=$_GET["pid"];
					 $data=3;

		 
	      $sqlll="update tbl_booking set status='$data' where login_id='$condition' and package_id='$cond' ";

          mysqli_query($con, $sqlll);
          header("location:bookhistory.php");
          //header("location:approvalemail.php?eml=$eml");
      }



 ?>
						