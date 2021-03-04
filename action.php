<?php
require "dbconnect.php";
session_start();

$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];

$sql = 
"INSERT INTO StudentTable VALUES(Null,'$name','$roll','$email')";

if($conn->query($sql))
{
	$_SESSION['msg']="Student Added Successfully";
	header("Location:index.php");
}
else{
	echo "Not Inserted";
}
?>