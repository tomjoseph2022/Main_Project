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
			background-color: #7ea0cc;
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
			height: 25px;
			padding: 5px 10px 5px 10px;
			border: none;
			background-color:#2be4fc ;
			color: white;
		}.cust-btn:hover{
			background-color: aliceblue;
			color:red;
			font-style: italic;
			font-weight: bold;
		}
				.button {
		  background-color: #2be4fc; /* Green */
		  border: none;
		  color: white;
		  padding: 7px 10px 7px 10px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 14px;
		  margin: 4px 2px;
		  cursor: pointer;
		  border-radius: 10px;
		  width: 80px;

		}
		
		.button3 {background-color: #2be4fc;} 
		
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
					<h2>Booking History</h2>
					
					 
					
				</div>
				<div class="card">
					
					 <table style="font-family: arial,sans-serif;border-collapse: collapse;width: 100%;"> 

                                        <tr class="mycustomthead">

                                         <!-- <th><center> person_name</center></th> -->
                                         <th><center>Package</center></th>
                                         <!-- <th><center>Email</center></th> -->
                                         <th><center>Phone</center></th>
                                         <th><center>Book Date Start</center></th>
                                         <th><center>Book Date End</center></th>
                                         <th><center>No.of.Persons</center></th>
                                         <th><center>Package Type</center></th>
                                         <th><center>Status</center></th>
                                         <th><center>Total Amount</center></th>
                                         <th><center>Cutomization Amount</center></th>
                                         <!-- <th><center>Payment</center></th> -->
                                         <th><center>Payment Status</center></th>
                                         <th><center>Action</center></th>

                                         

                                        </tr>

                                         <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $query="SELECT DISTINCT tbl_booking.*,tbl_package.*,tbl_package_customization.*,tbl_registration.* from tbl_booking,tbl_payment,tbl_package,tbl_package_customization,tbl_registration WHERE tbl_package.package_id=tbl_booking.package_id and tbl_package_customization.package_id=tbl_booking.package_id and  tbl_registration.login_id = tbl_booking.login_id and  tbl_booking.login_id='$uname' ";

                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             $stat=$data['status'];
                                             //$pstat=$data['payment_status'];
                                             
                                            ?>

                                                <tr>

                                                 
                                                  <!-- <td><?php echo $data['person_name'];?></td> -->


                                                  <td><?php echo $data['package_name'];?></td>

                                                  <!-- <td><?php echo $data['book_email'];?></td> -->

                                                  <td><?php echo $data['phone'];?></td>

                                                  <td><?php echo $data['book_date_start'];?></td>

                                                <td><?php echo $data['book_date_end'];?></td>

                                                  <td><?php echo $data['book_no_person'];?></td>

                                                  <td><?php echo $data['package_type'];?></td>

                                                  

                                                  <td><center> <?php if ($a==$stat)
                                                                 {echo"Not Checked";}
                                                                 else if ($b==$stat)
                                                                 {echo"Accepted";}
                                                                 else{echo"Rejected";}?>
                                       
                                                                 </center>
                                                  </td>

                                                  <td style="font-size: 19px;"><b>
                                                  	<?php 
                                                  	$price=$data['package_price'];
                                                  	$per=$data['book_no_person'];
                                                  	$total=$price * $per;
                                                  	echo $total;


                                                  	?>




                                                  	</b>
                                                  </td>
                                                  <td>


                                                  	<?php

                                                  	//  $query="SELECT tbl_package_customization.*,tbl_booking.* FROM tbl_package_customization,tbl_booking WHERE tbl_package_customization.login_id=tbl_booking.login_id and tbl_package_customization.package_id=tbl_booking.package_id and tbl_package_customization.login_id='$uname'";

                                                  	// $result1=mysqli_query($con,$query);
                                                  	// $rows=mysqli_fetch_array($result1);
                                                  	$food=$data['food_type'];
                                                  	//$amount=$data['package_price'];
                                                  	if($food == 'default'){
                                                  		$totalprice=100;
                                                  		//echo $totalprice;
                                                  	}
                                                  	elseif($food == 'Deserts'){
                                                  		$totalprice=500;
                                                  		//echo $totalprice;
                                                  	}
                                                  	elseif ($food == 'Continental') {
                                                  		$totalprice=1700;
                                                  		//echo $totalprice;

                                                  		
                                                  	}

                                                  	elseif ($food == 'Chinese') {
                                                  		$totalprice=2900;
                                                  		//echo $totalprice;
                                                  		
                                                  	}
                                                  	elseif ($food == 'Traditional') {
                                                  		$totalprice=3500;
                                                  		//echo $totalprice;
                                                  		
                                                  	}
                                                  	else
                                                  	{
                                                  	}

                                                  	 $totalprice=(int)$totalprice;

                                                  	$cab=$data['cab_type'];
                                                  	if($cab == 'default'){
                                                  		$totalcab=100;
                                                  		//echo $totalcab;
                                                  	}
                                                  	elseif($cab == 'Semi Premium'){
                                                  		$totalcab=5000;
                                                  		//echo $totalcab;
                                                  	}
                                                  	elseif ($cab == 'Premium') {
                                                  		$totalcab=7000;
                                                  		//echo $totalcab;

                                                  		
                                                  	}

                                                  	elseif ($cab == 'Luxury') {
                                                  		$totalcab=10000;
                                                  		//echo $totalcab;
                                                  		
                                                  	}
                                                  	
                                                  	else
                                                  	{
                                                  	}

                                                  	 $totalcab=(int)$totalcab;


                                                  	$room=$data['room_type'];
                                                  	if($room == 'default'){
                                                  		$totalroom=100;

                                                  		//echo $totalcab;
                                                  	}
                                                  	elseif($room == 'Premium Delux'){
                                                  		$totalroom=5000;
                                                  		//echo $totalcab;
                                                  	}
                                                  	elseif ($room == 'Ultra Delux') {
                                                  		$totalroom=7000;
                                                  		//echo $totalcab;

                                                  		
                                                  	}

                                                  	elseif ($room == 'Luxury Suite') {
                                                  		$totalroom=10000;
                                                  		//echo $totalcab;
                                                  		
                                                  	}
                                                  	
                                                  	else
                                                  	{
                                                  	}
                                                  	$per=$data['book_no_person'];

                                                	 $totalroom=(int)$totalroom;

                                                  	$totalc=$totalprice+$totalcab+$totalroom;
                                                  	$totalcu=$totalc * $per;
                                                  	$totalcus=$total + $totalcu;


                                                  	echo $totalcu;





                                                  	?>


                                                  	

                                                  </td>

                                                  

                                                  <td><center>
                                                   <?php
                                                   $pid=$data['package_id'];
                                                       $query12="SELECT * FROM tbl_payment where package_id='$pid' and login_id='$uname'";

                                                       $result13=mysqli_query($con,$query12);
                                                       $data3=mysqli_fetch_array($result13);
                                                       $pstats=$data3['payment_status'];
                                                       





                                                    if ($a==$pstats)
                                                                 {echo"Pending";}
                                                                 else if ($b==$pstats)
                                                                 {echo"Paid";}
                                                                 else{echo"Cancelled";}?>
                                       
                                                                 </center>
                                                  </td>

                                                  <td>
                                                  	<?php 
                                                  	$pid=$data['package_id'];
                                                       $query12="SELECT * FROM tbl_payment where package_id='$pid' and login_id='$uname'";

                                                       $result13=mysqli_query($con,$query12);
                                                       $data3=mysqli_fetch_array($result13);
                                                       $pstats=$data3['payment_status'];
                                                  	
                                                  	$dat="Rejected";

                                                  	if($stat!='3' && $pstats==0)
                                                  		//$ref=https://rzp.io/l/hqPN0et
                                                  	{
                                                  		?> 

                                                  			<a href="newpayment.php?amount=<?php echo $totalcus  ?>"> <button class="cust-btn">Pay</button>


                                                  		<?php


                                                  	}

                                                  	  ?>
                                                  </td>



                                                  <td>
                                                  	<?php
                                                  	$pack_id=$data['package_id'];
                                                  	$pid=$data['package_id'];
                                                       $query12="SELECT * FROM tbl_payment where package_id='$pid' and login_id='$uname'";

                                                       $result13=mysqli_query($con,$query12);
                                                       $data3=mysqli_fetch_array($result13);
                                                       $pstats=$data3['payment_status'];
                                                  	
                                                  	//echo $pack_id;

                                                  	if($pstats==1)
                                                  	{
                                                  		?>

                                                  		<a href="databasefun.php?cid=<?php echo$uname  ?>&&pid=<?php echo $pack_id  ?>"><button class="button button3">Cancel</button>



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
