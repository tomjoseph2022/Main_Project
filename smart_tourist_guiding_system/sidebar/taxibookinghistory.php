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
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<style>
		td,th {
			border: 1px solid white;
			text-align: center;
			padding: 8px;
		}
		.mycustomthead{
			background-color: #306dfc;
			color: white;
			border: none;
			margin: 0 0 30px 0;
			border-radius: 10px;
		}
		.card table {
			border:none;
			margin: 0 10px 0 0;
		}
		.card table tr{
			margin-right: 5px;
		}
		.card table td{
			margin-top: 10px;
			border: none;
			background-color: whitesmoke;
			margin-right: 20px;
			border-right: 1px solid white;
			border-bottom: 2px solid white;
		}
		.cust-btn{
			border-radius: 20px;
			width: 80px;
			height: 35px;
			border: none;
			background-color: #5c4aC7;
			color: white;
		}.cust-btn:hover{
			background-color: aqua;
			color:red;
			font-style: italic;
			font-weight: bold;
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
					<h2>Cab Booking History</h2>
					
					 
					
				</div>
				<div class="card">
					
					 <table style="font-family: arial,sans-serif;border-collapse: collapse;width: 100%;"> 

                                        <tr class="mycustomthead">

	                                         <!-- <th><center> Tourist Name</center></th> -->
	           
					                         <th><center> Booked Driver Name</center></th>
	                                         <th><center> Booking Time</center></th>
	                                         
	                                         <th><center> Beginning</center></th>
	                                         <th><center>Destination</center></th>
	                                         <th><center>Booking Date</center></th>
	                                         <th><center>Booking Time</center></th>
	                                         <th><center>Booked Time</center></th>
	                                         <th><center>Total Amount</center></th>
											 <th><center>Payment Status</center></th>
	                                         <th><center>Request status</center></th>
	                                         

	                     
	                                         <!-- <th><center>Pay</center></th> -->
                                         

                                        </tr>

                                         <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $query="SELECT * from tbl_cab_details JOIN tbl_cab_booking on tbl_cab_booking.driver_id = tbl_cab_details.login_id JOIN tbl_registration on tbl_registration.login_id=tbl_cab_booking.driver_id join tbl_cab_payment on tbl_cab_payment.driver_id=tbl_cab_booking.driver_id;";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             $stat=$data['status'];
                                            ?>

                                                <tr>

                                                 
                                                  <!-- <td><?php echo $data['touristname'];?></td> -->


                                                  <td><?php echo $data['firstname'].' '.$data['lastname'];?></td>

                                                  <td><?php echo $data['booking_time'];?></td>

                                                  <td><?php echo $data['beginning'];?></td>

                                                  <td><?php echo $data['destination'];?></td>

                                                  <td><?php echo $data['booking_date'];?></td>

                                                   <td><?php echo $data['booking_time'];?></td>

                                                   <td><?php echo $data['booked_date'];?></td>

                                                  <td style="font-size: 20px;"><?php
                                                   $kilo= $data['kilomters'];
                                                   $cost=$data['cab_charge'];
                                                   $total= $kilo * $cost;
                                                   echo '<b>'.$total.'</b>';

                                               			?>
                                               				

                                               	  </td>

												  <td>
													<?php
													$pstat=$data['payment_status'];
													if($pstat == 0){
														echo 'Pending';
													}
													else{
														echo 'Paid';

													 }



													?>
												  </td>

                                                  

                                                  

                                                  

                                                  <td><center> <?php if ($a==$stat)
                                                                 {echo"Not Checked";}
                                                                 else if ($b==$stat)
                                                                 {echo"Accepted";}
                                                                 else{echo"Rejected";}?>
                                       
                                                                 </center>
                                                  </td>
                                                  <td>
													<?php
													$cid=$data['cabbook_id'];

													?>
                                                  	<center> <?php
													$pstat=$data['payment_status'];
													 if ($b==$stat && $pstat!=1)
                                                     { ?><a href="taxipayment.php?amount=<?php echo $total ?>&&cid=<?php echo $cid   ?>"> <button class="cust-btn">Pay</button></a> <?php
                                                     }
                                                                
                                                    else{echo"";}?>

                                                  </td> 



                                                                   

                                                   
                                              <?php  
                                            }
                                          ?>
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
