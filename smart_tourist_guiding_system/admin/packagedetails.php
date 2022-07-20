<?php
 include_once("connection.php");
 ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Order Form | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    
    <div class="wrapper-pro">
        <?php include_once("sidebar.php");?><br>
        <!-- Header top area start-->

         <?php
          include_once 'headermenu.php';
         ?>
        <!-- Header top area start-->
        
        
            <!-- Header top area end-->
            <!-- Breadcome start-->
            
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            
            
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="widgets.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Manage Package</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Breadcome End-->
            <?php


            
            $uname=$_GET["package_id"];
            $query="select * from tbl_package where package_id='$uname'";
            //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
            $data=mysqli_fetch_array($result);
            $imageURL='../sidebar/package/'.$data["package_image"];

            ?>
            <!-- Order Form Start-->
            <form name="myform" action="#" method="POST" enctype="multipart/form-data"class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-order-form" class="adminpro-form">
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="img/logo/logo.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                               <center><h1>Manage Package</h1></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <center><img src="<?php echo $imageURL; ?>" class="img-circle" style=" border-radius: 20%;" width="20%"></center><
                                         <input type="file"  name="uploadfile" id="filenamess" class="contact200-form-btn" style="margin-top:-30px;margin-left: 400px;"><br>
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Package Name</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="pack_name" value="<?php echo $data['package_name'] ?>" />
                                                <i class="fa fa-user login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Package Type</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                           <div class="interested-input-area">
                                                <select name="pack_type">
                                                    <option value="none" selected="" disabled=""><?php echo $data['package_type'] ?></option>
                                                    <option value="adventure_Tour">Adventure Tour Package</option>
                                                    <option value="Single_Tour">Single Tour Package</option>
                                                    <option value="Family_Tour">Family Tour Package</option>
                                                    <option value="Group_Tour">Group Tour Package</option>
                                                    <!-- <option value="video">Video Marketing</option> -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Best Seasons</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                             <div class="interested-input-area">
                                                <select name="pack_season">
                                                    <option value="none" selected="" disabled=""><?php echo $data['package_season'] ?></option>
                                                    <option value="summer">Summer Season</option>
                                                    <option value="rainy">Rainy Season</option>
                                                    <option value="winter">Winter Season</option>
                                                    <option value="spring">Spring Season</option>
                                                    <!-- <option value="video">Video Marketing</option> -->
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Package Features</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="pack_features" value="<?php echo $data['package_features'] ?>" />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Package Location</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="pack_location" value="<?php echo $data['package_location'] ?>"/>
                                                <i class="fa fa-phone login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Package Duration</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="pack_duration" value="<?php echo $data['package_duration'] ?>" />
                                                <i class="fa fa-phone login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Package Price</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="pack_price"value="<?php echo $data['package_price'] ?>" />
                                                <i class="fa fa-briefcase login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Package Details</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="pack_details"value="<?php echo $data['package_details'] ?>" style="height: 100px;" />
                                                <i class="fa fa-briefcase login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div><br>
                                    <!-- <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p style="margin-top:-17px;">Package Image</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="file" name="pack_image" required>
                                                
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- <input type="file" name="packageimage" id="packageimage" required> -->
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                 <!-- <a href="dayplan.php?package_id=<?php echo $data['package_id'];?>"> 
                                                        <input type="button" name="da" value="Update DAYPLAN" class="login-button login-button-lg" style="margin-left:-100px"></a>  &nbsp &nbsp -->
                                                <button type="submit" class="login-button login-button-lg" name="click">Update Package</button>&nbsp &nbsp
                                                   <a href="databasefun.php?pack_id=<?php echo $data["package_id"];?>">
                                                 <button type="submit" class="login-button login-button-lg" name="drop">Drop Package</button></a><!-- enter the input type in button -->
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
           
           </form> 
            <!-- Order Form End-->
        </div>
    </div>
    <!-- Footer Start-->
    <?php include_once("footer.php"); ?>
</body>

</html>

<?php

   if(isset($_POST["click"]))

   {
 
      $pname=$_POST["pack_name"];
      $ptype=$_POST["pack_type"];
      $pseason=$_POST["pack_season"];
      $pfeature=$_POST["pack_features"];
      $plocation=$_POST["pack_location"];
      $pduration=$_POST["pack_duration"];
      $pprice=$_POST["pack_price"];
      $pdetails=$_POST["pack_details"];
      //$pimage=$_POST["pack_image"];
      $filename = $_FILES["uploadfile"]["name"]; 
      $tempname = $_FILES["uploadfile"]["tmp_name"];     
      $folder = "../sidebar/package/".$filename; 
      

    
      $req ="UPDATE tbl_package SET package_name='$pname',package_type='$ptype',package_season='$pseason',package_features='$pfeature',package_location='$plocation',package_duration='$pduration',package_price='$pprice',package_details='$pdetails',package_image='$filename' WHERE package_id ='$uname' ";
      
       mysqli_query($con,$req);
       move_uploaded_file($tempname, $folder);
       echo "<script>alert('Package is updates created')</script>";

     }else
      {
         echo "";
       }
   

 ?>

 <?php 
if(isset($_POST['click']))
{

echo "<meta http-equiv='refresh' content='0'>";
}
?>