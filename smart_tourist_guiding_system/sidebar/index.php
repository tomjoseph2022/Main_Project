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
           
           $first=$row['firstname'];
           $last=$row['lastname'];
         
           	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Smart Tourist Guiding System</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<style>
			.banner{
			background-image: url(travel41.jpg);
			background: repeat;
			width: 100%;

			}.banner img{
				width:100%;
				height: 80%;
				opacity: 70%;
				

			}.hovertext{
				margin: -30% 0 0 0;
				z-index: -1;
			}.hovertext h1{
				font-weight: bold;
				color: blue;
				font-size: 60px;
			}.hovertext p{
				font-style: italic;
				font-size: 15px;
				font-weight: bold;
			}.hovertext h3{
				margin-bottom: 20px;
			}
			.expbtn{
				text-decoration: none;
				background-color:rgb(0, 191, 255);
				color: black;
				margin-left: 20px;
				padding: 10px 20px 10px 20px ;
				border-radius: 10px;
				z-index: 1;

			}.expbtn:hover{
				box-shadow: 10px 10px 10px 10px;
				color: lawngreen;
			}
		</style>
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header" style="background:#000000">
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
			<?php include 'sidebar.php' ?>
			<!--sidebar end-->
			

    

                  

			<!--main container start-->
			<div class="main-container">
				<div class="card">
					<?php
					$uname=$_SESSION['login_id'] ;
            		 
             ?>
					<p><center><h1 style="color:lightskyblue;">Welcome To Smart Tourist Guiding System</h1></center></p>
				</div>
				<div class="card">
					<h2>Hello <?php echo "$first $last" ?></h2>
					
					 
					
				</div>
				<div class="banner">
						<img src="travel41.jpg">
						<div class="hovertext">
							<h1>Welcome</h1>
							<p>Your journey begins here</p><br>
							<h3>Enjoy your journey</h3>
							<a href="viewplaces.php" class="expbtn">Explore Now</a>
						</div>
				</div>
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
