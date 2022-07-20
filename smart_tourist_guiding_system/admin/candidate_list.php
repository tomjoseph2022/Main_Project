<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
    button{
       border-radius: 0.35rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
   -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  vertical-align: right;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
    }
    .btn:hover {
  color: #858796;
  text-decoration: none;
}

  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
 <?php include "sidebar.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
 <?php include "navbar.php"; ?>
 
        <!-- End of Topbar -->

         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><center>manage positions</center></h1>

  
           <?php
      include_once("db_functions.php");
      $obj=new connection;
      $row=$obj->getall("SELECT * FROM `tbl_candidate`")
     
      ?>
        <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">list of positions</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="4">
                  <thead>
                    <tr>
                      <th><center> Name</center></th>
                       <th><center> Class</center></th>
                       <th><center> Div</center></th>
                       <th><center> Image</center></th>
                       <th><center> Status</center></th>
                       <th><center> D.O.B</center></th>
                       <th><center> View</center></th>
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
                      <td><center> <?php echo $row ['cand_name'];?></center></td>
                      <td><center> <?php echo $row ['cand_class'];?></center></td>
                      <td><center> <?php echo $row ['cand_div'];?></center></td>
                      <td><center> <img src="<?php echo $row ['image'];?>" width="100" height="100">
                      </center></td>
                      <td><center> <?php if ($a==$cand_status)
                      {echo"Pending";}
                       else if ($b==$cand_status)
                        {echo"Accepted";}
                         else{echo"Rejected";}?>
                           
                         </center></td>
                       <td><b> <?php echo $row ['cand_dob'];?></b>
                       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                         
                          <div align="right">
                  <td> 
                    <a href="student_verify.php?candidate_id=<?php echo $row ['cand_id'];?>">
                        <button style="margin-top: 1px;" class="btn pull-right btn-sm btn-primary hblogin-submit-cs" type="submit" name="pos_delete">View</button>
                    </a>
                 </div>
                   
                       </td>
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
    </div></div>
      <!-- End of Main Content -->
      <?php
      include_once 'footer.php';
      ?>
</body>

</html>
