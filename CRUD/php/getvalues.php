<?php 
$conn = new mysqli("localhost", "root", "", "angularjs");
$sql="SELECT * FROM students";
$values=$conn->query($sql);
$data = array();
while ($row = mysqli_fetch_array($values)) {
  $data[] = $row;
}print json_encode($data);
  
?>