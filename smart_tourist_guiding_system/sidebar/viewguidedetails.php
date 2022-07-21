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
				<div class="title">Touist <span>Home</span></div>
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
			$datas=mysqli_fetch_array($result);
			$first=$datas['firstname'];
			$last=$datas['lastname'];

			?>

			<!--header menu end-->
			<!--sidebar start-->
			<?php include 'sidebar.php' ?>
			<!--sidebar end-->
			<?php
 			$ids=$_GET['login_id'];
			$sql="select * from tbl_regpics where login_id='$ids'";
            $res =mysqli_query($con ,$sql);
            $row=mysqli_fetch_array($res);
            $imageURLL='../guide/image/'.$row["prof_img"];
		?>
		<?php
 			$ids=$_GET['login_id'];
			$sql="select * from tbl_registration where login_id='$ids'";
            $res =mysqli_query($con ,$sql);
            $data=mysqli_fetch_array($res);
            
		?>
		<?php
 			$ids=$_GET['login_id'];
			$sql="select * from tbl_guidedetails where login_id='$ids'";
            $resu =mysqli_query($con ,$sql);
            $dat=mysqli_fetch_array($resu);
            
		?>
		<?php
			$ids=$_GET['login_id'];
			$sqll="select * from tbl_login where login_id='$ids'";
			$resul =mysqli_query($con ,$sqll);
			 $datt=mysqli_fetch_array($resul);
				            
		?>
		
			<!--main container start-->
			<div class="main-container">
				<div class="card">
					<form class="contact100-form validate-form">
						<span class="contact100-form-title">
							Guide Details
						</span>
						 <div class="wrap-input100 ">
						 <center><img src="<?php echo $imageURLL; ?>" class="img-circle" style=" border-radius: 20%;" width="18%"></center>
                           <!-- <input type="button" value="change profile" class="contact200-form-btn" name="change profile"> -->
                           <span class="focus-input100"></span>
                       </div>
					  


                      <label class="label-input100" for="first-name">Your Name *</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="first-name" class="input100" type="text"  name="first-name" value="<?php echo $data['firstname'].$data['lastname'] ?>" readonly>
                          <span class="focus-input100"></span>
                      </div>

                       <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="text" name="last-name" value="<?php echo $dat['gd_knowledge'] ?>" readonly>
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input1001" for="first-name">Guiding Knowledge *</label>
                       
                         <label class="label-input100" for="email">Email Address *</label>
                       <div class="wrap-input100 validate-input">
                             <input id="email" class="input100" type="text" name="email" value="<?php echo $data['emails'] ?>" readonly>
                             <span class="focus-input100"></span>
                        </div>
                        

                          <label class="label-input100" for="first-name">Phone *</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="first-name" class="input100" type="text"  name="first-name" value="<?php echo $data['phone'] ?>" readonly>
                          <span class="focus-input100"></span>
                      </div>
                      
                      <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="text" name="last-name" placeholder="Department" value="<?php echo $datt['username'] ?>" readonly>
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input1001" for="first-name">Username *</label>
                                               
                      

                        <label class="label-input100" for="first-name">Guiding District *</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="first-name" class="input100" type="text"  name="first-name" value="<?php echo $dat['gd_district'] ?>" readonly>
                          <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="text" name="last-name" value="<?php echo $dat['gd_payment'] ?>" readonly>
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input1001" for="first-name">Payment *</label>

                          <label class="label-input100" for="first-name">Language Known</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="first-name" class="input100" type="text"  name="first-name" value="<?php echo $dat['gd_mlang'],',',$dat['gd_flang'],',',$dat['gd_slang'],',',$dat['gd_tlang'] ?>" readonly>
                          <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="text" name="last-name" placeholder="Department" value="<?php echo $dat['gd_experiance'] ?>" readonly>
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input1001" for="first-name">Guiding Experiance *</label>
                        
                       <label class="label-input100" for="message">Description *</label>
                       	<div class="wrap-input100 validate-input">
                           <input id="email" class="input100" type="text" name="email" value=" <?php echo $dat['gd_desc'] ?>" readonly>
                            <span class="focus-input100"></span>
                        </div>

						<div class="container-contact100-form-btn">

					   <a href="guidebooking.php?id=<?php echo $data['login_id']; ?>"><input type="button"name="edit" value="Book Now" class="contact100-form-btn"></a>
							
						</div>
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

