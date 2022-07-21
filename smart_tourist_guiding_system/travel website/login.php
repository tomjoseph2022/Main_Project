
<?php 
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Smart Touirst Guiding System </title>
      <link rel="stylesheet" href="css/logincss.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <!-- <script type="text/javascript">
         function preventBack() {
          window.history.forward();
           }
         setTimeout("preventBack()", 0);
         window.onunload = function() { null};

      </script> -->
   </head>
   <body>
      <div class="bg-img">
         <div class="content">
            <a href="index.html"><img src="images/2.png" style="margin-bottom: -43px;border-radius: 50% ;margin-left: -250px;"  
          class="img-circle"  width="40"; ></a>
            <header>Login Form</header>
            <form action="#" method="POST"  enctype="multipart/form-data">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" required name="uname" placeholder="Enter Your Username" required>
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" name="pass"  placeholder="Enter Your Password" required>
                  
               </div>
               <div class="pass">
                  <a href="forgot.php">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" name="login" value="LOGIN">
               </div>
            </form>
            <div class="login">
               
            </div>
            <div class="links">
               <div class="facebook">
                 <a href="index.php" style="text-decoration:none;font-size: 20px;color: white;">Home</a>
               </div>
               <div class="instagram">
               <a href="registration.php" style="text-decoration:none;font-size: 20px;color: white;">Signup Now</a>
               </div>
               <table style="border-collapse: collapse;border: 100px;"></table>
            </div>
            
         </div>
      </div>
     
   </body>
</html>

<?php
   if(isset($_POST["login"])){
      
         $uname=$_POST["uname"];
         $pass=$_POST["pass"];
         
         $sql="select login_id,username,password,status,role from tbl_login where username='$uname' and password='$pass' and status in ('1' , '0') and role in ('tourist' , 'guide');";
         $result=mysqli_query($con,$sql);
         $count=mysqli_num_rows($result);
       
          while($row=mysqli_fetch_array($result))
           {
         
           $userids=$row['login_id'];
           $rol=$row['role'];
         
           }
         
         
         if($count>0 && $rol == "tourist")
         {  
            $_SESSION['login_id'] = $userids;
            header("location:../sidebar/index.php");
            
         }
         else if($count>0 && $rol == "guide")
         {  
            $_SESSION['login_id'] = $userids;
            header("location:../guide/index.php");
            
         }
         else
         {
            ?>
            <script>
            alert("invalid username or password");
            </script>
            <?php 
            
         }
         
         mysqli_close($con);

         
   
   }


