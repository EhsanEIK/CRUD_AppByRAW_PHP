<?php
require "dbconnect.php";
$id=$_GET['id'];

$sql="SELECT * FROM StudentTable WHERE Id=$id";
$result=$conn->query($sql);
$student=$result->fetch_assoc();
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div id="forSessionMsg">
			<?php if(isset($_SESSION['msg'])) { ?>
			<div class="alert alert-success" role="alert">
			 <?php echo $_SESSION['msg']; ?>
			</div>
		 	<?php session_destroy(); } ?>
		</div>

		<center>
			<h2 class="jumbotron">View</h2>
			<a href="index.php" class="btn btn-warning btn-sm">Home</a>
			<a href="edit.php?id=<?php echo $student['Id']; ?>" class="btn btn-primary btn-sm">Edit</a>
			<table>
				<tr>
					<th>Name</th>
					<td><?php echo $student['Name']; ?></td>
				</tr>
				<tr>
					<th>Roll</th>
					<td><?php echo $student['Roll']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $student['Email']; ?></td>
				</tr>
			</table>
		</center>
	</div>
</body>
</html>