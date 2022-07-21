<?php

include 'connection.php';
session_start();
ob_start();

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
		<script>

			 function validate() {
      	  
      	var sdate=document.myForm.date_start.value;
      	var edate=document.myForm.date_end.value;
      	
      	
         
        

      
        if(sdate=='')
        {
            alert('Please enter your Planning date');
            return false;
        }
        
        else if(edate=='')
        {
            alert('Please enter your End date');
             return false;
        }
        
       
        
        
        
        else{
        	//alert('Booked Sucessfully');
        }
          
               
       return( true );

      }


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
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
   *{
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
	 font-family: 'Poppins',sans-serif;
   }
   .main-container1{
	margin: 130px 0 0 230px;
   }
   .container0{
	 max-width: 700px;
	 width: 100%;
	 background-color: #fff;
	 padding: 25px 30px;
	 border-radius: 5px;
	 box-shadow: 0 5px 10px rgba(0,0,0,0.15);
	 margin-left: 300px;
	 
   }
   .container0 .title1{
	 font-size: 25px;
	 font-weight: 500;
	 position: relative;
	 
	
   }
   
   
   .content1 form .user-details1{
	 display: flex;
	 flex-wrap: wrap;
	 justify-content: space-between;
	 margin: 20px 0 12px 0;
   }
   form .user-details1 .input-box1{
	 margin-bottom: 15px;
	 width: calc(100% / 2 - 20px);
   }
   form .input-box1 span.details1{
	 display: block;
	 font-weight: 500;
	 margin-bottom: 5px;
   }
   .user-details1 .input-box1 input{
	 height: 45px;
	 width: 100%;
	 outline: none;
	 font-size: 16px;
	 border-radius: 5px;
	 padding-left: 15px;
	 border: 1px solid #ccc;
	 border-bottom-width: 2px;
	 transition: all 0.3s ease;
   }
   .user-details1 .input-box1 input:focus,
   .user-details1 .input-box1 input:valid{
	 border-color: #9b59b6;
   }
	form .gender-details1 .gender-title1{
	 font-size: 20px;
	 font-weight: 500;
	}
	form .category1{
	  display: flex;
	  width: 80%;
	  margin: 14px 0 ;
	  justify-content: space-between;
	}
	form .category1 label1{
	  display: flex;
	  align-items: center;
	  cursor: pointer;
	}
	form .category1 label1 .dot1{
	 height: 18px;
	 width: 18px;
	 border-radius: 50%;
	 margin-right: 10px;
	 background: #d9d9d9;
	 border: 5px solid transparent;
	 transition: all 0.3s ease;
   }
	#dot-1:checked ~ .category1 label1 .one,
	#dot-2:checked ~ .category1 label1 .two,
	#dot-3:checked ~ .category1 label1 .three{
	  background: #9b59b6;
	  border-color: #d9d9d9;
	}
	form input[type="radio"]{
	  display: none;
	}
	form .button1{
	  height: 45px;
	  margin: 35px 0
	}
	form .button1 input{
	  height: 100%;
	  width: 100%;
	  border-radius: 5px;
	  border: none;
	  color: #fff;
	  font-size: 18px;
	  font-weight: 500;
	  letter-spacing: 1px;
	  cursor: pointer;
	  transition: all 0.3s ease;
	  background: linear-gradient(135deg, #71b7e6, #9b59b6);
	}
	form .button1 input:hover{
	 /* transform: scale(0.99); */
	 background: linear-gradient(-135deg, #71b7e6, #9b59b6);
	 }
	@media(max-width: 584px){
	.container{
	 max-width: 100%;
   }
   form .user-details1 .input-box1{
	   margin-bottom: 15px;
	   width: 100%;
	 }
	 form .category1{
	   width: 100%;
	 }
	 .content form .user-details1{
	   max-height: 300px;
	   overflow-y: scroll;
	 }
	 .user-details::-webkit-scrollbar{
	   width: 5px;
	 }
	 }
	 @media(max-width: 459px){
	 .container .content .category{
	   flex-direction: column;
	 }
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
			<?php include 'sidebar.php' ?>
			<!--sidebar end-->
			<?php
 			$uname=$_SESSION['login_id'];
			$sqll="select * from tbl_registration where login_id='$uname'";
	            $resu =mysqli_query($con ,$sqll);
	            $rows=mysqli_fetch_array($resu);
	            
			?>
			<!--sidebar end-->
			<?php
 			
 			$ids = $_GET['id'];
			$quy="select * from tbl_registration where login_id='$ids'";
	            $re =mysqli_query($con ,$quy);
	            $dat=mysqli_fetch_array($re);
	            
			?>

    
			<?php

			$minn=date("Y-m-d");
			

			?>
                  

			<!--main container start-->
			<div class="main-container1">
				
				
					
					<div class="container0">
						<div class="title1"><center>Guide Booking</center></div>
						<div class="content1">
						  <form action="#" name="myForm"  method="POST" onsubmit = "return(validate());"  enctype="multipart/form-data">
							<div class="user-details1">
							  <div class="input-box1">
								<span class="details1">Full Name</span>
								<input type="text" value="<?php echo $rows["firstname"],$rows["lastname"]?>" readonly>
							  </div>
							  <div class="input-box1">
								<span class="details1">Guide Name</span>
								<input type="text" value="<?php echo $dat["firstname"],$dat["lastname"]?>" readonly>
							  </div>
							  <div class="input-box1">
								<span class="details1">Email</span>
								<input type="text" value="<?php echo $rows["emails"]?>" readonly>
							  </div>
							  <div class="input-box1">
								<span class="details1">Guide Email</span>
								<input type="text" value="<?php echo $dat["emails"]?>" readonly>
							  </div>
							  <div class="input-box1">
								<span class="details1">Expected Plan From</span>
								<input type="date" name="date_start"  id="minToday" >
							  </div>
							  <div class="input-box1">
								<span class="details1">Plan End</span>
								<input type="date" name="date_end" min=<?php echo "$minn" ?> >
							  </div>
							 
							</div>
							
							<div class="button1">
							  <input type="submit" name="click" value="Book Now">
							</div>
						  </form>
						</div>
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



<?php


   if(isset($_POST["click"]))

   {
 
      $sdate=$_POST["date_start"];
  
      $edate=$_POST["date_end"];
      
     
      $tname=$rows["firstname"].$rows["lastname"];
     // $gname=$dat["firstname"].$dat["lastname"];
      $eml=$rows["emails"];
     // $geml=$dat["emails"];
      
      //$uname=$_SESSION['login_id'];gb_id

      $startdate = strtotime($sdate);
      $end_date= strtotime($edate);
      $date=($end_date - $startdate)/60/60/24;
      echo $date;

			      if($date > -1)
			      {
			      	$sqlllll = "INSERT INTO tbl_guide_booking(gb_datef,gb_datee,login_id,guide_id,status) VALUES ('$sdate','$edate','$uname','$ids','0')"; 
			      
			      		mysqli_query($con,$sqlllll);
						  $gid=mysqli_insert_id($con);

						$query12="INSERT INTO tbl_guide_payment(amount,login_id, guide_id,gb_id,payment_status) VALUES ('0','$uname','$ids','$gid','0');";
						mysqli_query($con,$query12);
					
			      		echo"<script>window.location.href='guidebookemail.php?eml=$eml';alert('Your Guide Booking in Pending!!!');</script>";

			      }
			      else
			      {
			      	echo"<script>alert('The selected dates length cannot be negative')</script>";
			      }

			      
			 		

			      		 
			      		//header("location:guidebookemail.php?eml=$eml");
			      		//ob_end_flush();

       		

       		


	}else
	{
	//echo "<script>alert('username not available')</script>";
	}
		     





    

 ?>

