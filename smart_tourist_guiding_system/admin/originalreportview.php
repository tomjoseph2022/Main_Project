<!doctype html>
<html class="no-js" lang="en">

<?php include_once("head.php"); ?>


<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <?php include_once("sidebar.php"); ?>

        <!-- Header top area start-->
        <?php include_once("content.php"); ?>

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
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Table</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- the table start -->

          <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Project <span class="table-project-n">:</span> Table</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                               <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" 


                                         <?php
                                            include_once("db_functions.php");
                                            $obj=new connection;
                                            $row=$obj->getall("SELECT * FROM `report_table`");
     
                                             ?>

                                             <!-- DataTales Example -->

                                            <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-danger">&nbsp &nbsp Report From Users</h6>
                                            </div>
                                            <div class="card-body">
                                            <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="4">
                                            <thead>
                                                <tr>
                                                   
                                                    <th><center> NAME</center></th>
                                            <!--    <th><center> Div</center></th>-->
                                                    <th><center> PHONE.NO</center></th>
                                                    <th><center> USERTYPE</center></th>
                                                    <th><center> E-MAIL</center></th>
                                                    <th><center> REPORT TYPE</center></th>

                                                    <th><center> REPORT</center></th>
                                                     <th><center> STATUS</center></th>
                                                    <th><center> VIEW</center></th>
                                                    
                                                 </tr>
                                            </thead>
                                        <!-- <tfoot>
                                                <tr>
                                                <th>position</th>
                                                <th>position id</th>
                                                </tr> 
                                             </tfoot>-->

                                            <tbody>
                                                <?php
                                                $a=0;
                                                $b=1;
                                                $c=2;
                                                foreach ($row as $row){
                                                extract($row);?>
                                                <tr>
                                                    <td><center> <?php echo $row ['report_name'];?></center></td>
                                                    <td><center> <?php echo $row ['report_phone'];?></center></td>
                                                    <td><center> <?php echo $row ['report_usertype'];?></center></td>
                                                    <td><center> <?php echo $row ['report_email'];?></center></td>
                                                    <td><center> <?php echo $row ['report_report_type'];?></center></td>
                                                    <td><center> <?php echo $row ['report_user_report'];?></center></td>

                                            <!--    <td><center> <img src="<?php echo $row ['image'];?>" width="100" height="100">
                                                     </center></td>-->
                                                     <td><center> <?php if ($a==$report_status)
                                                     {echo"Not Checked";}
                                                     else if ($b==$report_status)
                                                     {echo"Accepted";}
                                                     else{echo"Rejected";}?>
                           
                                                     </center></td>
                                                     
                                                    <div align="right">
                                                    <td>

                                                         <a href="originalreportverification.php?report_id=<?php echo $row ['report_id'];?>">
                                                            
                                                            <button style="margin-top: 1px;"  class="btn pull-right btn-sm btn-primary hblogin-submit-cs" type="submit" name="pos_delete">View</button>
                                                             </a>
                                                       </center>
                   
                                                    </td>
                                                </div>
                                                </tr>
                                              <?php
                                             }?>
                                             </tbody>
                                         </table>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>  
                </div> 
             </div>   
        </div>
    </div>
    <!-- Footer Start-->
   <?php include_once("footer.php"); ?>

</body>

</html>
