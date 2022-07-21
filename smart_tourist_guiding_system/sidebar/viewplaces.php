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
		<title>Smart Tourist Guiding System</title>
		<link rel="stylesheet" href="css/packagestyle.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
  <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


/* Caption text */

/* Number text (1/3 etc) */


/* The dots/bullets/indicators */

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}.card1{
	box-shadow: 0 10px 10px 0;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
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
			<?php
 			$uname=$_SESSION['login_id'];
			$sql="select * from tbl_regpics where login_id='$uname'";
	            $res =mysqli_query($con ,$sql);
	            $row=mysqli_fetch_array($res);
	            $imageURL='image/'.$row["prof_img"];
			?>
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="<?php echo $imageURL; ?>" alt="">
						<?php


						           $uname=$_SESSION['login_id'];
						                  
						            $query="select * from tbl_registration where login_id='$uname'";
						                  //$query = “select * from tbl_login";
						            $result = mysqli_query($con ,$query);
						             while($row=mysqli_fetch_array($result))
						           	{
						         
						           
						           
						           $first=$row['firstname'];
						           $last=$row['lastname'];
						         
						           	}
						?>
						<p>
							<?php
							 echo "$first $last";
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
					<li class="item">
						<a href="viewplaces.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>View Places</span>
						</a>
					</li>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Packages <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="adventurepackage.php"><i class="fas fa-envelope"></i><span>Adventure Tour Package</span></a>
							<a href="singletourpackage.php"><i class="fas fa-envelope-square"></i><span>Single Tour Package</span></a>
							<a href="familytourpackage.php"><i class="fas fa-envelope"></i><span>Family Tour Package</span></a>
							<a href="grouptourpackage.php"><i class="fas fa-envelope-square"></i><span>Group Tour Package</span></a>
							
						</div>
					</li>
					<li class="item" id="contact">
						<a href="bookhistory.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Booking History</i></span>
						</a>
						
					</li>
					<li class="item" id="contact">
						<a href="guidebookinghistory.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Guide Booking History</i></span>
						</a>
						
					</li>
					<li class="item" id="contact">
						<a href="guideview.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Guides</i></span>
						</a>
						
					</li>
					
					<li class="item" id="contact">
						<a href="feedback.php" class="menu-btn">
							<i class="fas fa-phone"></i></i><span>Feedback</i></span>
						</a>
						
					</li>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About</span>
						</a>
					</li>
					
				</div>
			</div>
			<!--sidebar end-->
			

    			

                  

			<!--main container start-->
			<div class="main-container" style="background-color:whitesmoke	
			">
				<div class="card">
					<?php
					$uname=$_SESSION['login_id'] ;
            		 
             			?>
					<p><center><h1 style="color:#145A32;">Welcome To Smart Tourist Guiding System</h1></center></p>
				</div>
				<div class="card">
					<h2>View Places</h2>
					
					
				</div>




<?php 

$sql= "select tbl_registration.firstname,lastname,emails,phone,tbl_place.place_name,place_district,place_image1,place_image2,place_image3,place_image4 from tbl_registration,tbl_place where tbl_registration.login_id=tbl_place.login_id and status in ('0','1');";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
    	 $imageURL='../guide/place/'.$row["place_image1"];
    	  $imageURLL='../guide/place/'.$row["place_image2"];
    	  $imageURLLL='../guide/place/'.$row["place_image3"];
    	   $imageURLLLL='../guide/place/'.$row["place_image4"];
    	?>
    	<div class="card1" >
					<center><h2><?php echo ($row['place_name']);?></h2></center>
					<img src="<?php echo $imageURL; ?>"  style=" border-radius: 20%;margin-left: 20px;margin-top: -11px;" width="16%"; height="150px">

     
    					
					
					
					<p style="margin-top:-140px;font-size: 19px;margin-left: 400px;margin-top: -120px;">
						<i class="far fa-flag">&nbsp&nbsp</i><label style="color:#00802b">Place :</label><?php echo ($row['place_name']);?><br>
					<i class="fas fa-clock">&nbsp&nbsp</i><label style="color:#00802b">District  :</label>&nbsp <?php echo ($row['place_district']);?> <br>
					<i class="fas fa-cloud">&nbsp&nbsp</i><label style="color:#00802b">Uploaded By  :</label> &nbsp<?php echo ($row['firstname'].''.$row['lastname']);?>  <br>
					
					<i class="fas fa-map-marked-alt">&nbsp&nbsp</i><label style="color:#00802b">Contact :</label>&nbsp<?php echo ($row['phone']);?> <br>
					<i class="fas fa-hiking">&nbsp&nbsp</i><label style="color:#00802b">Email :</label>&nbsp<?php echo ($row['emails']);?> <br>

					<marquee behavior="scroll" direction="left" scrollamount="15" width="100%" style="margin-left: 280px;margin-top: -100px;">
						<img src="<?php echo $imageURLL; ?>" style="border-radius: 20px;width: 180px;height: 150px;"  >&nbsp &nbsp
						<img src="<?php echo $imageURLLL; ?>" style="border-radius: 20px;width: 180px;height: 150px;"  >&nbsp &nbsp
						<img src="<?php echo $imageURLLLL; ?>"  style="border-radius: 20px;width: 180px;height: 150px;"  >&nbsp &nbsp
					</marquee>	
					
				
				
				<!-- 	<a href="packagedetails.php?package_id=<?php echo $row['package_id'];?>"> -->                           
					<!-- <button style="width: 150px;height: 38px;margin-left: 550px;margin-top: -300px; border-radius: 10px;background-color: yellow;font-size: 20px;font-weight: bold;color: red;" type="submit" name="viewpackage">View Package</button></a> -->

				
        </p>

		    </div>



        

		
			<!--main container end-->

			<?php

        
    }
} else {
    echo "No record exists!!";
}	?>

</div>
<br>
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
