<?php

include 'connection.php';
$ids = $_GET['pid'];
$ids = $_GET['pid'];
$eml=$_GET['eml'];
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
		
		<script>

				function validate() {
		      	  
		      	var sdate=document.myForm.foodtype.value;
		      	var cabs=document.myForm.cabtype.value;
		      	var rooms=document.myForm.roomtype.value;
		      	
		      	
		      
		        if(sdate=='')
		        {
		            alert('Please enter your Food Type');
		            return false;
		        }
		        
		        else if(cabs=='')
		        {
		            alert('Please enter your Cab Type');
		             return false;
		        }
		        else if(rooms =='')
		        {
		        	alert('Please enter your Room Type');
		        	return false;
		        }
		        
		       
		        
		        else{
		        	alert('Package Customized  Sucessfully');
		        }
		          
		               
		       return( true );

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
  
   .container0{
	 max-width: 450px;
	 width: 100%;
	 background-color: #fff;
	 padding: 25px 30px;
	 border-radius: 5px;
	 box-shadow: 0 5px 10px rgba(0,0,0,0.15);
	 margin-left: 300px;
	 margin-top: 50px;
   }
   .container0 .title1{
	 font-size: 25px;
	 font-weight: 500;
	 position: relative;
	
   }
   
   
   
   form.user-details1 .input-box1{
	 margin-bottom: 15px;
	 padding-left: 7px;
	 width: calc(100% / 2 - 20px);
   }
   form.input-box1 span.details1{
	 display: block;
	 font-weight: 500;
	 margin-bottom: 5px;

   }
   .selectmenu{
   	height: 45px;
	 width: 370px;
	 outline: none;
	 font-size: 16px;
	 border-radius: 5px;
	 padding-left: 15px;
	 border: 1px solid #ccc;
	 border-bottom-width: 2px;
	 transition: all 0.3s ease;


   }

   .user-details1 .input-box1 input{
	 height: 45px;
	 width: 370px;
	 outline: none;
	 font-size: 16px;
	 border-radius: 5px;
	 padding-left: 15px;
	 border: 1px solid #ccc;
	 border-bottom-width: 2px;
	 transition: all 0.3s ease;
   }
   .user-details1 .input-box2 input{
	 height: 45px;
	 width: 300px;
	 outline: none;
	 font-size: 16px;
	 border-radius: 5px;
	 padding-left: 10px;
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
			
			?>
			<!--sidebar end-->
			
 			
 			
			

    
			
                  

			<!--main container start-->
				
				<div class="container0" style="margin-left:600px;margin-top: 160px;width:
					600px;">
					 <div class="title1"><center>Package Customization</center></div><br> 
					 <div class="content1">
					 <form action="#" name="myForm" method="POST"  onsubmit = "return(validate());"  enctype="multipart/form-data"> 
					<div class="user-details1"> 
						<div class="input-box1">
						 <span class="details1">Select Food Type</span>
						  <select name="foodtype" class="selectmenu">
						  	<option value="">Select Food Dishes</option> 
						  	<option value="default">Default</option>
						   <option value="Deserts">Include Deserts</option> 
						   <option value="Continental">Include Continental foods</option>
						   <option value="Chinese">Include Chinese Foods </option>
						   <option value="Traditional">Include Traditional Foods</option> 
						  </select> 
						</div><br>
						
							  <div class="input-box1">
								<span class="details1">Select Cab Type</span>
								<select name="cabtype" class="selectmenu">
								  <option value="">Select Cab Types</option> 
								  <option value="default">Default</option>
								  <option value="Semi Premium">Semi Premium</option>
								  <option value="Premium">Premium</option>
								  <option value="Luxury">Luxury</option>
								 	
								</select>
							  </div><br>

							  <div class="input-box1">
								<span class="details1">Select Hotel Room</span>
								<select name="roomtype" class="selectmenu">
								  <option value="">Select Hotel Rooms</option> 
								  <option value="default">Default</option>
								  <option value="Premium Delux">Premium Delux</option>
								  <option value="Ultra Delux">Ultra Delux</option>
								  <option value="Luxury Suite">Luxury Suite</option>
								  
								</select>
							  </div><br>
							   

							 
							
							<div class="button1">
							  <input type="submit" name="click" value="Book Now">
							</div>
						  </form>
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
 
      $food=$_POST['foodtype'];
      $cab=$_POST['cabtype'];
      $room=$_POST['roomtype'];

  
    	$sqlllll = "UPDATE tbl_package_customization SET food_type='$food',cab_type='$cab',room_type='$room' WHERE login_id='$uname' and package_id='$ids'"; 


			      
		mysqli_query($con,$sqlllll);
			      		 
		//header("location:guidebookemail.php?eml=$eml");
		//ob_end_flush();
		echo "<script>
       		window.location.href = 'touristbookemail.php?eml=$eml';
      		alert('Package Booking Success!!!');
		      </script>";

       	
	}else
	{
	//echo "<script>alert('username not available')</script>";
	}
		     





    

 ?>

