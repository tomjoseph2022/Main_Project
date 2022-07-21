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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<style>
			
	.card2{
		margin: 10px 5px 5px 5px;
		background-color: whitesmoke;
	}
	.card2 h2{
		margin: 5px 10px 5px 10px;
		background-color: ghostwhite;
		text-align: center;
		justify-content: center;
		padding: 5px 0 0 0 ;
		border-radius: 20px;
		display: flex;
	}
	.cardall{
		display: flex;
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
		box-shadow: 0 3px 3px 0;

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>

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
						                  
						            $query1="select * from tbl_registration where login_id='$uname'";
						                  //$query = “select * from tbl_login";
						            $result1 = mysqli_query($con ,$query1);
						            $rows=mysqli_fetch_array($result1);
						            $first=$rows['firstname'];
						            $last=$rows['lastname'];
						           	
						           	
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
						<a href="taxiview.php" class="menu-btn">
							<i class="fa fa-taxi"></i></i><span>Call a Cab</i></span>
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
			<div class="main-container" style="background-color:white
			">
				<div class="card">
					<?php
					$uname=$_SESSION['login_id'] ;
            		 
             			?>
					<p><center><h1 style="color:#145A32;">Welcome To Smart Tourist Guiding System</h1></center></p>
				</div>
				<div class="card">
					<h2>Guides Available</h2>
					
					
				</div>

<?php 

$sql= "select tbl_login.*,tbl_registration.*,tbl_guidedetails.*,tbl_regpics.* from tbl_login,tbl_registration,tbl_guidedetails,tbl_regpics where tbl_login.login_id=tbl_registration.login_id and tbl_registration.login_id=tbl_guidedetails.login_id and tbl_registration.login_id=tbl_regpics.login_id";	
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
      $imageURLL='../guide/image/'.$row["prof_img"];
	  $log=$row['login_id'];
    	?>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

		<script>


			$(function () {
				$(".rateyo").rateYo().on("rateyo.change", function (e, data) {
					var rating = data.rating;
					$(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
					$(this).parent().find('.result').text('rating :'+ rating);
					$(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
				});
			});

		</script>
    	<div class="card2" >
			<h2 ><?php echo ($row['firstname'].$row['lastname']);?></h2>
			<div class="cardall">
				<div class="cardimg">
					<img src="<?php echo $imageURLL; ?>">
					
				</div>
				<div class="carddtls">
					<i class="far fa-flag">&nbsp&nbsp</i>
					<label >Guiding Place :</label><?php echo ($row['gd_district']);?><br>

					<i class="fas fa-clock">&nbsp&nbsp</i>
					<label >Contact  :</label>&nbsp <?php echo ($row['phone']);?> <br>

					<i class="fas fa-cloud">&nbsp&nbsp</i>
					<label >Email  :</label> &nbsp <?php echo ($row['emails']);?> <br>
							
					<i class="fas fa-map-marked-alt">&nbsp&nbsp</i>
					<label >Language Known :</label>&nbsp<?php echo $row['gd_mlang'].','.$row['gd_flang'].','.$row['gd_slang'].','.$row['gd_tlang'];?> <br>

					<i class="fas fa-hiking">&nbsp&nbsp</i>
					<label>Payment Per Hour :</label>&nbsp<?php echo ($row['gd_payment']);?> INR <br>
					<?php

					$query2="select avg(rate) as rating,count(rate) as vote from tbl_guide_rating where guide_id='$log'";
					$result2=mysqli_query($con,$query2);
					$row2=mysqli_fetch_array($result2);
					$rat=$row2['rating'];
					$vot=$row2['vote'];
					?>

					 <div class="rateyo" id= "rating"
				         data-rateyo-rating="<?php echo $rat  ?>"
				         data-rateyo-num-stars="5"
				         data-rateyo-score="3">
				     </div>Total Review:<?php  echo $vot ?>
				</div>

				<div class="cardbtn">
					<div class="cardbtn1">
						<a href="viewguidedetails.php?login_id=<?php echo $row['login_id'];?>">
						<button>View Guide</button></a>
					</div>
					<div class="cardbtn2">
						<a href="guidebooking.php?id=<?php echo $row['login_id']; ?>">
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
