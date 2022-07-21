<?php

include 'connection.php';
session_start();
?>


<?php
 $uname=$_SESSION['login_id'];
$sql="select * from tbl_regpics where login_id='$uname'";
            $res =mysqli_query($con ,$sql);
            $row=mysqli_fetch_array($res);
            $imageURL='image/'.$row["pro_proof"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>imagess</title>
</head>
<body>
    <?php echo $imageURL; ?>
    <img src="<?php echo $imageURL; ?>">

                    <center> <p class="centered"><a href="profiles.php"><img src="<?php echo $imageURL; ?>" class="img-circle" style=" border-radius: 50%;" width="50%"></a></p></center>


</body>
</html>