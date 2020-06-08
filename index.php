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
  <link rel="stylesheet" href="style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<!----------------------------------nav section start------------------------------>
<div class="container-flued">
	<div class="container-flued">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					  <a class="navbar-brand text-uppercase" href="#">excelence classes</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto px-5">
						  <li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="#">student</a>
						  </li>
						 <li class="nav-item">
							<a class="nav-link" href="#">about us</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="login.php">login</a>
						  </li>
						 
						</ul>
						<form class="form-inline my-2 my-lg-0">
						  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					  </div>
			</nav>
	 </div>
</div>
<!----------------------------------nav section end------------------------------>
<!----------------------------------body section start--------------------------->
<section class="header">
	<div class="container text-center " >
		<div class="noentry">
		<h1 > welcome to the excelence classes</h1>
		<div class="poem"><marquee direction="up" scrolldelay="180" style="height: 500px; width: 100%px;" ><img src="poem.png"></marquee></div>
		</div>
	</div>
</section>
	
<!----------------------------------body section end------------------------------>
<!----------------------------------course section start------------------------------>
<br><br>
<section class="coursesection">
	<div class="container">
		<table class="table">
			<thead>
				<tr><th class="text-center bg-dark text-white" colspan="6"><h3 class="text-capitalize">we provide</h3></th></tr>
			</thead>
			<tbody>
				<tr class="" >
					<td rowspan="6" class="text-center text-uppercase" >specification</td>
				</tr>
				<tr>
					<td class=" "><strong>1) we have best faculty in Ranchi specialist in board examination preparation </strong></td>
					
					
				</tr>
			<tr>
				<td class=""><strong>2) we offer daily & doubt clearing classes</strong></td>
			</tr>
			<tr>
				<td class=""><strong>3) we guide your childs for future .....</strong></td>
			</tr>
			</tbody>
		</table>
	</div>
</section>
<!----------------------------------course section end--------------------------------->
<section class="registerd"><br>
<div class="container">
	<div class="formdiv">
		<h1 class="text-center">Registration Form </h1><br><br>
		<marquee class="text-white" direction="left" scrolldelay="180" style="margin-left: 220px; margin-right: 200px; margin-top:-125px;"><img src="new.gif" width="25" height="11" style="padding-right: 3px;"> Registeration are  open on special discount .... 
			</marquee>

<?php
	include 'commection.php';
	
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$fname=$_POST['fname'];
		$class=$_POST['class'];
		$mobile=$_POST['mobile'];
		$add=$_POST['address'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];

		
		if($pass===$cpass){

		$ins="insert into student(name, fname, class,mobile, address, pass, cpass) values('$name','$fname','$class','$mobile','$add','$pass','$cpass')";	
		$insertquery=mysqli_query($q,$ins);
		if($insertquery){
			echo ("data inserted successfuly");
		}
		else{
			echo ("dta not inserted");
		}

	}
	else{
		echo ("pass not match");
	}
	}

?>



		<form class="formdata" action="" method="POST">
			<label class="name" >name</label>
			<input  class="inputclass1" type="text" name="name" class=""><br>
			<label class="name">father's name</label>
			<input  class="inputclass2" type="text" name="fname"><br>
			<label class="name">class</label>
			<input  class="inputclass3" type="text" name="class"><br>
			<label class="name">mobile number</label>
			<input class="inputclass4"  type="number" name="mobile"><br>
			<label class="name">address</label>
			<input class="inputclass5"  type="text" name="address"><br>
			<label class="name">create password</label>
			<input  class="inputclass6" type="password" name="pass"><br>
			<label class="name">confirm password</label>
			<input  class="inputclass7" type="password" name="cpass"><br><br>
			<button class="btn-outline-success butun" name="submit">submit</button>
			<input type="reset" name="" value="reset" class="reset2">
		</form>
		<br>
	</div>
</div>
</section>

</body>
</html>
