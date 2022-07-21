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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
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
			<?php
 			
 			$ids = $_GET['id'];
			$quy="select * from tbl_registration where login_id='$ids'";
	            $re =mysqli_query($con ,$quy);
	            $dat=mysqli_fetch_array($re);
	            
			?>

    
			
                  

			<!--main container start-->
			
				
				
					
					<div class="container0" style="margin-left:500px;margin-top: 160px;width: 600px;">
						<div class="title1"><center>Feedback for Guide</center></div><br>
						<div class="content1">
						  <form action="#" name="myForm"  method="POST" onsubmit = "return(validate());"  enctype="multipart/form-data">
							<div class="user-details1">
							  <div class="input-box1">
								<span class="details1">Guide Name</span>
								<input type="text" value="<?php echo $dat["firstname"],$dat["lastname"]?>" readonly>
							  </div><br>
							 
							  
							 
							  <div class="input-box2">
								<span class="details1">Comments</span>
								<textarea rows="3" cols="44" name="comments"></textarea>
							  </div>
							  <br>
							   <div class="rateyo" id= "rating"
						         data-rateyo-rating="4"
						         data-rateyo-num-stars="5"
						         data-rateyo-score="3">
						         </div>

							    <span class='result'>0</span>
							    <input type="hidden" name="rating">

							
							<div class="button1">
							  <input type="submit" name="click" value="Rate Now">
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
 
      $comm=$_POST["comments"];
      $rating = $_POST["rating"];
  
    	$sqlllll = "INSERT INTO tbl_guide_rating(comment,rate,login_id,guide_id) VALUES ('$comm','$rating','$uname','$ids')"; 
			      
		mysqli_query($con,$sqlllll);
		
			      		 
		//header("location:guidebookemail.php?eml=$eml");
		//ob_end_flush();

       	
	}else
	{
	//echo "<script>alert('username not available')</script>";
	}
		     





    

 ?>

