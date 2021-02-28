<?php 
require "dbconnect.php";
$id=$_GET['id'];
session_start();

$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];

$sql = 
"UPDATE StudentTable SET Name='$name',Roll='$roll', Email='$email' WHERE Id='$id' ";

if($conn->query($sql))
{
	$_SESSION['msg']="Updated Successfully";
	header("Location:show.php?id=".$id);
}
else{
	echo "Not updated";
}
?>