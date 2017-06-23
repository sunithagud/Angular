<?php 
$data = json_decode(file_get_contents("php://input"));

$sno = $data->sno;
$name=$data->name;
$course=$data->course;
$conn = new mysqli("localhost", "root", "", "angularjs");

$sql="UPDATE students SET name='$name', course='$course' WHERE sno='$sno'";
$conn->query($sql);

?>