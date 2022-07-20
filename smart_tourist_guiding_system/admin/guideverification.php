<?php 
include_once("connection.php"); 
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php
     include_once 'header.php';
    ?>
</head>



<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <?php 
              include_once 'sidebar.php';
            ?>
        </div>
        <!-- Header top area start-->
         <?php
          include_once 'headermenu.php';
         ?>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="widgets.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Guide View</span>
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
            <!-- Mobile Menu start -->
            
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
           
            <!-- start-->
     <div class="container-fluid">
        
           <div class="row">
            

        
         <?php


            
            $uname=$_GET["login_id"];
            $query="select * from tbl_registration where login_id='$uname'";
            //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
            $data=mysqli_fetch_array($result);
            $first=$data['firstname'];
            $last=$data['lastname'];

            ?>
          <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>ADMIN DIVISION</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                 <?php
                                    $uname=$_GET["login_id"];
                                    $sql="select * from tbl_regpics where login_id='$uname'";
                                    $res =mysqli_query($con ,$sql);
                                    $row=mysqli_fetch_array($res);
                                    $imageURL='../sidebar/image/'.$row["prof_img"];
                                ?>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    <form action="#">

                                                        <div class="form-group-inner">
                                                                    <div class="col-lg-7">
                                                                    <div class="p-5">
                                                    
                                                                    <div class="text-center">
                                                                        <h1 class="h4 text-gray-900 mb-4">Verify Account</h1>
                                                                    </div>

                                                                    <form class="user" action="db_functions.php" method="POST" enctype="multipart/form-data"><br>
                                                                        <center><img src="<?php echo $imageURL; ?>" class="img-circle" style=" border-radius: 20%;" width="21%"></center>

                                                                        <a href="guideviewproof.php?login_id=<?php echo $data['login_id'];?>" style="margin-left:1000px;font-size: 20px;">view&nbspproof</a>
                                                                        
                                                                     <div class="form-group row">
                                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                                         &nbsp &nbsp <b>NAME</b>
                                                                         <input type="text" value="<?php echo $data['firstname'], $data['lastname'] ?>" class="form-control form-control-user" id="exampleFirstName"  disabled>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            &nbsp &nbsp <b>DOB</b>
                                                                            <input type="text" name="registration_age"  value="<?php echo $data['dobs'] ?>" class="form-control form-control-user" id="exampleLastName" placeholder="AGE" disabled>
                                                                        </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                 &nbsp &nbsp <b>E-MAIL</b>
                                                                                <input type="text"   value="<?php echo $data['emails'] ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="E-MAIL" disabled>
                                                                             </div>
                                                                        <div class="col-sm-6">
                                                                            &nbsp &nbsp <b>MOB</b>
                                                                            <input type="text"   value="<?php echo $data['phone'] ?>" class="form-control form-control-user" id="exampleLastName" placeholder="MOB" disabled>
                                                                        </div>
                                                                       <!--  <div class="col-sm-6 mb-3 mb-sm-0">
                                                                         &nbsp &nbsp <b>city</b>
                                                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="city" disabled>
                                                                        </div>-->
                                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                                         &nbsp &nbsp <b>STATE</b>
                                                                         <input type="text" value="<?php echo $data['state'] ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="STATE"  disabled>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            &nbsp &nbsp <b>PINCODE</b>
                                                                            <input type="text" value="<?php echo $data['pincode'] ?>" class="form-control form-control-user" id="exampleLastName" placeholder="PINCODE" disabled>
                                                                        </div>
                                                                        
                                                                  <!--  <div class="form-group row">
                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                 &nbsp &nbsp <b>BLOODGROUP</b>
                                                                                <input type="text" value="<?php echo $data['firstname'] ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="BLOODGROUP" disabled>
                                                                             </div> -->
                                                                            <div class="col-sm-6">
                                                                            &nbsp &nbsp <b>USERNAME</b>
                                                                            <input type="text" value="<?php echo $data['firstname'] ?>" class="form-control form-control-user" id="exampleLastName" placeholder="USERNAME" disabled>
                                                                            </div>
                                                                       <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                                                                         &nbsp &nbsp <b>PASSWORD</b>
                                                                            <input type="text" name="registration_password"  Value="<?php echo $registration_password ;?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="PASSWORD" disabled>
                                                                        </div> -->
                                                                        <div class="col-sm-6">
                                                                            &nbsp &nbsp <b>GENDER</b>
                                                                             <div class="form-group">
                                                                            <input type="text"  value="<?php echo $data['gender'] ?>" class="form-control form-control-user" id="exampleInputEmail" disabled>
                                                                        </div>
                                                                        </div>
                                                                        </div><label>ADDRESS</label>
                                                                         <input type="text"  value="<?php echo $data['address'] ?>" class="form-control form-control-user" id="exampleLastName" disabled>
                                                                       <br>
                                                                       
                                      

                                                                                <!--    <div class="form-group">
                                                                                <label for="sel1">Select list:</label>
                                                                      <select class="form-control" id="sel1" disabled>
                                                                        <option > <?php echo $reregistration_name ;?></option>
                                                                        
                                                                      </select>
                                                                    </div>-->
                                                                    <a href="databasefun.php?glogin_id=<?php echo $data['login_id'];?>&eml=<?php echo $data['emails']; ?> "class="btn btn-primary btn-user btn-block">Accept</a>
                                                                    <a href="databasefun.php?glogin_rdid=<?php echo $data['login_id'];?>&eml=<?php echo $data['emails']; ?>  "class="btn btn-primary btn-user btn-block">Reject</a>
                                                                    </form>





                                                    
                                                                     
                                                 
                                                  
                                                                    <!--    <img src="<?php echo $image ?>" width="200" height="250" style="position:absolute;left:120%;bottom:50%;">-->
                                                            </div>   
                                                        </div>       
                                              </form>
                                            </div>  
                                        </div>
                                     </div>
                               </div>
                            </div>
                        </div>    
             </div>           



        </div>
      </div>
           <!-- end-->
            <!-- Breadcome End-->
            <!-- Static Table Start -->
        </div>
    </div>
   </div> 
    <!-- Footer Start-->
   <?php include_once("footer.php"); ?>
</body>
</html>
