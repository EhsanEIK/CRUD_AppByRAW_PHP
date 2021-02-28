<?php
require "dbconnect.php";
$id=$_GET['id'];

$sql="SELECT * FROM StudentTable WHERE Id=$id";
$result=$conn->query($sql);
$student=$result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>
	<div class="container">
		<form class="form-horizontal" action="update.php?id=<?php echo $student['Id']; ?>" method="post">
			<h2 class="jumbotron">Edit Student</h2>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Name:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" value="<?php echo $student['Name'] ?>" name="name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Roll:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" value="<?php echo $student['Roll'] ?>" name="roll">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">E-mail:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" value="<?php echo $student['Email'] ?>" name="email">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Submit</button>
			    </div>
			  </div>
		</form>
	</div>
</body>
</html>