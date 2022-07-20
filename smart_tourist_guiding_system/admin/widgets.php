<?php
 include 'connection.php';
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
                                        
                                    </div>
                                    <div class="col-lg-6">
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
            
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <?php

            $roles="tourist";
                  
            $query="SELECT COUNT(username) As username1 from tbl_login where role='$roles' ";
                  //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
            $data=mysqli_fetch_array($result);
            $counts=$data['username1'];
            
            
            
            ?>
            
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Tourists</h2>
                                        
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$counts" ?></span></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="income-range">
                                        <p>Total Tourist</p>
                                        
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <?php

            
                  
                            $query1="SELECT COUNT(feed_message) As feedback from tbl_feedback ";
                                  //$query = “select * from tbl_login";
                            $result1 = mysqli_query($con ,$query1);
                            $data1=mysqli_fetch_array($result1);
                            $counts1=$data1['feedback'];
                            
                            
                            
                            ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Feedbacks</h2>
                                        
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$counts1" ?></span></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="income-range order-cl">
                                        <p>Total Feedbacks</p>
                                        
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                         <?php

            
                  
                            $query2="SELECT COUNT(contact_message) As contacts from tbl_contact ";
                                  //$query = “select * from tbl_login";
                            $result2 = mysqli_query($con ,$query2);
                            $data2=mysqli_fetch_array($result2);
                            $counts2=$data2['contacts'];
                            
                            
                            
                            ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Contacts</h2>
                                        
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$counts2" ?></span></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <p>Total Contacts</p>
                                        
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                         <?php

            
                  
                            $query3="SELECT COUNT(package_name) As package from tbl_package ";
                                  //$query = “select * from tbl_login";
                            $result3 = mysqli_query($con ,$query3);
                            $data3=mysqli_fetch_array($result3);
                            $counts3=$data3['package'];
                            
                            
                            
                            ?>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Packages</h2>
                                        
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$counts3" ?></span></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="income-range low-value-cl">
                                        <p>Total Packages</p>
                                        
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                         <?php

            
                  
                            $query5="SELECT COUNT(place_name) As placename from tbl_place ";
                                  //$query = “select * from tbl_login";
                            $result5 = mysqli_query($con ,$query5);
                            $data5=mysqli_fetch_array($result5);
                            $counts5=$data5['placename'];
                            
                            
                            
                            ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Places</h2>
                                        
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$counts5" ?></span></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="income-range order-cl">
                                        <p>Total Places</p>
                                        
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                        <?php

                            $roles="driver";
                  
                            $query5="SELECT COUNT(username) As username3 from tbl_login where role='$roles'";
                                  //$query = “select * from tbl_login";
                            $result5 = mysqli_query($con ,$query5);
                            $data5=mysqli_fetch_array($result5);
                            $counts7=$data5['username3'];
                            
                            
                            
                            ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Drivers</h2>
                                        
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$counts7" ?></span></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="income-range order-cl">
                                        <p>Total Drivers</p>
                                        
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>


                         <?php

                            $roles="guide";
                                  
                            $query6="SELECT COUNT(username) As username2 from tbl_login where role='$roles' ";
                                  //$query = “select * from tbl_login";
                            $result6 = mysqli_query($con ,$query6);
                            $data6=mysqli_fetch_array($result6);
                            $counts6=$data6['username2'];
                            
                            
                            
                            ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Guides</h2>
                                        
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$counts6" ?></span></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <p>Total Guides</p>
                                        
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </div>
    </div>
    <!-- Footer Start-->
    <?php 
    include_once 'footer.php';
    ?>
</body>

</html>