<?php 
 include 'connection.php';
 session_start();
?> 
<?php

            
         $uname=$_SESSION['login_id'];
                  
            $query="select * from tbl_registration where login_id='$uname'";
                  //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
            $data=mysqli_fetch_array($result);
           
      ?>
            <!--header menu end-->
            <?php
            $uname=$_SESSION['login_id'];
            $sql="select * from tbl_login where login_id='$uname'";
            $res =mysqli_query($con ,$sql);
            $row=mysqli_fetch_array($res);
           
          ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Touirst Guiding System </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forgotstyle.css">
</head>
<script type = "text/javascript">
   
      function validate() {
        var password1=document.myForm.passw.value;  
        var password2=document.myForm.conpassw.value;  
        

        

        var pwd_expression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
        
       
         if(password1=='')
        {
            alert('Please enter Password');
            return false;
        }
        else if(!pwd_expression.test(password1))
        {
            alert ('7 to 15 characters which contain at least one numeric digit and a special character  are required in Password filed');
            return false;
        }
        else if(password2=='')
        {
            alert('Enter Confirm Password');
            return false;
        }

        else if(password1 != password2)
        {
            alert ('Password not Matched');
            return false;
        }
       
       
        
        else{
            alert('Password Updated');
        }
          
               
       return( true );

      }



</script>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="resetpassword.php" name="myForm" method="POST" onsubmit = "return(validate());" autocomplete="">
                    <h2 class="text-center">Reset Password</h2>
                    <p class="text-center">Enter your new password</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="password" name="passw" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="conpassw" placeholder="conform password">
                    </div>
                   
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
   if(isset($_POST["login"])){
      
         //$uname=$_POST["passw"];
         $pass=$_POST["conpassw"];
         
         $sqll="update tbl_login set password='$pass' where login_id='$uname'";
       
         mysqli_query($con, $sqll);
        

          header("location:login.php");
        
    

         
       
          
            ?>
            
            <?php 
            
         
         
         mysqli_close($con);

         
   
   }
?>