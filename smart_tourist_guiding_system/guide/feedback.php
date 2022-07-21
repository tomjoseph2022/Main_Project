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
		<link rel="stylesheet" href="css/contactstyle.css">
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
			<!--header menu end-->
			<!--sidebar start-->
			<?php
 			$uname=$_SESSION['login_id'];
			$sql="select * from tbl_regpics where login_id='$uname'";
	            $res =mysqli_query($con ,$sql);
	            $row=mysqli_fetch_array($res);
	            $imageURL='image/'.$row["prof_img"];
				$proof=$row['pro_proof'];
			?>
			<?php


           $uname=$_SESSION['login_id'];
                  
            $query="select * from tbl_registration where login_id='$uname'";
                  //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
            $row=mysqli_fetch_array($result);
            $first=$row['firstname'];
            $last=$row['lastname'];
		    $femail=$row['emails'];
		    $fphone=$row['phone'];
		    $flog=$row['login_id'];
           	
?>
			<div class="sidebar" style="background:#2F323A;">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="<?php echo $imageURL; ?>" alt="">
						<p>
							<?php
							 echo "$first $last"
							?>
						
						</p>
					</center>
					<li class="item">
						<a href="index.php" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="profile.php" class="menu-btn">
							<i class="fas fa-user-circle"></i><span>Profile</span>
						</a>
						
					</li>
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="messages">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Add Places</span>
						</a>
						
					</li>
					<?php
					
					

					}

					else
					{
						?>
					<li class="item" id="messages">
						<a href="addplaces.php" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Add Places</span>
						</a>
						
					</li>
					<?php

					}

					?>
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Bookings</i></span>
						</a>
						
					</li>
					<?php
					
					

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="bookhistory.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Bookings</i></span>
						</a>
						
					</li>
					<?php

					}

					?>

					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Guiding details</span>
						</a>
					</li>
					<?php
					
					

					}

					else
					{
						?>
					<li class="item">
						<a href="guidingdetails.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Guiding details</span>
						</a>
					</li>
					<?php

					}

					?>
					
					
					
					<li class="item">
						<a href="feedback.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Feedback</span>
						</a>
					</li>
					
					
					
					
					
					
				
					
				</div>
			</div>
			<!--sidebar end-->

			<!--main container start-->
			<div class="main-container">
				<div class="card">
					<form class="contact100-form validate-form" method="POST"  enctype="multipart/form-data">
						<span class="contact100-form-title">
							Feedback Us
						</span>
						<label class="label-input100" for="first-name">Your Name *</label>
						<div class="wrap-input100 rs1 validate-input">
							<input id="first-name" class="input100" type="text" name="first-name" value="<?php echo $row['firstname'] ?>" readonly >
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 rs1 validate-input">
							<input class="input100" type="text" name="last-name" value="<?php echo $row['lastname'] ?>" readonly>
							<span class="focus-input100"></span>
						</div>

						<label class="label-input100" for="email">Email Address *</label>
						<div class="wrap-input100 validate-input">
							<input id="email" class="input100" type="text" name="email" value="<?php echo $row['emails'] ?>" re>
							<span class="focus-input100"></span>
						</div>

						<label class="label-input100" for="phone">Phone Number</label>
						<div class="wrap-input100">
							<input id="phone" class="input100" type="text" name="phone" value="<?php echo $row['phone'] ?>" readonly>
							<span class="focus-input100"></span>
						</div>

						<label class="label-input100" for="message">Message *</label>
						<div class="wrap-input100 validate-input">
							<textarea id="message" class="input100" name="messagess" placeholder="Please enter your comments..."></textarea>
							<span class="focus-input100"></span>
						</div>


						<div class="container-contact100-form-btn">
							<button class="contact100-form-btn" name="click">
								<span>
									Submit
									<i class="zmdi zmdi-arrow-right m-l-8"></i>
								</span>
							</button>
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
<?php

   if(isset($_POST["click"]))

   {
      
    $fmess=$_POST["messagess"];



     
      $req = "insert into tbl_feedback(feed_message,feed_status,login_id) values ('$fmess','0','$flog')";

      
       
      mysqli_query($con,$req);

  



     }
     

?> 
