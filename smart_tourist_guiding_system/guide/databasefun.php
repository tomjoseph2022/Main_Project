<?php
	 include 'connection.php';
     
//<<<<<<<<<<<<<=================== tourist Guide verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["login_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["login_id"];
					 $eml=$_GET['eml'];
					 $data=1;

		 
	      $sqlll="update tbl_guide_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          //header("location:bookhistory.php");
          header("location:approvalemail.php?eml=$eml");
						
			}
			//<<<<<<<<<<<<<=================== tourist  Guide verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["login_rdid"])){
					 $condition=$_GET["login_rdid"];
					  $eml=$_GET['eml'];
					 $data=2;


		 
	      $sqlll="update tbl_guide_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          //header("location:bookhistory.php");
          header("location:rejectionemail.php?eml=$eml");
						
			}
			

?>
