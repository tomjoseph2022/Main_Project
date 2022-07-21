<?php

include 'connection.php';
session_start();
	if(empty($_SESSION['login_id']))
	{
		header("location:../travel website/login.php");
	}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Smart Touirst Guiding System </title>
		<link rel="stylesheet" href="css/profilecss.css"> 
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
			<div class="header-menu">
				<div class="title">Tourist <span>Home</span></div>
				<img src="images/2.png" alt="" style=" border-radius: 50%;margin-left: 100px;" width="2.9%">
				<div class="title" style="margin-left: -210px;">Smart Tourist Guiding System</div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<?php include "icon.php" ?>
				</div>
			</div>
			<?php
 			$uname=$_SESSION['login_id'];
			$sql="select * from tbl_regpics where login_id='$uname'";
            $res =mysqli_query($con ,$sql);
            $row=mysqli_fetch_array($res);
            $imageURL='image/'.$row["prof_img"];
		?>
		<?php


			$uname=$_SESSION['login_id'];

			$query="select * from tbl_registration where login_id='$uname'";
			//$query = “select * from tbl_login";
			$result = mysqli_query($con ,$query);
			$data=mysqli_fetch_array($result);
			$first=$data['firstname'];
			$last=$data['lastname'];

			?>
			<?php


			$uname=$_SESSION['login_id'];

			$query1="select * from tbl_login where login_id='$uname'";
			//$query = “select * from tbl_login";
			$result1 = mysqli_query($con ,$query1);
			$data1=mysqli_fetch_array($result1);
			

			?>


			<!--header menu end-->
			<!--sidebar start-->
			<?php include 'sidebar.php' ?>
			<!--sidebar end-->
			<!--main container start-->
			<div class="main-container">
				<div class="card" style="width:1000px;margin-left:120px">
					<form class="contact100-form validate-form">
						<span class="contact100-form-title" style="color:red">
							<?php echo "$first" ?>'s Profile Not Completed
						</span>
						 


                     
                      
                       <label class="label-input100" for="message">Warning !!!!!</label>
                       		<div class="wrap-input100 validate-input" style="background:#ff9966">
                             	<input id="text"  type="text" name="email"  value="Please Upload Your Proof Otherwise You Can't Access the Website !!!" readonly style="font-size:30px;width:930px;height:100px;background: #cc3300;">
                             	<span class="focus-input100"></span>
                        	</div>


                        	 
                        

                          
						<div class="container-contact100-form-btn">


					   <a href="editdetails.php"><br><input type="button"name="edit" style="border-radius:0px" value="Go to Profile" class="contact100-form-btn"></a><br>
							
						</div><br>
					</form>
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script>

	</body>
</html>

