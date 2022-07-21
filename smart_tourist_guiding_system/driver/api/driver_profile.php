<?php
include 'connection.php';

$data_list = array();

if(isset($_POST['stud_id']))
{
    @$id = $_POST['stud_id'];
 
$query=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE login_id='$id' ");
$query2=mysqli_query($con,"SELECT * FROM `tbl_driver_profle` WHERE login_id='$id' "); 
$query3=mysqli_query($con,"SELECT * FROM `tbl_login` WHERE login_id='$id' "); 
$query4=mysqli_query($con,"SELECT * FROM `tbl_cab_details` WHERE login_id='$id' "); 



$real=mysqli_fetch_assoc($query);
$real2=mysqli_fetch_assoc($query2);
$real3=mysqli_fetch_assoc($query3);
$real4=mysqli_fetch_assoc($query4);


@$title=$real['firstname'];
@$title2=$real3['role'];
@$title3=$real['year'];
@$title4=$real2['image_url'];
@$title5=$real['emails'];
@$title6=$real['phone'];
@$title7=$real4['cab_reg_no'];
@$title8=$real3['total'];




if($query)
{

    $response['success'] =1;
    $response['message'] = "Updation successful";
    $response['firstname']=$title;
    $response['role']=$title2;
    $response['year']=$title3;
    $response['image_url']=$title4;
    $response['emails']=$title5;
    $response['phone']=$title6;
    $response['cab_reg_no']=$title7;
    $response['attendance']=$title8;




    echo json_encode($response);
}

else
{
    $response['success'] =0; 
    $response['result'] = "No data found!";
    
    echo json_encode($response);

}
}
else{
    $response['success'] =0; 
    $response['result'] = "No Access!";
    
    echo json_encode($response);
}


?>

