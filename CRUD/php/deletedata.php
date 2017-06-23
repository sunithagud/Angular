<?php 
$sno=$_GET['sno'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="angularjs";
$conn = new mysqli("localhost", "root", "", "angularjs");

$sql = "delete from students where sno='$sno'";
$conn->query($sql);
?>