<?php
 include './Include/nav.php';
?>
<?php
 include './Include/db.php';
?>

<?php

if(isset($_POST['submit']))
{
	$First = $_POST['First'];
	$Last = $_POST['Last'];
	$email = $_POST['Email'];
	$Contact = $_POST['Contact'];


	if ($crud->create($First,$Last,$email,$Contact)) {
		# code...
		
		header("location:add_records.php?insert");
	}
	else
	{
		header("location:add_records.php?fail");
	}
}


?>

<?php
	
	if(isset($_GET['insert']))
	{
?>
<div class="container">
	<div class="alert alert-info">
		<strong>Insert Successfully!</strong>
	</div>
</div>
<?php
}
?>
<?php
	
	if(isset($_GET['fail']))
	{
?>
<div class="container">
	<div class="alert alert-danger">
		<strong>Data Has not be inserted!</strong>
	</div>
</div>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dynamic Webpage</title>

	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="clearfix"></div><br/>
	<div class="container">
		
		<form method="post">
			<table class="table table-bordered">
				
				<tr>
					<td>First Name</td>
					<td><input type="text" name="First" placeholder="Enter First Name" class="form-control" required="required"></td>
				</tr>

				<tr>
					<td>Last Name</td>
					<td><input type="text" name="Last" placeholder="Enter Last Name" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td>Your Email ID</td>
					<td><input type="Email" name="Email" placeholder="Enter your Email" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="Mobile" name="Contact" placeholder="Enter your Contact No" class="form-control" required="required"></td>
				</tr>
				<tr>
				<td colspan="2">
				<button class="btn btn-primary" type="submit" name="submit"><i class="glyphicon glyphicon-plus"></i>&nbsp;Create New Record</button>
				<a href="index.php" class="btn btn-success"><i class="	glyphicon glyphicon-backward"></i>&nbsp;Back to index</a>
				</td>
				</tr>
			</table>

		</form>

	</div>



</body>
</html>