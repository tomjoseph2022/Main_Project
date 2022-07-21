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
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

		<style>
			
	.card2{
		margin: 10px 5px 5px 5px;
		background-color: whitesmoke;
	}
	.card2 h2{
		margin: 5px 10px 5px 10px;
		background-color: white;
		text-align: center;
		justify-content: center;
		padding: 5px 0 0 0 ;
		border-radius: 20px;
		display: flex;
	}
	.cardall{
		display: flex;
		background-color: white;
	}
	.cardimg{
		margin: 0 10px 5px 100px;
		padding: 10px 10px 20px 10px;
		display: flex;


	}
	.cardimg img{
		border-radius: 10px;
		height: 200px;
		width: 230px;
		box-shadow: 0 20px 30px 0;

	}
	.cardimg a{
		position: relative;
		margin: 100px 30px 30px 5px;
/*		padding-bottom: 25px;*/
	}
	.cardimg input{

	}
	.carddtls{
		text-align: left;
		display: inline-block;
		width: 350px;
		height: 200px;
		justify-content: center;
		padding: 10px 5px 10px 80px;
		margin: 30px 0 0 100px;


	}
		.carddtls i{
			align-content: initial;
	}
		.carddtls label{
			display: inline-block;
			text-align: left;
			padding: 0 0 5px 0;


	}
	.cardbtn {
		display: flex;
		text-align: right;
		position: relative;
		right: 0px;
		bottom: 0px;
		top: 170px;
		left: 50px;
		margin: 30px 0 10px 100px;

	}
	.cardbtn1{
		width: 100px;
		height: 30px;
		border-radius: 10px;
		border: none;
		background-color: bisque;
		margin: 0 10px 0 0;
	}
	.cardbtn2{
		width: 100px;
		height: 30px;
		border-radius: 10px;
		border: none;
		background-color: green;
	}
	.cardbtn2 input{
		text-decoration: none;
		border: none;
		margin: 6px 13px 5px 8px;
		background-color: green;
		color: white;
		font-weight: bold;
	}
	.cardbtn1 button{
		border: none;
		margin: 6px 13px 5px 8px;
		background-color: bisque;
		font-weight: bold;
	} 

		</style>
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

			<!--sidebar start-->
			<?php include 'sidebar.php' ?>
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
					<h2>Taxies Available</h2>
					
					
				</div>

<?php 
$sql= "SELECT tbl_registration.*,tbl_cab_details.*,tbl_login.* from tbl_registration,tbl_cab_details,tbl_login where tbl_login.login_id=tbl_registration.login_id and tbl_registration.login_id=tbl_cab_details.login_id;";	
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
      $imageURLL='/smart_Tourist_Guiding_System/driver/api/driver_cab_pics/'.$row["carimg"];
      //$imageURLL=''
    	?>
    	<div class="card2" >
			<h2 ><?php echo $row['cab_type']?></h2>
			<div class="cardall">
				<div class="cardimg">
					<img src="<?php echo $imageURLL; ?>">
					
				</div>
				<div class="carddtls">
					<i class="fa fa-user">&nbsp&nbsp</i>
					<label >Name of Driver :</label><?php echo ($row['firstname'])." ".($row['lastname']);?><br>

					<i class="fas fa-chair">&nbsp&nbsp</i>
					<label >No.of Seats  :</label>&nbsp <?php echo ($row['cab_no_seats']);?> <br>

					<i class="fa fa-car">&nbsp&nbsp</i>
					<label >Cab Manufacturer  :</label> &nbsp <?php echo ($row['cab_company']);?> <br>
					<i class="fas fa-car-side">&nbsp&nbsp</i>
					<label >Cab Model  :</label> &nbsp <?php echo ($row['cab_model']);?> <br>
							
					<!-- <i class="fas fa-map-marked-alt">&nbsp&nbsp</i>
					<label >Cab charge per Kilometre  :</label>&nbsp<?php echo $row['cab_charge'].','.$row['cab_type'];?> <br> -->
					    

					<i class='fa fa-rupee'></i>&nbsp&nbsp</i>
					<label>Payment Per Hour :</label>&nbsp<?php echo ($row['cab_charge']);?> INR <br>
				</div>
				<div class="cardbtn">
					<div class="cardbtn1">
						<a href="viewtaxidetails.php?login_id=<?php echo $row['login_id'];?>">
						<button>View Taxi</button></a>
					</div>
					<div class="cardbtn2">
						<a href="taxibooking1.php?id=<?php echo $row['login_id']; ?>">
						<input type="submit" value="Send Request" name=""></a>
					</div>
				</div>
			</div>
		</div>

			<?php

        
    }
} else {
    echo "No record exists!!";
}	?>


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
