<?php

include './Include/nav.php';
include './Include/db.php';

?>
<?php

if(isset($_POST['btn-del']))
{
	$ID= $_GET['ID'];

	$crud->delete($ID);
	header("location:delete.php?deleted");
}

?>

<div class="container">
<?php
 
 if(isset($_GET['deleted']))
 {
?>

<div class="alert alert-success">
	<strong>Success!</strong> record Was Deleted
</div>
<?php


}
else{
?>

<div class="alert alert-danger">
	<strong>Sure!</strong> to remove following record
</div>

<?php

}?>
</div>

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
	<div class="container">
		<?php

		if(isset($_GET['ID']))
		{

		?>

		<table class="table table-bordered table-responisve">
			<tr>
				<th style="text-align:center;">S.No</th>
				<th style="text-align:center;">First Name</th>
				<th style="text-align:center;">Last Name</th>
				<th style="text-align:center;">Email</th>
				<th style="text-align:center;">Contact</th>
			</tr>
			<?php
				$stmt=$db->prepare("select * from boot_pdo where id=:id");
				 $stmt->execute (array(":id"=>$_GET['ID']));
				 while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				 	# code...
			?>

			<tr>
				<td style="text-align:center;"><?php echo $row['ID'];?></td>
				<td style="text-align:center;"><?php echo $row['First_Name'];?></td>
				<td style="text-align:center;"><?php echo $row['Last_Name'];?></td>
				<td style="text-align:center;"><?php echo $row['email'];?></td>
				<td style="text-align:center;"><?php echo $row['Contact'];?></td>
			</tr>
			<?php
		}?>
		</table>

	<?php

	}
?>
	</div>


	<div class="container">
		
		<p>
			<?php
			if(isset($_GET['ID']))
			{

			?>
		<form method="post">
			<button class="btn  btn-primary" type="submit" name="btn-del"><span class="glyphicon glyphicon-trash"></span>&nbsp; Yes</button>

			<a href="index.php" class="btn btn-success"><span class="glyphicon glyphicon-backward"></span>&nbsp; No</a>

		</form>
			<?php
		}else
		 {
		 	?>
		 	<a href="index.php" class="btn btn-success"><span class="glyphicon glyphicon-backward"></span>&nbsp; Back To Index</a>
		 	<?php

		 }?>

			</p>
	</div>
</body>
</html>