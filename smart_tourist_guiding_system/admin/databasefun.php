<?php
	 include 'connection.php';
     
//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["login_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["login_id"];
					 $eml=$_GET["eml"];
					 $data=1;

		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          //header("location:testtouristlist.php");
          header("location:usersuccessemail.php?eml=$eml");
						
			}
			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["login_rdid"])){
					 $condition=$_GET["login_rdid"];
					 $eml=$_GET["eml"];
					 $data=2;


		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          //header("location:testtouristlist.php");
          header("location:userrejectmail.php?eml=$eml");
						
			}
			//<<<<<<<<<<<<<=================== guide verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["glogin_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["glogin_id"];
					 $eml=$_GET['eml'];
					 $data=1;

		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
         // header("location:testguidelist.php");
          header("location:guidesuccessemail.php?eml=$eml");
						
			}
			//<<<<<<<<<<<<<=================== guide verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["glogin_rdid"])){
					 $condition=$_GET["glogin_rdid"];
					 $eml=$_GET['eml'];
					 $data=2;


		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
         // header("location:testguidelist.php");
           header("location:guiderejectemail.php?eml=$eml");
						
			}

			//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<driver verification>>>>>>>>>>>>>
			if(isset($_GET["dlogin_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["dlogin_id"];
					 $eml=$_GET['eml'];
					 $data=1;

		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          //header("location:testdriver.php");
          header("location:driversucessemail.php?eml=$eml");
						
			}
			//<<<<<<<<<<<<<=================== driver verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["dlogin_rdid"])){
					 $condition=$_GET["dlogin_rdid"];
					 $eml=$_GET['eml'];
					 $data=2;


		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          //header("location:testdriver.php");
          header("location:driverrejectemail.php?eml=$eml");
						
			}

			//<<<<<<<<<<<<<=================== contact verification=====================>>>>>>>>>>>>>>>>>>>>>>>>>>

			if(isset($_GET["contact_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["contact_id"];
					 $data=1;

		 
	      $sqlll="update tbl_contact set contact_status='$data' where contact_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:contactlist.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["contact_rdid"])){
					 $condition=$_GET["contact_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_contact set contact_status='$data' where contact_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:contactlist.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist booking verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>


			
			if(isset($_GET["loginb_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["loginb_id"];
					 $data=1;

		 
	      $query="update tbl_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $query);
          header("location:bookinglist.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["loginb_rdid"])){
					 $condition=$_GET["loginb_rdid"];
					 $data=2;


		 
	      $query1="update tbl_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $query1);
          header("location:bookinglist.php");
						
			}


//<<<<<<<<<<<<<=================== tourist feedback verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["felog_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["felog_id"];
					 $data=1;

		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:touristfeedback.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist feedback verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["felog_rdid"])){
					 $condition=$_GET["felog_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:touristfeedback.php");
						
			}

			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["loginb_rdid"])){
					 $condition=$_GET["loginb_rdid"];
					 $data=2;


		 
	      $query1="update tbl_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $query1);
          header("location:bookinglist.php");
						
			}


//<<<<<<<<<<<<<=================== guide feedback verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["fegulog_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["fegulog_id"];
					 $data=1;

		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:guidefeedback.php");
						
			}
			//<<<<<<<<<<<<<=================== guide feedback verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["fegulog_rdid"])){
					 $condition=$_GET["fegulog_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:guidefeedback.php");
						
			}

			//<<<<<<<<<<<<<=================== conatct verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["contact_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["contact_id"];
					 $data=1;

		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:contactview.php");
						
			}
			//<<<<<<<<<<<<<=================== contact verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["contact_rdid"])){
					 $condition=$_GET["contact_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:contactview.php");
						
			}
			//<<<<<<<<<<<<<=================== package  drop=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["pack_id"])){
					 $condition=$_GET["pack_id"];
					 $data=1;
					 

	      $sqlll="update tbl_package set package_status='$data' where package_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:packagelist.php");
						
			}
			//<<<<<<<<<<<<<=================== Place verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["plogin_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["plogin_id"];
					 $data=1;

		 
	      $sqlll="update tbl_place set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:customtable.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["plogin_rdid"])){
					 $condition=$_GET["plogin_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_place set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:customtable.php");
						
			}

?>
