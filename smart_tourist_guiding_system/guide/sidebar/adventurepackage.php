<?php

include 'connection.php';
session_start();
	if(empty($_SESSION['login_id']))
	{
		header("location:../travel website/login.php");
	}
?>
<?php


           $uname=$_SESSION['login_id'];
                  
            $query="select * from tbl_registration where login_id='$uname'";
                  //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
             while($row=mysqli_fetch_array($result))
           	{
         
           $userids=$row['login_id'];
           $user=$row['username'];
           $first=$row['firstname'];
           $last=$row['lastname'];
         
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
					<ul>
						<li><a href="#"><i class="fas fa-search"></i></a></li>
						<li><a href="#"><i class="fas fa-bell"></i></a></li>
						<li><a href="logout.php"><i class="fas fa-power-off"></i></a></li>
					</ul>
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
			<div class="main-container">
				<div class="card">
					<?php
					$uname=$_SESSION['login_id'] ;
            		 
             			?>
					<p><center><h1 style="color:#145A32;">Welcome To Smart Tourist Guiding System</h1></center></p>
				</div>
				<div class="card">
					<h2>Adventure Tour Packages</h2>
					
					
				</div>

<?php 

$sql= "SELECT * FROM tbl_package where package_type='adventure_Tour'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
    	 $imageURL='package/'.$row["package_image"];
    	?>
    	<div class="card1" style="background-color:#1affff">
					<center><h2><?php echo ($row['package_name']);?></h2></center>
					<<img src="<?php echo $imageURL; ?>"  style=" border-radius: 50%;margin-left: 20px;margin-top: -20px;" width="16%">

     
    				<a href="booking.php?package_id=<?php echo $row['package_id'];?>">
					<input type="submit" value="Book Now" style="width: 150px;height: 38px; border-radius: 10px;margin-left: 18px ;background-color: orange;color: blue;font-size: 20px;font-weight: bold;" name=""></a>	
					
					
					<p style="margin-top:-140px;font-size: 19px;margin-left: 460px;">
						<i class="far fa-flag">&nbsp&nbsp</i><label style="color:#00802b">Place :</label>&nbsp  <?php echo ($row['package_location']);?><br>
					<i class="fas fa-clock">&nbsp&nbsp</i><label style="color:#00802b">Trek Duration  :</label>&nbsp  <?php echo ($row['package_duration']);?><br>
					<i class="fas fa-cloud">&nbsp&nbsp</i><label style="color:#00802b">Best Season  :</label> &nbsp  <?php echo ($row['package_season']);?><br>
					
					<i class="fas fa-map-marked-alt">&nbsp&nbsp</i><label style="color:#00802b">Package Type :</label>&nbsp  <?php echo ($row['package_type']);?><br>
					<i class="fas fa-hiking">&nbsp&nbsp</i><label style="color:#00802b">Package Price :</label> <?php echo ($row['package_price']);?><br>
				
				
					<a href="packagedetails.php?package_id=<?php echo $row['package_id'];?>">                           
					<button style="width: 150px;height: 38px;margin-left: 550px;margin-top: -300px; border-radius: 10px;background-color: yellow;font-size: 20px;font-weight: bold;color: red;" type="submit" name="viewpackage">View Package</button></a>

				
                           </p>
				</div>
				<?php

        
    }
} else {
    echo "No record exists!!";
}	?>
			
				








				
				
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
