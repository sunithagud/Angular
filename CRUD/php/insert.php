<?php 
$data = json_decode(file_get_contents("php://input"));
$sno = $data->sno;
$name = $data->name;
$course = $data->course;
$conn = new mysqli("localhost", "root", "", "angularjs");

$sql="INSERT INTO students(`sno`,`name`,`course`) VALUES ('".$sno."','".$name."','".$course."')";
$conn->query($sql);

?>