<?php 
require "dbconnect.php";
session_start();

$sql = "SELECT * FROM StudentTable;";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<div id="forSessionMsg">
			<?php if(isset($_SESSION['msg'])) { ?>
			<div class="alert alert-success" role="alert">
			 <?php echo $_SESSION['msg']; ?>
			</div>
		 	<?php session_destroy(); } ?>
		</div>

		<center>
			<h1 class="jumbotron">Student Information Apps</h1>
		</center>
		<br>
		<a href="form.php" class="btn btn-primary">Add Student</a>
		<br><br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>NAME</th>
					<th>ROLL</th>
					<th>E-MAIL</th>
					<th>ACTION</th>
				</tr>
			</thead>
			
			<tbody>
					<?php $x=1; if($result){while($row=$result->fetch_assoc()){ ?>
							<tr>
								<td><?php echo $x++; ?></td>
								<td><?php echo $row['Name']; ?></td>
								<td><?php echo $row['Roll']; ?></td>
								<td><?php echo $row['Email']; ?></td>
								<td>
									<a href="show.php?id=<?php echo $row['Id']; ?>" class="btn btn-success btn-sm">View</a>

									<a href="edit.php?id=<?php echo $row['Id']; ?>" class="btn btn-primary btn-sm">Edit</a>

									<a href="delete.php?id=<?php echo $row['Id']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
								</td>
							</tr>
					<?php }}else{echo "Not Connected";} ?>
			</tbody>
		</table>
	</div>

	<footer style="text-align: center; margin-top: 100px; padding: 10px; background-color: grey; color: white;">
		<h3>CRUD application of RAW PHP.</h3>
		<h4>&copy; <?php echo date("Y");?> | Developed by Ehsan.</h4>
	</footer>
</body>
</html>