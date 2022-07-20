
<?php
 include_once("connection.php");
 error_reporting(0);
 ?>
<!doctype html>
<html class="no-js" lang="en">

<?php include_once("header.php"); ?>
    

<body class="materialdesign">
    
    <div class="wrapper-pro">
        <?php include_once("sidebar.php"); ?>
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
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="widgets.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">View Proof</span>
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
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
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
            $val=$_GET['login_id'];
            $title="License Image";
            


            $query="select * from tbl_car_document where login_id='$val'";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             
                                             $imageURL='/Smart_Tourist_Guiding_System/driver/api/cab_document/'.$data["license_img"];
                                             $lno=$data['license'];
                                             $rc=$data['rc_book'];
                                             $in=$data['insurence'];
                                             // $imageURLL='../guide/place/'.$data["place_image2"];
                                             // $imageURLLL='../guide/place/'.$data["place_image3"];
                                             // $imageURLLLL='../guide/place/'.$data["place_image4"];
                                            ?>

                                                <tr>

                                                 

                                                  <?php  
                                            }
                                             ?>  


            <div class="contact-clients-area mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="contact-client-single shadow-reset ct-client-b-mg-30 ct-client-b-mg-30-n contact-client-v2">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <!-- <input type="text" value="<?php echo $title ?>" style="" > -->
                                        <h2><?php echo $title ?></h2>
                                        
                                        
                                            <img src="<?php echo $imageURL ?>" style="width: 300px;height: 300px;" >
                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="contact-client-single shadow-reset ct-client-b-mg-30 ct-client-b-mg-30-n contact-client-v2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>RC Book Number</h2>
                                    </div>

                                </div>
                            </div>
                            <h2 style="margin-left:100px;margin-top:100px"><?php echo $rc ?></h2>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="contact-client-single shadow-reset ct-client-ds-n contact-client-v2">
                                <div class="row">
                                    <div class="col-lg-12">
                                       <h2>Insurence Number</h2>
                                    </div>
                                </div>
                            </div>
                            <h2 style="margin-left:100px;margin-top:100px"><?php echo $in ?></h2>
                        </div>
                        
                    </div>
                    <!-- <div class="button-ap-list responsive-btn">
                                    <div class="button-style-four btn-mg-b-10">
                                        <button type="button" class="btn btn-custon-rounded-four btn-default">Default</button>
                                        <button type="button" class="btn btn-custon-rounded-four btn-primary">Primary</button>
                                        <button type="button" class="btn btn-custon-rounded-four btn-success">Success</button>
                                        <button type="button" class="btn btn-custon-rounded-four btn-warning">Warning</button>
                                        <button type="button" class="btn btn-custon-rounded-four btn-danger">Danger</button>
                                    </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="contact-client-single shadow-reset mg-t-30 contact-client-v2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>License No:<?php echo $lno ?></h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <br>
    <br>
    <br>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <br>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    
		
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/jquery.mockjax.js"></script>
    <script src="js/mock-active.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/bootstrap-editable.js"></script>
    <script src="js/xediable-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>