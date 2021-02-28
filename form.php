<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>
	<div class="container">
		<form class="form-horizontal" action="action.php" method="post">
			<h2 class="jumbotron">Add Student</h2>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="name">Name:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="roll">Roll:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="roll">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">E-mail:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="email">
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