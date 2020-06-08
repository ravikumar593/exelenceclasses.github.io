<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div><h2>welcome to the home page</h2>
	<form action="logout.php" method="post">
	<input type="submit" name="logout" value="logout" class="btn btn-primary fr-auto">
	</form>
</div>
<div class="container ">
	<table class="table">
		<thead>
			<tr class="text-center bg-dark text-white text-capitalize"><td colspan="6"  >inserted data from user</td></tr>
		</thead>
		<tbody>
			<tr>
				<td>sl.</td>
				<td>name</td>
				<td>fathers name</td>
				<td>class</td>
				<td>address</td>
				<td>mobile</td>
			</tr>
			<?php
	include'commection.php';
	$select="select * from student";
	$quiry=mysqli_query($q,$select);
	$count=mysqli_num_rows($quiry);

	while($rest=mysqli_fetch_array($quiry)){
		?>
		<tr>
			<td><?php echo  $rest['id']; ?></td>
			<td><?php echo  $rest['name']; ?></td>
			<td><?php echo  $rest['fname']; ?></td>
			<td><?php echo  $rest['class']; ?></td>
			<td><?php echo  $rest['address']; ?></td>
			<td><?php echo  $rest['mobile']; ?></td>
		</tr>
<?php
	}
?>

		</tbody>
	</table>
</div>
</body>
</html>
