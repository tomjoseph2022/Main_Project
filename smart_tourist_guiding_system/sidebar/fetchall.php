//<?php
 //  include 'connection.php';

   
 //  $sql = 'SELECT log_id,username,password,role FROM tbl_login';

 //  $as = mysqli_query( $sql, $con);
   
   
 //  while($row = mysqli_fetch_array($as, MYSQL_ASSOC)) {
 //     echo "EMP ID :{$row['log_id']}  <br> ".
 //        "EMP NAME : {$row['username']} <br> ".
 //        "EMP SALARY : {$row['password']} <br> ".
 //        "EMP role : {$row['role']} <br> ".
 //        "--------------------------------<br>";
 //  }
   
 //  echo "Fetched data successfully\n";
   
 //  mysql_close($conn);
//?>
<?php
include 'connection.php';


if($con-> connect_error)
{
   die("Could not connect:". $con->connect_error);
}

$sql = "SELECT * FROM tbl_login";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {

        echo "ID    : " . $row['login_id'] . " Name :" . $row['username'] . " Email : " . $row['password'] . "<br>";
    }
} else {
    echo "No record exists!!";
}

$con->close();
?>