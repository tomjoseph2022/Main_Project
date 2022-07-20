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
                                        <h1>Lists <span class="table-project-n">of</span> Tourist Package</h1>
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
                                                    <th data-field="id">PACKAGE NAME</th>
                                                    <th data-field="name">PACKAGE TYPE</th>
                                                    <th data-field="email">SEASON</th>
                                                    <th data-field="phone">PACKAGE FEATURES</th>
                                                    <th data-field="company">PACKAGE LOCATIONs</th>
                                                    <th data-field="complete">DURATION</th>
                                                    <th data-field="task" >PRICE</th>
                                                    <th data-field="date">DETAILS</th>
                                                    <th data-field="price">IMAGE</th>
                                                    <th data-field="action">VIEW</th>
                                                    <!-- <th data-field="state"></th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $query="select * from tbl_package where package_status in ('0')";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                            // $stat=$data['status'];
                                             $imageURL='../sidebar/package/'.$data["package_image"];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['package_name'];?></td>


                                                  <td><?php echo $data['package_type'];?></td>

                                                  <td><?php echo $data['package_season'];?></td>

                                                  <td><?php echo $data['package_features'];?></td>

                                                  <td><?php echo $data['package_location'];?></td>

                                                  <td><?php echo $data['package_duration'];?></td>

                                                  <td><?php echo $data['package_price'];?></td>

                                                  <td><?php echo  $data['package_details'];?></td>

                                                  <td><img src="<?php echo  $imageURL;?>" width="50px"></td>

                                                
                                                  <td>
                                                       <a href="packagedetails.php?package_id=<?php echo $data['package_id'];?>"> 
                                                        <button style="margin-top: 1px;"  class="btn pull-right btn-sm btn-primary hblogin-submit-cs" type="submit" name="pos_delete">View</button>
                                                        </a>

                                                    </td>

                                                   
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
