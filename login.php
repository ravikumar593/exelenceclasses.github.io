<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	*{
  		margin: 0;
  		padding: 0;
  		box-sizing: border-box;
  	}
  	.loginsection{
  		width:100%;
  		height: 100vh;
  		/*background-color: red;*/
  		background-image:url('login.jpg');
  		background-size: 100%,100%;
  		background-repeat: no-repeat;
  	}
  	.abc{
  		padding-top: 10px;
  	}
  	.abc h3{
  		background-image: linear-gradient(rgba(0,0,165,0.2),rgba(0,0,175,0.3));
  		color:#fff;
  		text-transform: capitalize;
  		font-size: 42px;
  		
  	text-shadow: 0px 2px red;
  	}
  	.header{
  		width:500px;
  		height:500px;
  		border: 1px solid blue;
  		padding: 50px;
  		padding-left: 8%;
  		margin-top: 50px;
  	}
  	.us2{
  		margin-left: -80px;
  		font-size: 20px;
  		text-transform: capitalize;
  	}
  	.user{
  		margin-left:80px; 
  	}
  	.ps{
  		margin-left: -80px;
  		font-size: 20px;
  		text-transform: capitalize;
  	}
  	.psd{
  		margin-left:80px; 
  	}
  </style>
</head>
<body>
	<?php
	include 'commection.php';
	if (isset($_POST['login'])){

	$user=$_POST['email'];
	$pas=$_POST['pass'];

	$query="select * from adminlogin where email='$user'";
	$q=mysqli_query($q,$query);
	$count=mysqli_num_rows($q);

	if($count==1){

		$f=mysqli_fetch_array($q);

		if($f['pass']==$pas){
			 // ..................
			header('location:home.php');
		}
		else{
			 ?>
			 <script type="text/javascript">
			 	alert ("wrong password");
			 </script>
			 <?php
		}
		}
		else{
			?>
			 <script type="text/javascript">
			 	alert ("@@ you are not a admin");
			 </script>
			 <?php
	
							}
						}
?>
	<div class="loginsection">
	<div class="container text-center abc"> <h3>admin pannel</h3></div>
	<div class="container header">
		<form action="" method="post">
	<label class="text-center us2">username</label>
	<input class="user" type="email" name="email" placeholder="ENTER USERNAME"><br><br>
	<LABEL class="text-center ps">password</LABEL>
	<input class="psd" type="password" name="pass" placeholder="ENTER password"><br><br>
	<input class="btn btn-warning" type="submit" name="login" value="login">
	</form>
	</div>
	</div>
</body>
</html>
