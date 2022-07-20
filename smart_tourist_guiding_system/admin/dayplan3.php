<?php
 include 'connection.php';
 $ids = $_GET['pid'];
 ob_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout | Adminpro - Admin Template</title>
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
    <!-- form CSS
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
    <script>
    function myFunction() 
    {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
          text.style.display = "none";
        }
    }


    function myFunctions()
     {
        var checkBoxs = document.getElementById("myChecks");
        var texts = document.getElementById("texts");
         if (checkBoxs.checked == true){
        texts.style.display = "block";
        } else {
        texts.style.display = "none";
        }
    }
</script>
<script type = "text/javascript">
   
      function validate() {
         
        var hotell=document.myForm.hotel.value;
        var brak=document.myForm.breakfast.value;
        var act1=document.myForm.activity1.value;
        var lanch=document.myForm.launch.value;
        var act2=document.myForm.activity2.value;
        
        var dinn=document.myForm.dinner.value;
        

        

         var pwd_expression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
         var letters = /^[A-Za-z ,]+$/;
         var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         var phoneno = /^\d{10}$/;
         var a = /(^\d{6}$)/;  

      
        if(hotell=='')
        {
            alert('Please Enter your Hotel');
            return false;
        }
        else if(brak=='')
        {
            alert('Please enter  Breakfasts');
             return false;
        }
        else if(!letters.test(brak))
        {
            alert('Breakfast field required only alphabet characters');
            return false;
        }
        else if(act1=='')
         {
             alert('Please enter  Activity 1');
             return false;
         }
        else if(!letters.test(act1))
        {
            alert('Activity1 field required only alphabet characters');
            return false;
        }
         else if(lanch=='')
        {
             alert('Please select  Launch');
             return false;
        }
        else if(act2=='')
        {
            alert('Please enter  Activity2');
             return false;
        }
        else if(!letters.test(act2))
        {
            alert('Activity2 field required only alphabet characters');
            return false;
        }
        
        else if(dinn=='')
        {
            alert('Please select  Dinner');
             return false;
        }
        
        
        else{
            alert('Dayplan Sucessfully Submitted');
        }
          
               
       return( true );

      }

    </script>
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
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Checkout</span>
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
            
            <!-- Breadcome End-->
            <!-- Checkout Start-->
            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form name="myForm" id="adminpro-checkout-form"  class="adminpro-form" action="#" method="POST"  enctype="multipart/form-data" onsubmit = "return(validate());">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                <h1>DAYPLAN3</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Hotel </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="hotel" />
                                                <i class="fa fa-user login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Time of Arrival</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="interested-input-area">
                                                <select name="interested">
                                                    <option value="none" selected="" disabled="">select</option>
                                                    <option value="0">Morning</option>
                                                    <option value="1">Afternoon</option>
                                                    <option value="2">Evening</option>
                                                   
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>BreakFast</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="breakfast" />
                                                <i class="fa fa-user login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Activities 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="activity1" />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Launch</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="interested-input-area">
                                                <select name="launch">
                                                    <option value="">select</option>
                                                    <option value="Veg">Veg</option>
                                                    <option value="Non Veg">Non Veg</option>
                                                    <option value="International Dishes">International Dishes</option>
                                                   
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Activities 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="activity2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>ADD Activity 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="checkbox" id="myCheck"  onclick="myFunction()" style="margin-top:20px" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" id="text" name="addacty1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>ADD Activity 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="checkbox" id="myChecks"  onclick="myFunctions()" style="margin-top:20px" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" id="texts" name="addacty2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Dinner</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="interested-input-area">
                                                <select name="dinner">
                                                    <option value="">select</option>
                                                    <option value="Veg">Veg</option>
                                                    <option value="Non Veg">Non Veg</option>
                                                    <option value="International Dishes">International Dishes</option>
                                                   
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <b><p style="margin-left:250px">Customizations</p></b>
                                            </div>
                                        </div> -->
                                       <!--  <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="email" name="email" />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div> -->
                                

                                        
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <a href="dayplan4.php?pid=<?php echo $ids ?> "> 
                                                <input type="button" name="addpage" type="submit" class="login-button login-button-lg" value="ADD Page"></a>&nbsp &nbsp
                                                &nbsp<button type="submit" name="click" class="login-button login-button-lg">Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Checkout End-->
        </div>
    </div>
    <!-- Footer Start-->
    
    <!-- Footer End-->
    <!-- jquery
        ============================================ -->
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
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- maskedinput JS
        ============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
        ============================================ -->
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/datepicker-active.js"></script>
    <!-- form validate JS
        ============================================ -->
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form-active.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
</body>

</html>

<?php
    


   if(isset($_POST["click"]))

   {
 
      $arr=$_POST["hotel"];
  
      $hot=$_POST["breakfast"];
      $act1=$_POST["activity1"];
      $lan=$_POST["launch"];
      $act2=$_POST["activity2"];
      $adact1=$_POST["addacty1"];
      $adact2=$_POST["addacty2"];
      $din=$_POST["dinner"];

      if(empty($adact1)){
        $adact1="nill";

      } else{

      }

       if(empty($adact2)){
        $adact2="nill";

      } else{

      }
     

     


      

        $sql = "INSERT INTO tbl_dayplan3(hotel,breakfast,activity1,launch,activity2,addactivity1,addactivity2,dinner,package_id) VALUES ('$arr','$hot','$act1','$lan','$act2','$adact1','$adact2','$din','$ids')"; 
      
        mysqli_query($con,$sql); 

        echo "sucess";
                
            //header('location:dayplan3.php?pid='.$ids);
        header('location:dayplan3.php?pid='.$ids);

            //header('location:packagelist.php');
         ob_end_flush();    


             





    } 

 ?>