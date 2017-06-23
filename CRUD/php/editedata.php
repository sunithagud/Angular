<?php 
$sno=$_GET['sno'];;
$servername = "localhost";
$username = "root";
$password = "";
$dbname="angularjs";
$conn = new mysqli("localhost", "root", "", "angularjs");
$sql = "select * from students where sno='$sno'";
$values=$conn->query($sql);
while ($row = mysqli_fetch_array($values)) {
  $data= $row;
}
print json_encode($data);

?>