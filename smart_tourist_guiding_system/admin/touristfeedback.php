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
                                        <h1>Feedback <span class="table-project-n">From </span> Tourist</h1>
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
                                                   
                                            
                                                    <th data-field="id">FIRSTNAME</th>
                                                    <th data-field="name">LASTNAME</th>
                                                    <th data-field="email">EMAILS</th>
                                                    <th data-field="phone">PHONE</th>
                                                    <th data-field="company">FEEDBACK MESSAGE</th>
                                                   <!--  <th data-field="complete"></th>
                                                    <th data-field="task" ></th> -->
                                                    <!-- <th data-field="date">PACKAGE TYPE</th> -->
                                                    <th data-field="price">STATUS</th>
                                                    <th data-field="action">ACTION</th> 
                                                    <th data-field="state">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $sta="tourist";
                                            $query="SELECT tbl_login.*,tbl_feedback.*,tbl_registration.firstname,lastname,emails,phone from tbl_login,tbl_feedback,tbl_registration where tbl_feedback.login_id=tbl_login.login_id and tbl_login.role='$sta'and tbl_registration.login_id=tbl_feedback.login_id;";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             $stat=$data['feed_status'];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['firstname'];?></td>

                                                  <td><?php echo $data['lastname'];?></td>

                                                  <td><?php echo $data['emails'];?></td>

                                                  <td><?php echo $data['phone'];?></td>

                                                  <td><?php echo $data['feed_message'];?></td>

                                                  

                                                  <td><center> <?php if ($a==$stat)
                                                                 {echo"Not Checked";}
                                                                 else if ($b==$stat)
                                                                 {echo"Accepted";}
                                                                 else{echo"Rejected";}?>
                                       
                                                                 </center>
                                                  </td>
                                                  
                                                     <td>
                                                        <div class="button-ap-list responsive-btn">
                                                          <div class="button-style-four btn-mg-b-10">
                                                           <a href="databasefun.php?felog_id=<?php echo $data['login_id'];?>">
                                                            <button class="btn btn-custon-rounded-four btn-success">Accept</button></a>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>
                                                       <div class="button-ap-list responsive-btn">
                                                        <div class="button-style-four btn-mg-b-10">

                                                          <a href="databasefun.php?felog_rdid=<?php echo $data['login_id'];?>">
                                                           <button class="btn btn-custon-rounded-four btn-warning">Reject</button></a>
                                                       </div>
                                                      </div>

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
