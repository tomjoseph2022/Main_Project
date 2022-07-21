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
      
      	var pla=document.myForm.pname.value;
      	var dist=document.myForm.pdist.value;
      	var des=document.myForm.pdesc.value;
      	var ff=document.myForm.uploadfile1.value;
      	var sf=document.myForm.uploadfile2.value;
      	var tf=document.myForm.uploadfile3.value;
      	var ftf=document.myForm.uploadfile4.value;
      	

      	

      	
         var letters = /^[A-Za-z]+$/;
        
         var pays = /^\d+/;
        

        if(pla=='')
        {
            alert('Please enter Place Name');
            return false;
        }
        else if(!letters.test(pla))
        {
            alert('Place field required only alphabet characters');
            return false;
        }
        
        else if(dist=='')
        {
            alert('Please enter your District');
            return false;
        }
        else if(des=='')
        {
            alert('Please enter your Place Description');
            return false;
        }
        
       
        else if(ff=='')
        {
            alert('Please Upload your Place Photo1');
            return false;
        }
        
        
        else if(sf=='')
        {
            alert('Please Upload your Place Photo2');
            return false;
        }
       
        else if(tf=='')
        {
            alert('Please Upload your Place Photo3');
            return false;
        }
        else if(ftf=='')
        {
            alert('Please Upload your Place Photo4');
            return false;
        }
       
        
        
        else{
        	alert('Place Details Submitted Sucessfully');
        }
          
               
       return( true );

      }
			function Checkfiles()
		    {
		       
		        var fup = document.getElementById('filenamess');
		        var fileName = fup.value;
		        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

		    if(ext =="JPG" || ext=="jpg")
		    {
		        return true;
		    }
		    else
		    {
		        alert("Upload JPG Images only");
		        document.getElementById('filenamess').value = '';
		        return false;

		    }
		    }
		    function Checkfiles1()
		    {
		       
		        var fup = document.getElementById('filenamess');
		        var fileName = fup.value;
		        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

		    if(ext =="JPG" || ext=="jpg")
		    {
		        return true;
		    }
		    else
		    {
		        alert("Upload JPG Images only");
		        document.getElementById('filenamess').value = '';
		        return false;

		    }
		    }
		    function Checkfiles2()
		    {
		       
		        var fup = document.getElementById('filenamess');
		        var fileName = fup.value;
		        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

		    if(ext =="JPG" || ext=="jpg")
		    {
		        return true;
		    }
		    else
		    {
		        alert("Upload JPG Images only");
		        document.getElementById('filenamess').value = '';
		        return false;

		    }
		    }
		    function Checkfiles3()
		    {
		       
		        var fup = document.getElementById('filenamess');
		        var fileName = fup.value;
		        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

		    if(ext =="JPG" || ext=="jpg")
		    {
		        return true;
		    }
		    else
		    {
		        alert("Upload JPG Images only");
		        document.getElementById('filenamess').value = '';
		        return false;

		    }
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
			<div class="sidebar">
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
				<div class="card" style="margin-top: 30px;">
					<form class="contact100-form validate-form" name="myForm" method="POST"  enctype="multipart/form-data" onsubmit = "return(validate());">
						<span class="contact100-form-title">
							Add Places
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

						
						<label class="label-input100" for="first-name">Name of place *</label>
						<div class="wrap-input100 rs1 validate-input">
							<input id="first-name" class="input100" type="text" name="pname">
							<span class="focus-input100"></span>
						</div>

						
						<div class="wrap-input100 rs1 validate-input">
							
							<select class="input100" name="pdist" style="height: 50px;" >  <option value="">Select District</option>  
							  <option value="IDUKKI">IDUKKI</option>  
							  <option value="ERNAKULAM">ERNAKULAM</option>  
							  <option value="KOTTAYAM">KOTTAYAM</option>  
							  <option value="ALAPUZHA">ALAPUZHA</option>  
							  <option value="WAYANAD">WAYANAD</option>  
							</select> 
							<span class="focus-input100"></span>
						</div>
						<label class="label-input1001" for="first-name">Place Situated District*</label>
						<label class="label-input100" for="email">Description of the Place *</label>
						<div class="wrap-input100 validate-input">
							<input id="email" class="input100" type="text" name="pdesc">
							<span class="focus-input100"></span>
						</div>

						<label class="label-input100" for="message">First Photo of Place *</label>
						<div class="wrap-input100 validate-input">
							<input type="file"  name="uploadfile1"  class="contact200-form-btn" id="filenamess" onblur="Checkfiles()"><br>
						</div>	
						<label class="label-input100" for="message">Second Photo of Place *</label>	
						<div class="wrap-input100 validate-input">
							<input type="file"  name="uploadfile2"  class="contact200-form-btn" id="filenamess" onblur="Checkfiles1()"><br>
						</div>	
						<label class="label-input100" for="message">Third Photo of Place *</label><div class="wrap-input100 validate-input">
							<input type="file"  name="uploadfile3"  class="contact200-form-btn" id="filenamess" onblur="Checkfiles2()"><br>
						</div>	
						<label class="label-input100" for="message">Four Photo of Place *</label>	<div class="wrap-input100 validate-input"  >
							<input type="file"  name="uploadfile4"  class="contact200-form-btn" id="filenamess" onblur="Checkfiles3()"><br>
							<span class="focus-input100"></span>
						</div>


						<div class="container-contact100-form-btn">
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
      
    $pn=$_POST["pname"];
    $pd=$_POST["pdist"];
    $pdd=$_POST["pdesc"];
    $filename1 = $_FILES["uploadfile1"]["name"]; 
    $tempname1 = $_FILES["uploadfile1"]["tmp_name"];     
    $folder1 = "place/".$filename1; 
    $filename2 = $_FILES["uploadfile2"]["name"]; 
    $tempname2 = $_FILES["uploadfile2"]["tmp_name"];     
    $folder2 = "place/".$filename2;
    $filename3 = $_FILES["uploadfile3"]["name"]; 
    $tempname3 = $_FILES["uploadfile3"]["tmp_name"];     
    $folder3 = "place/".$filename3; 
    $filename4 = $_FILES["uploadfile4"]["name"]; 
    $tempname4 = $_FILES["uploadfile4"]["tmp_name"];     
    $folder4 = "place/".$filename4;

    $req = "insert into tbl_place(place_name,place_district,place_description,place_image1,place_image2,place_image3,place_image4,login_id) values ('$pn','$pd','$pdd','$filename1','$filename2','$filename3','$filename4','$flog')";
    mysqli_query($con,$req);


    move_uploaded_file($tempname1, $folder1);
    move_uploaded_file($tempname2, $folder2);
    move_uploaded_file($tempname3, $folder3);
    move_uploaded_file($tempname4, $folder4);

    


     }
     

?> 

 