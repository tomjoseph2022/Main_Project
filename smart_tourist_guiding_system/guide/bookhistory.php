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
	</head>
	<style>
		td,th {
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
		}

		.button3 {
		  background-color: #4CAF50; 
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
		.button4 {
		  background-color: #f44336; 
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
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
			<?php include 'sidebar.php'?>
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
					<h2>Booking History</h2>
					
					 
					
				</div>
				<div class="card">
					
					 <table style="font-family: arial,sans-serif;border-collapse: collapse;width: 100%;"> 

                                         <tr style="border:2px solid black;">

	                                        <th><center> Tourist Name</center></th> 
	           
					                         <!-- <th><center> Booked Guide Name</center></th> -->
	                                         <th><center>E-mail</center></th>
	                                         <th><center>Phone</center></th>
	                                         <th><center>Book Date Start</center></th>
	                                         <th><center>Book Date End</center></th>
											 <th><center>Booked Date</center></th>
	                    
	                     
	                                         <th><center>Request Status</center></th>
	                                         <th>Action</th>
                                         

                                        </tr>

                                         <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $query="select tbl_registration.firstname,lastname,emails,phone,gb_datef,gb_datee,booked_date,status,tbl_guide_booking.login_id from tbl_registration  join tbl_guide_booking ON tbl_registration.login_id=tbl_guide_booking.login_id  and tbl_guide_booking.guide_id='$uname' ";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             $stat=$data['status'];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['firstname'].''.$data['lastname'];?></td> 


                                                  <!-- <td><?php echo $data['gb_guide'];?></td> -->

                                                  <td><?php echo $data['emails'];?></td>

                                                  <td><?php echo $data['phone'];?></td>

                                                  <td><?php echo $data['gb_datef'];?></td>

                                                  <td><?php echo $data['gb_datee'];?></td>

												  <td><?php echo $data['booked_date'];?></td>

                                                  

                                                  

                                                  <td><center> <?php if ($a==$stat)
                                                                 {echo"Not Checked";}
                                                                 else if ($b==$stat)
                                                                 {echo"Accepted";}
                                                                 else{echo"Rejected";}?>
                                       
                                                                 </center>
                                                  </td>
                                                   <td>
                                                       <a href="databasefun.php?login_id=<?php echo $data['login_id'];?>&eml=<?php echo $data['emails'];?>">
                                                       	<button class="button3" style="border-radius:80px; width:20px;" ><i class="fa fa-check-square" style="font-size:28px;height: 10px;width: 10px;margin-left:-10px;margin-top:-10px;padding-bottom: 18px;padding-top:7px"></i></button></a>&nbsp
                                                        
                                                      <a href="databasefun.php?login_rdid=<?php echo $data['login_id'];?>&eml=<?php echo $data['emails'];?>">
                                                       <button class="button4" style="border-radius:80px ;" ><i class="fa fa-ban" style="font-size:28px;height: 10px;width: 10px;margin-left:-15px;margin-top:-10px;padding-bottom:0px;padding-top:7px"></i></button></a>

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
