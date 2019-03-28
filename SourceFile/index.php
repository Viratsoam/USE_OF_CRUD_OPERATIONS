<?php
include './Include/db.php';
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

<?php include './Include/nav.php'; ?>

<div class="container">
<a href="add_records.php" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i>&nbsp; Add Records</a>	
</div>

<div class="clearfix"></div>
<br/>

<div class="container">
		<table class="table table-bordered table-responsive">
		<tr>
			<th style="text-align:center;">S.no</th>
			<th style="text-align:center;">First Name</th>
			<th style="text-align:center;">Last Name</th>
			<th style="text-align:center;">Email</th>
			<th style="text-align:center;">Contact Number</th>
			<th style="text-align:center;" colspan="2">Action</th>
		</tr>
		<?php
		
		$query = "SELECT *from boot_pdo";
		$crud->dataview($query);	
		?>

		</table>

	

</div>

</body>
</html>


















