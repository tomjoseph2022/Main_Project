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
		<script>
			function getISODate(){
			var d = new Date();
			return d.getFullYear() + '-' + 
			          ('0' + (d.getMonth()+1)).slice(-2) + '-' +
			          ('0' + d.getDate()).slice(-2);
			}

			window.onload = function() {
			  document.getElementById('minToday').setAttribute('min',getISODate());
			}

			


		</script>
	</head>
	<style>
		td,th {
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
		}

		.button3 {
		  background-color: #008CBA; 
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
		.mycustomthead{
			background-color: #5c4aC7;
			color: white;
			border: none;
			margin: 0 0 30px 0;
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
			border-right: 1px solid white;
			border-bottom: 2px solid white;
		}
		.button4 {
		  background-color: slategrey; 
		  border: none;
		  color: white;
		  padding: 15px 15px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
		.cust-btn{
			border-radius: 20px;
			width: 80px;
			height: 25px;
			border: none;
			background-color: #5c4aC7;
			color: white;
		}.cust-btn:hover{
			background-color: aliceblue;
			color:red;
			font-style: italic;
			font-weight: bold;
		}.accept{
			color: green;
			font-style: italic;
		}
		.reject{
			color: red;
			font-style: italic;
		}
	</style>
	<body>
	<?php

	$minn=date("Y-m-d");


	?>

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
					<h2>Guide Booking History</h2>
					
					 
					
				</div>
				<div class="card">
					
					 <table style="font-family: arial,sans-serif;border-collapse: collapse;width: 100%;"> 

                                        <tr class="mycustomthead">

	                                         <!-- <th><center> Tourist Name</center></th> -->
	           
					                         <th><center> Booked Guide Name</center></th>
	                                         <th><center> Guide Phone</center></th>
	                                         <th><center> Guide Email</center></th>
	                                         <th><center> Book Date Start</center></th>
	                                         <th><center>Book Date End</center></th>
											 <th><center>Total Hours</center></th>
											 <th><center>Total Charge</center></th>
											 <th><center>Book Date</center></th>
											 <th><center>Payment Status</center></th>
	                     
	                                         <th><center>Request Status</center></th>
                                         

                                        </tr>

                                         <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $query="SELECT tbl_registration.firstname,Lastname,emails,phone,gb_datef,gb_datee,tbl_guide_booking.guide_id,booked_date,status,tbl_guidedetails.gd_payment,tbl_guide_payment.payment_status
											from tbl_registration,tbl_guide_booking,tbl_guidedetails,tbl_guide_payment where tbl_registration.login_id=tbl_guide_booking.guide_id and tbl_guidedetails.login_id=tbl_guide_booking.guide_id and tbl_guide_payment.guide_id=tbl_guide_booking.guide_id and tbl_guide_booking.login_id='$uname' ";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             $stat=$data['status'];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['firstname'].''.$data['Lastname'];?></td>


                                                  <td><?php echo $data['emails'];?></td>

                                                  <td><?php echo $data['phone'];?></td>

                                                  <!-- <td><?php echo $data['gb_guide_email'];?></td> -->

                                                  <td><?php echo $data['gb_datef'];?></td>

                                                  <td><?php echo $data['gb_datee'];?></td>
												  <td>
													<?php    

															$date1 =$data['gb_datef'];
															$date2 = $data['gb_datee'];
															$timestamp1 = strtotime($date1);
															$timestamp2 = strtotime($date2);

															$hours=abs($timestamp2 - $timestamp1)/(60*60);

															echo $hours;

													?>

												  </td>


												  <td>
													<?php  
													$payment=$data['gd_payment'];

													$totalcharge=$hours * $payment;
													echo $totalcharge;



													?>
												  </td>






												  
												  <td><?php echo $data['booked_date'];?></td>

												  <td><?php
												  
												  $pstat= $data['payment_status'];
												  if($pstat==0){
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
                                                                 {
																?>
																<div class="accept">
																	<?php echo"Accepted";?>
																</div>
																<?php
																}else{?>
																	<div class="reject">
																	<?php echo"Rejected";?>
																</div>
																	<?php }?>
                                       
                                                                 </center>
                                                  </td>
                                                  <td>
                                                  	<center> <?php 
													$pstat= $data['payment_status'];
													if ($b==$stat && $pstat==0 )
                                                    { ?><a href="guidepayment.php?amt=<?php echo $totalcharge  ?>"> <button class="button3">Pay</button></a> <?php
                                                      }
                                                                
                                                    else{echo"";}?>

                                                  </td>

												  <td>
                                                  	<?php 

                                                  	$gid=$data['guide_id'];

                                                  	$enddate=$data['gb_datee'];
                                                  	$currenddate=$minn;
                                                  	if($currenddate == $enddate && $stat==1)
                                                  		{
                                                  			?>

                                                  			<a href="guideratingform.php?id=<?php echo $gid ?>"> <button class="button4">Feedback</button></a> 


                                                  	<?php

                                                  	}

                                                  	?>



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
