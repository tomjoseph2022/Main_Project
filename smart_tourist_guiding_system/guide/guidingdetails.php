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
		<title>Smart Touirst Guiding System </title>
		<link rel="stylesheet" href="css/addpackagestyle.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<script>
			
		function validate() {
      
      	var dist=document.myForm.gd_district.value;
      	var know=document.myForm.gd_knowledge.value;
      	var mla=document.myForm.gd_mlang.value;
      	var fl=document.myForm.gd_flang.value;
      	var sl=document.myForm.gd_slang.value;
      	var tl=document.myForm.gd_tlang.value;
      	var des=document.myForm.gd_desc.value;
      	var exp=document.myForm.gd_experiance.value;
      	var pay=document.myForm.gd_payment.value;

      	

      	
         var letters = /^[A-Za-z ]+$/;
        
         var pays = /^\d+/;
        

      
        
        if(dist=='')
        {
            alert('Please enter your District');
            return false;
        }
        
       
        else if(know=='')
        {
            alert('Please enter your Knowledge level');
            return false;
        }
        
        
        else if(mla=='')
        {
            alert('Please enter the Your Mother Tough');
            return false;
        }
       
        else if(fl=='')
        {
            alert('Please enter Your First Language');
            return false;
        }
        else if(sl=='')
        {
            alert('Please enter Your Second Language');
            return false;
        }
        else if(tl=='')
        {
            alert('Please enter Your Thrid Language');
            return false;
        }
        
        else if(des=='')
        {
            alert('Please enter your Description');
            return false;
        }
        else if(!letters.test(des))
        {
            alert('Description field required only alphabet characters');
            return false;
        }
        else if(exp=='')
        {
            alert('Please enter your Experiance');
            return false;
        }
        else if(pay=='')
        {
            alert('Please enter your Payment');
            return false;
        }
        
        else if(!pays.test(pay))
        {
            alert('Number Only in Payment field');
            return false;
        }
        
        
        else{
        	alert('Details Submitted Sucessfully');
        }
          
               
       return( true );

      }
	</script>
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
			<div class="header-menu">
				<div class="title">Guide <span>Home</span></div>
				<img src="images/2.png" alt="" style=" border-radius: 50%;margin-left: 100px;" width="2.9%">
				<div class="title" style="margin-left: -210px;">Smart Tourist Guiding System</div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<?php include "icon.php" ?>
				</div>
			</div>
			<!--header menu end-->
			<!--sidebar start-->
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
            $row=mysqli_fetch_array($result);
            $first=$row['firstname'];
            $last=$row['lastname'];
		    $femail=$row['emails'];
		    $fphone=$row['phone'];
		    $flog=$row['login_id'];
           	
?>
			<div class="sidebar" style="background:#2F323A;">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="<?php echo $imageURL; ?>" alt="">
						<p>
							<?php
							 echo "$first $last"
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
					<li class="item" id="messages">
						<a href="addplaces.php" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Add Places</span>
						</a>
						
					</li>
					
					<li class="item" id="contact">
						<a href="bookhistory.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Bookings</i></span>
						</a>
						
					</li>
					<li class="item">
						<a href="guidingdetails.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Guiding details</span>
						</a>
					</li>
					<li class="item">
						<a href="feedback.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Feedback</span>
						</a>
					</li>
					
					
					
				</div>
			</div>
			<!--sidebar end-->

			<!--main container start-->
			<div class="main-container">
				<div class="card" style="margin-top: 30px;border-radius: 20px;">
					<form class="contact100-form validate-form" name="myForm" method="POST"  enctype="multipart/form-data"  onsubmit = "return(validate());">
						<span class="contact100-form-title">
							Guide Details Form
						</span>
						<label class="label-input100" for="first-name">Your Name *</label>
						<div class="wrap-input100 rs1 validate-input">
							<input id="first-name" class="input100" type="text" name="first-name" value="<?php echo $row['firstname'] ?>" readonly >
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 rs1 validate-input">
							<input class="input100" type="text" name="last-name" value="<?php echo $row['lastname'] ?>" readonly>
							<span class="focus-input100"></span>
						</div>
						<label class="label-input100" for="first-name">Email *</label>
						<div class="wrap-input100 rs1 validate-input">
							<input id="first-name" class="input100" type="text" name="first-name" value="<?php echo $row['emails'] ?>" readonly >
							<span class="focus-input100"></span>
						</div>

						
						<div class="wrap-input100 rs1 validate-input">
							<input class="input100" type="text" name="last-name" value="<?php echo $row['phone'] ?>" readonly>
							<span class="focus-input100"></span>
						</div>
						<label class="label-input1001" for="first-name">Phone *</label>

						
						<label class="label-input100" for="first-name">Guiding District *</label>
						<div class="wrap-input100 rs1 validate-input">
							<select class="input100" name="gd_district" style="height: 50px;" >  
							  <option value="">Select District</option>  
							  <option value="Idukki">IDUKKI</option>  
							  <option value="Kottayam">KOTTAYAM</option>  
							  <option value="Alapuzha">ALAPUZHA</option>  
							  <option value="Kollam">KOLLAM</option>  
							 
							</select> 
							<span class="focus-input100"></span>
						</div>

						
						<div class="wrap-input100 rs1 validate-input">
							<select class="input100" name="gd_knowledge" style="height: 50px;" >  
							  <option value="">Select Knowledge</option>  
							  <option value="Just Basic Knowledge">Just Basic Knowledge</option>  
							  <option value="Basic Knowledge">Basic Knowledge</option>  
							  <option value="Medium Knowledge">Medium Knowledge</option>  
							  <option value="Complete Knowledge">Complete Knowledge</option>  
							  >  
							</select> 
							<span class="focus-input100"></span>
						</div>
						<label class="label-input1001" for="first-name">Knowledge about the district *</label>
						<label class="label-input100" for="first-name">Mother Tougue *</label>
						<div class="wrap-input100 rs1 validate-input">
							<select class="input100" name="gd_mlang" style="height: 50px;" >  
							  <option value="">Select Language</option>  
							  <option value="Malayalam">Malayalam</option>  
							  <option value="English">English</option>  
							  <option value="Hindi">Hindi</option>  
							    
							</select> 
							<span class="focus-input100"></span>
						</div>

						
						<div class="wrap-input100 rs1 validate-input">
							<select class="input100" name="gd_flang" style="height: 50px;">  
							  <option value="">Select Language</option>  
							  <option value="Canadian">Canadian</option> 
							  <option value="French">French</option>  
							  <option value="Spanish">Spanish</option>  
							</select> 
							<span class="focus-input100"></span>
						</div>
						<label class="label-input1001" for="first-name">First language Known *</label>
						<label class="label-input100" for="first-name">Second language Known *</label>
						<div class="wrap-input100 rs1 validate-input">
							<select class="input100" name="gd_slang" style="height: 50px;">  
							 <option value="">Select Language</option>  
							  <option value="Arabic">Arabic</option>  
							  <option value="chineese">chineese</option>  
							  <option value="Rusian">Rusian</option>  
							    
							</select> 
							<span class="focus-input100"></span>
						</div>

						
						<div class="wrap-input100 rs1 validate-input">
							<select class="input100" name="gd_tlang" style="height: 50px;">  
							  <option value="">Select Language</option>  
							  <option value="Italian">Italian</option>  
							  <option value="Japaneese">Japaneese</option>  
							  <option value="Swedish">Swedish</option>  
							   
							</select> 
							<span class="focus-input100"></span>
						</div>
						<label class="label-input1001" for="first-name">Thrid language Known *</label>
						<label class="label-input100" for="email">Description of yourself *</label>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="text" name="gd_desc" placeholder="Describe your self in limited words" >
							<span class="focus-input100"></span>
						</div>

						<label class="label-input100" for="first-name">Experiance *</label>
						<div class="wrap-input100 rs1 validate-input">
							<select class="input100" name="gd_experiance" style="height: 50px;" >  
							  <option value="">Select Experiance Level</option>  
							  <option value="1 Year">Less Than Two Year</option>  
							  <option value="2 + plus Year">More Than One Year</option>  
							   
							</select> 
							<span class="focus-input100"></span>
						</div>
						
						<div class="wrap-input100 rs1 validate-input">
							<input class="input100" type="text" name="gd_payment">
							<span class="focus-input100"></span>
						</div>
						<label class="label-input1001" for="first-name">Payment Per Hour in INR *</label>

						

						<br><div class="container-contact100-form-btn">
							<button class="contact100-form-btn" name="click">
								<span>
									Submit
									<i class="zmdi zmdi-arrow-right m-l-8"></i>
								</span>
							</button>
						</div>
					</form>
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
      
    $gdd=$_POST["gd_district"];
    $gdk=$_POST["gd_knowledge"];
    $gdm=$_POST["gd_mlang"];
    $gdf=$_POST["gd_flang"];
    $gds=$_POST["gd_slang"];
    $gdt=$_POST["gd_tlang"];
    $gdde=$_POST["gd_desc"];
    $gde=$_POST["gd_experiance"];
    $gdp=$_POST["gd_payment"];
    

      $req = "insert into tbl_guidedetails(gd_district,gd_knowledge,gd_mlang,gd_flang,gd_slang,gd_tlang,gd_desc,gd_experiance,gd_payment,login_id) values ('$gdd','$gdk','$gdm','$gdf','$gds','$gdt','$gdde','$gde','$gdp','$uname')";

      
       
      mysqli_query($con,$req);

  



     }
     

?> 
