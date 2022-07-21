<?php
include 'connection.php';
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Smart Touirst Guiding System </title>
    <link rel="stylesheet" href="css/contactstyle.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="contact.php" method="POST"  enctype="multipart/form-data">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="con_name" required>
        </div>
        <div class="input-box">
          <input type="email" placeholder="Enter your email" name="con_email" required>
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message" name="con_message" required></textarea>
        </div>
        <div class="button">
          <input type="submit" name="click" style="width:81px;height: 38px;border-radius: 08px;background-color:blue;color: white;"  value="Send Now" >
        </div>
        <div class="button">
          <a href="index.php"><input type="button" value="Home" style="margin-left: 500px;background-color: rgb(27, 238, 168);" ></a>
        </div>
      </form>
    </div>
    </div>
  </div>

</body>
</html>
<?php

   if(isset($_POST["click"]))

   {
 
      $cname=$_POST["con_name"];
  
      $cemail=$_POST["con_email"];
      $cmess=$_POST["con_message"];
     
      $req = "insert into tbl_contact(contact_name,contact_email,contact_message,contact_status) values ('$cname','$cemail','$cmess','0')";
      
      mysqli_query($con,$req);

      echo"<script>Contact not Sended</script>";
       

      header("location:index.php");

    


     }else{
       echo"<script>Contact not Sended</script>";
     }
     

     ?> 