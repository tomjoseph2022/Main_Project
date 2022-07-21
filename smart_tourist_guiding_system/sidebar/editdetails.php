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
		<link rel="stylesheet" href="css/profilecss.css"> 
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript">
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
		       
		        var fup1 = document.getElementById('uploadfilenamess');
		        var fileName1 = fup1.value;
		        var ext = fileName1.substring(fileName1.lastIndexOf('.') + 1);

		    if(ext =="JPG" || ext=="jpg")
		    {
		        return true;
		    }
		    else
		    {
		        alert("Upload JPG Images only");
		        document.getElementById('uploadfilenamess').value = '';
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
				<div class="title">Tourist <span>Home</span></div>
				<img src="images/2.png" alt="" style=" border-radius: 50%;margin-left: 100px;" width="2.9%">
				<div class="title" style="margin-left: -210px;">Smart Tourist Guiding System</div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<?php include "icon.php" ?>
				</div>
			</div>
			
			<!--sidebar start-->

			<?php

			//$id = $_GET['id'];
          	 $uname=$_SESSION['login_id'];
                  
            $query="select * from tbl_registration where login_id='$uname'";
                  //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
            $data=mysqli_fetch_array($result);
            $first=$data['firstname'];
            $last=$data['lastname'];
            
           	
			?>
			<!--header menu end-->
			<?php
 			$uname=$_SESSION['login_id'];
			$sql="select * from tbl_regpics where login_id='$uname'";
            $res =mysqli_query($con ,$sql);
            $row=mysqli_fetch_array($res);
            $imageURL='image/'.$row["prof_img"];
             $proof=$row["pro_proof"];
		?>
			<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="<?php echo $imageURL; ?>" alt="">
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
					
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>View Places</span>

						</a>
					</li>
					<?php
					
					

					}

					else
					{
						?>
					<li class="item">
						<a href="viewplaces.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>View Places</span>
						</a>
					</li>
					<?php

					}

					?>

					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Packages <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="notuploadedproof.php"><i class="fas fa-envelope"></i><span>Adventure Tour Package</span></a>
							<a href="notuploadedproof.php"><i class="fas fa-envelope-square"></i><span>Single Tour Package</span></a>
							<a href="notuploadedproof.php"><i class="fas fa-envelope"></i><span>Family Tour Package</span></a>
							<a href="notuploadedproof.php"><i class="fas fa-envelope-square"></i><span>Group Tour Package</span></a>
							
						</div>
					</li>
					<?php

					}

					else
					{
						?>
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
					<?php

					}

					?>

					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Package Bookings</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="bookhistory.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Package Bookings</i></span>
						</a>
						
					</li>
					<?php

					}

					?>
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fa fa-address-book"></i></i><span>Guide Booking History</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="guidebookinghistory.php" class="menu-btn">
							<i class="fa fa-address-book"></i></i><span>Guide Booking History</i></span>
						</a>
						
					</li>
					<?php

					}

					?>
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fas fa-male"></i></i><span>Guides</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="guideview.php" class="menu-btn">
							<i class="fas fa-male"></i></i><span>&nbsp Guides</i></span>
						</a>
						
					</li>
					<?php

					}

					?>

					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fa fa-taxi"></i></i><span>Call a Cab</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="taxiview.php" class="menu-btn">
							<i class="fa fa-taxi"></i></i><span>Call a Cab</i></span>
						</a>
						
					</li>
					<?php

					}

					?>
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fas fa-map"></i></i><span>Cab Booking History</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="taxibookinghistory.php" class="menu-btn">
							<i class="fas fa-map"></i></i><span>Cab Booking History</i></span>
						</a>
						
					</li>
					<?php

					}

					?>
					
					
					
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
			<div class="main-container">
				<div class="card">
					<form class="contact100-form validate-form" action="editdetails.php" enctype="multipart/form-data" method="POST">
						<span class="contact100-form-title">
							<?php echo "$first"; ?>'s Profile
						</span>
						 <div class="wrap-input100 ">
						 <img src="<?php echo $imageURL; ?>" class="img-circle" style=" border-radius: 50%;" width="21%">
                          	<input type="file"  name="uploadfile" id="filenamess" class="contact200-form-btn" onblur="Checkfiles()">
                           <span class="focus-input100"></span>
                       </div>


                      <label class="label-input100" for="first-name">Your Name *</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="first-name" class="input100" type="text"  name="first-name" value="<?php echo $data['firstname'].$data['lastname'] ?>" readonly>
                          <span class="focus-input100"></span>
                      </div>

                       <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="text" name="dob"value="<?php echo $data['dobs'] ?>" readonly>
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input1001" for="first-name">DOB *</label>
                       <label class="label-input100" for="message">Address *</label>
                       		<div class="wrap-input100 validate-input">
                             	<input id="adress" class="input100" type="text" name="addresses" value="<?php echo $data['address'] ?>" >
                             	<span class="focus-input100"></span>
                        	</div>

                        	 <label class="label-input100" for="email">Email Address *</label>
                       <div class="wrap-input100 validate-input">
                             <input id="email" class="input100" type="text" name="email" value="<?php echo $data['emails'] ?>" readonly>
                             <span class="focus-input100"></span>
                        </div>

                          <label class="label-input100" for="first-name">PHONE *</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="dob" class="input100" type="text"  name="phoneno" value="<?php echo $data['phone'] ?>" >
                          <span class="focus-input100"></span>
                      </div>
                      <!-- <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="text" name="last-name" placeholder="Department" value="">
                           <span class="focus-input100"></span>
                       </div> -->
                       <?php 
                       $prf=$row['proof_type'];
                       $titc="Not Uploaded";


                       if($prf==$titc)
                       {
                       	?>

                       		<div class="wrap-input100 rs1 validate-input">
                       		<select class="input100" name="prooftype" style="height: 50px;" required>  
							  <option value="">Select ID-Proof</option>  
							  <option value="Passport">PASSPORT</option>  
							  <option value="Aadhaar">AADHAAR</option>  
							  <option value="Election_id-card">ELECTION ID-CARD</option>  
							  <option value="Driving_licence">DRIVING LICENCE</option>  
							  <option value="Pancard">PANCARD</option>  
							</select> 
							<span class="focus-input100"></span>
					   </div>	
                       <label class="label-input1001" for="first-name">TYPE OF ID PROOF *</label>
                                               
                      

                        <label class="label-input100" for="first-name">ID Proof No:</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input class="input100" type="text"  name="proofno" value="<?php echo $row['proof_no'] ?>" required>
                          <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="file" name="updateproof" id="uploadfilenamess" style="color: green;"  onblur="Checkfiles1()">
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input1001" for="first-name">UPLOAD ID PROOF *</label>



                       	<?php

                       }

                       else{

                       	?>


                       	<div class="wrap-input100 rs1 validate-input">
                       		<select class="input100"  style="height: 50px;" >  
							  <option value="">Already Uploaded</option>  
							  <!-- <option value="Passport">PASSPORT</option>  
							  <option value="Aadhaar">AADHAAR</option>  
							  <option value="Election_id-card">ELECTION ID-CARD</option>  
							  <option value="Driving_licence">DRIVING LICENCE</option>  
							  <option value="Pancard">PANCARD</option>   -->
							</select> 
							<span class="focus-input100"></span>
					   </div>	
                       <label class="label-input1001" for="first-name">TYPE OF ID PROOF *</label>
                                               
                      

                        <label class="label-input100" for="first-name">ID Proof No:</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input class="input100" type="text"  value="<?php echo $row['proof_no'] ?>" readonly>
                          <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 rs1 validate-input">
                           <!-- <input class="input100" type="file" name="updateproof" id="uploadfilenamess" style="color: green;"  onblur="Checkfiles1()" > -->
                           <input class="input100" type="text"   value="<?php echo $row['proof_type'] ?>" readonly>
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input1001" for="first-name">UPLOADED ID PROOF *</label>



                     	<?php

                       }

                        ?>
                       
                                           
						<div class="container-contact100-form-btn">
							<input type="submit" class="contact100-form-btn" value="update" name="update">
								<span>
									
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

$tempprono=$row['proof_no'];
$tempprotype=$row['proof_type'];


 ?>


<?php
   if(isset($_POST["update"])){
 
     $filename = $_FILES["uploadfile"]["name"]; 
     $tempname = $_FILES["uploadfile"]["tmp_name"];     
     $folder = "image/".$filename; 
     $proofname = $_FILES["updateproof"]["name"]; 
     $tempname1 = $_FILES["updateproof"]["tmp_name"];     
     $folder1 = "proof/".$proofname;
     $nameproof=$_POST["prooftype"];
      if($nameproof==""){
     	$nameproof=$tempprotype;
     }else{}
     $noproof=$_POST["proofno"];
     if($noproof=="")
     {
     	$noproof=$tempprono;
     }else{}
     $addre=$_POST["addresses"];
     $pho=$_POST["phoneno"];

     

	  //$sqll="INSERT INTO tbl_regpics(prof_img,pro_proof,login_id) VALUES('$filename','$proofname','$uname')";
	 $sqll="update tbl_regpics set prof_img='$filename',pro_proof='$proofname',proof_type='$nameproof',proof_no='$noproof' where login_id='$uname'";
	 $sqlll="update tbl_registration set address='$addre',phone='$pho' where login_id='$uname' ";

    mysqli_query($con, $sqll); 
          
        // Now let's move the uploaded image into the folder: image 
        move_uploaded_file($tempname, $folder);
        move_uploaded_file($tempname1, $folder1);
     mysqli_query($con, $sqlll);     
         
  } 
?>
<?php 
if(isset($_POST['update']))
{

echo "<meta http-equiv='refresh' content='0'>";
}
?>
//update the website