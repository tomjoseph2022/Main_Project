<?php
session_start();
include 'connection.php';
if(empty($_SESSION['admin_id']))
    {
        header("location:../admin/login.php");
    }


?>

<?php 
$adminid=$_SESSION['admin_id'];
$sql="select * from tbl_admin_login where admin_id='$adminid'";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_array($result);
$name=$data['admin_username'];




?>

        <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/ui-sam.jpg" alt="" />
                    </a>
                    <h3><?php echo $name ?></h3>
                    <p>Admin</p>
                    <strong>AP+</strong>
                    
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="widgets.php" class="dropdown-item">Dashboard</a>
                                
                            </div>
                        </li>
                       
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Users</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="testtouristlist.php" class="dropdown-item">Tourists</a>
                                <a href="testguidelist.php" class="dropdown-item">Local Guides</a>
                                <a href="testdriver.php" class="dropdown-item">Drivers</a>
                                <a href="testcab.php" class="dropdown-item">Cabs</a>
                                <!-- <a href="driverlist.php" class="dropdown-item">Drivers</a> -->
                                <!-- <a href="guidelist.php" class="dropdown-item">Cabs2</a> -->
                                <!-- <a href="touristlist.php" class="dropdown-item">Cab1</a> -->
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Packages</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="packagelist.php" class="dropdown-item">Manage Packages</a>
                                <a href="createpackage.php" class="dropdown-item">Add Packages</a>
                                
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Places</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                                <a href="customtable.php" class="dropdown-item">Manage Places</a>
                                <!-- <a href="line-charts.html" class="dropdown-item">Line Charts</a>
                                <a href="area-charts.html" class="dropdown-item">Area Charts</a>
                                <a href="rounded-chart.html" class="dropdown-item">Rounded Charts</a>
                                <a href="c3.html" class="dropdown-item">C3 Charts</a>
                                <a href="sparkline.html" class="dropdown-item">Sparkline Charts</a>
                                <a href="peity.html" class="dropdown-item">Peity Charts</a> -->
                            </div>
                        </li>
                        <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Data Tables</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="static-table.html" class="dropdown-item">Static Table</a>
                                <a href="data-table.html" class="dropdown-item">Data Table</a>
                            </div>
                        </li> -->
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Booking</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="bookinglist.php" class="dropdown-item">Tourist Bookings</a>
                                <a href="bookguidelist.php" class="dropdown-item">Guide Bookings</a>
                                <a href="bookcablist.php" class="dropdown-item">Cab Bookings</a>
                                
                            </div>
                        </li>
                        <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">Payments</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                                <a href="notifications.html" class="dropdown-item">Payment History</a>
                                <a href="alerts.html" class="dropdown-item">Tourists Payment</a>
                                <a href="modals.html" class="dropdown-item">Guides Payments</a>
                                <a href="buttons.html" class="dropdown-item">Drivers Payments</a>
                                <a href="tabs.html" class="dropdown-item">Cab Rents</a>
                            </div>
                        </li> -->
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Feedbacks</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="touristfeedback.php" class="dropdown-item">Tourists Feedback</a>
                                <a href="guidefeedback.php" class="dropdown-item">Guides Feedback</a>
                                <a href="driverfeedback.php" class="dropdown-item">Driver Feedback</a>
                            </div>
                        </li>
                         <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Contacts</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="contactview.php" class="dropdown-item">Manage Contacts</a>
                                <!-- <a href="print.php" class="dropdown-item">View Mail</a>
                                <a href="compose-mail.html" class="dropdown-item">Compose Mail</a> --> 
                        </li>
                    </ul>
                </div>
            </nav>