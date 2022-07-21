<?php
include 'connection.php';
$ids = $_GET['package_id'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DAY PLAN</title>
    <link rel="stylesheet" href="css/dayplanstyle.css" />
  </head>
  <body style="background-color:#d7d7fb;">
    <div class="event-container">
      <h3 class="year">DAY PLAN</h3>
      <?php


              $query="select * from tbl_dayplan1 where package_id='$ids'";
              //$query = “select * from tbl_login";
              $result = mysqli_query($con ,$query);
              $rows=mysqli_fetch_array($result);
              //$arr=$rows['Arrival'];
              if($rows == ''){

              }
              else{
                ?>

                <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">1</div>
            <div class="month">DAY</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title"><center>First Day Activity Chart</center></h3>

          <div class="event-description">
            <center>This Chart shows the major travel activities in the first day.</center>
          </div>
          

         <!--  <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div> -->
          <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Arrival in :&nbsp<?php echo $rows['Arrival']  ?></b>
          </div>
          <!-- <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-110px">  Transfer from Airport in Chandigarh to hotel in Manali
          </div> -->
           <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Check-in to Hotel Name :&nbsp <?php echo $rows['Hotel'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 1:&nbsp <?php echo $rows['Activity1'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Launch: &nbsp <?php echo $rows['Launch'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 2: &nbsp <?php echo $rows['Activity2'] ?></b>
          </div>

          <?php 

          $ar=$rows['addactivity1'];
          if($ar == 'nill')
          {

          }
          else{
            ?>
            <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 3: &nbsp <?php echo $rows['addactivity1'] ?></b>
          </div>
          <?php

          }

          ?>

          <?php 

          $arrr=$rows['addactivity2'];
          if($arrr == 'nill')
          {

          }
          else{
            ?>
            <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 4: &nbsp <?php echo $rows['addactivity2'] ?></b>
          </div>
          <?php

          }

          ?>



          
          
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Dinner : Included at Hotel</b>
          </div>
        </div>
      </div>



              <?php
              }
              
             

        ?>

        <!-- .......................................................... -->

      <?php


              $query="select * from tbl_dayplan2 where package_id='$ids'";
              //$query = “select * from tbl_login";
              $result = mysqli_query($con ,$query);
              $rowss=mysqli_fetch_array($result);
              //$arr=$rows['Arrival'];
              if($rowss == ''){

              }
              else{
                ?>

              <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">2</div>
            <div class="month">Day</div>
          </div>
        </div>
         

        <div class="event-right">
          <h3 class="event-title"><center>Second Day Activity Chart</center></h3>

          <div class="event-description">
            <center>This Chart shows the major travel activities in the second day.</center>
          </div>

          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Hotel :&nbsp <?php echo $rowss['hotel'] ?></b> 
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Breakfast : &nbsp <?php echo $rowss['breakfast'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Activity 1 :  &nbsp <?php echo $rowss['activity1'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Launch : &nbsp <?php echo $rowss['launch'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Activity 2 : &nbsp <?php echo $rowss['activity2'] ?></b>
          </div>

           <?php 

          $ar=$rowss['addactivity1'];
          if($ar == 'nill')
          {

          }
          else{
            ?>
            <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 3: &nbsp <?php echo $rowss['addactivity1'] ?></b>
          </div>
          <?php

          }

          ?>

          <?php 

          $arrr=$rowss['addactivity2'];
          if($arrr == 'nill')
          {

          }
          else{
            ?>
            <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 4: &nbsp <?php echo $rowss['addactivity2'] ?></b>
          </div>
          <?php

          }

          ?>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Dinner :  &nbsp <?php echo $rowss['dinner'] ?></b>
          </div>
        </div>
      </div>





                <?php
              }
              
             

        ?>

       <!--  .................................................................................... -->


       <?php


              $query="select * from tbl_dayplan3 where package_id='$ids'";
              //$query = “select * from tbl_login";
              $result = mysqli_query($con ,$query);
              $rowss=mysqli_fetch_array($result);
              //$arr=$rows['Arrival'];
               if($rowss == ''){

              }
              else{
                ?>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">3</div>
            <div class="month">Day</div>
          </div>
        </div>

        

        <div class="event-right">
          <h3 class="event-title"><center>Third Day Activity Chart</center></h3>

          <div class="event-description">
           <center>This Chart shows the major travel activities in the third day.</center>
          </div>

          <center><div class="event-timing">
          <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Hotel :&nbsp <?php echo $rowss['hotel'] ?></b> 
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Breakfast : &nbsp <?php echo $rowss['breakfast'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Activity 1 :  &nbsp <?php echo $rowss['activity1'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Launch : &nbsp <?php echo $rowss['launch'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Activity 2 : &nbsp <?php echo $rowss['activity2'] ?></b>
          </div>

           <?php 

          $ar=$rowss['addactivity1'];
          if($ar == 'nill')
          {

          }
          else{
            ?>
            <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 3: &nbsp <?php echo $rowss['addactivity1'] ?></b>
          </div>
          <?php

          }

          ?>

          <?php 

          $arrr=$rowss['addactivity2'];
          if($arrr == 'nill')
          {

          }
          else{
            ?>
            <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 4: &nbsp <?php echo $rowss['addactivity2'] ?></b>
          </div>
          <?php

          }

          ?>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Dinner :  &nbsp <?php echo $rowss['dinner'] ?></b>
          </div>
        </div>
      </div>






           <?php
         }

              
             

        ?>
 <!-- ............................................................................................... -->
      

      <!-- <h3 class="year">2021</h3> -->

       <?php


              $query="select * from tbl_dayplan4 where package_id='$ids'";
              //$query = “select * from tbl_login";
              $result = mysqli_query($con ,$query);
              $rowss=mysqli_fetch_array($result);
              //$arr=$rows['Arrival'];
               if($rowss == ''){

              }
              else{
                ?>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">4</div>
            <div class="month">Day</div>
          </div>
        </div>
         

        <div class="event-right">
          <h3 class="event-title"><center>Fourth Day Activity Chart</center></h3>

          <div class="event-description">
            <center>This Chart shows the major travel activities in the fourth day.</center>
          </div>

          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Hotel :&nbsp <?php echo $rowss['hotel'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Breakfast : &nbsp <?php echo $rowss['breakfast'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Activity 1 :  &nbsp <?php echo $rowss['activity1'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Launch : &nbsp <?php echo $rowss['launch'] ?></b>
          </div>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Activity 2 : &nbsp <?php echo $rowss['activity2'] ?></b>
          </div>

           <?php 

          $ar=$rowss['addactivity1'];
          if($ar == 'nill')
          {

          }
          else{
            ?>
            <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 3: &nbsp <?php echo $rowss['addactivity1'] ?></b>
          </div>
          <?php

          }

          ?>

          <?php 

          $arrr=$rowss['addactivity2'];
          if($arrr == 'nill')
          {

          }
          else{
            ?>
            <div class="event-timing">
            <img src="images/Aircraft.png" alt="" / style="margin-left:-40px"><b style="font-size: 20px">  Activity 4: &nbsp <?php echo $rowss['addactivity2'] ?></b>
          </div>
          <?php

          }

          ?>
          <div class="event-timing">
            <img src="images/Aircraft.png" alt=""  style="margin-left:-40px"><b style="font-size: 20px">  Dinner :  &nbsp <?php echo $rowss['dinner'] ?></b>
          </div>
        </div>
      </div>

      <?php

    }

    ?>

      <!-- <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">4</div>
            <div class="month">Apr</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div> -->

      <!-- <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">8</div>
            <div class="month">Jun</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div> -->
    </div>
    <a href="packagedetails.php?package_id=<?php echo $ids ?> ">">
    <input type="button" name="back" value="Back" style="margin-left:750px;height: 40px;width: 100px;border-radius: 40px;background-color: green;color: white;"></a><br>


  </body>
</html>
