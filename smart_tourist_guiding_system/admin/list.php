<?php
include 'connection.php';
?>
<html>

<head>



<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php
$query="select * from tbl_registration";                                   
$result = mysqli_query($con ,$query);
echo "<table border='1'>

<tr>

 <th><center> firstname</center></th>
 <th><center> lastname</center></th>
 <th><center> address</center></th>
 <th><center> emails</center></th>
 <th><center> dobs</center></th>
 <th><center>username</center></th>
 <th><center> phone</center></th>
 <th><center>gender</center></th>

</tr>";

 

while($data = mysqli_fetch_array($result))

  {

  echo "<tr>";

 
  echo "<td>" . $data['firstname'] . "</td>";

  echo "<td>" . $data['lastname']. "</td>";

  echo "<td>" .  $data['address'] . "</td>";

  echo "<td>" . $data['emails'] . "</td>";

  echo "<td>" . $data['dobs'] . "</td>";

  echo "<td>" . $data['username'] . "</td>";

  echo "<td>" . $data['phone'] . "</td>";

  echo "<td>" . $data['gender'] . "</td>";

 
  echo "</tr>";


  }

echo "</table>";

 

mysql_close($con);

?>

</body>

</html>