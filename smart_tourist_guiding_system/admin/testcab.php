<?php
 include_once("connection.php");
 ?>
<!doctype html>
<html class="no-js" lang="en">

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
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Guide Lists</span>
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
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
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
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Cabs <span class="table-project-n">Data</span> Lists</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"  data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th data-field="id">CAB COMPANY</th>
                                                    <th data-field="name">CAB MODEL</th>
                                                    <th data-field="email">CAB COLOR</th>
                                                    <th data-field="phone">CAB REG.NO</th>
                                                    <th data-field="company">CAB TYPE</th>
                                                    <th data-field="complete">CAB SEATS</th>
                                                    <th data-field="task" >CAB CHARGE</th>
                                                    <th data-field="date">OWNER</th> -->
                                                    <th data-field="price">CAB IMAGE</th>
                                                    
                                                    <!-- <th data-field="state"></th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            //$rol="guide";
                                            $query="select tbl_login.*,tbl_cab_details.* ,tbl_registration.* from tbl_login,tbl_cab_details,tbl_registration where tbl_login.login_id=tbl_cab_details.login_id and tbl_login.login_id=tbl_registration.login_id;";                                    
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                              $imageURL='/driverhome/api//driver_cab_pics/'.$data["carimg"];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['cab_company'];?></td>


                                                  <td><?php echo $data['cab_model'];?></td>

                                                  <td><?php echo $data['cab_color'];?></td>

                                                  <td><?php echo $data['cab_reg_no'];?></td>

                                                  <td><?php echo $data['cab_type'];?></td>

                                                  <td><?php echo $data['cab_no_seats'];?></td>

                                                  <td><?php echo $data['cab_charge'];?></td>

                                                  <td><?php echo  $data['firstname'].' '.$data['firstname'];?></td>

                                                 
                                                  <td><img src="<?php echo $imageURL ?>" width="50px"></td>
                                                

                                                   

                                                   
                                              <?php  
                                            }
                                          ?>
                                                   

                                                </tr>    

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
    <!-- Footer Start-->
    
    <!-- Footer End-->
    <!-- Chat Box Start-->
    
     <?php include_once("footer.php"); ?>


</body>

</html>
