<?php 
require "dbconnect.php";
session_start();

$id=$_GET['id'];

$sql = "DELETE FROM StudentTable WHERE Id=$id";

if($conn->query($sql))
{
	$_SESSION['msg']="Deleted Successfully";
	header("Location:index.php");
}
else{
	echo "Not Deleted";
}
?>