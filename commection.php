<?php
	$username="root";
	$password="";
	$db='exelence';
	$server='localhost';
	$q=mysqli_connect($server,$username,$password,$db);
	if ($q){
		?>
			 <script type="text/javascript">
			 	alert ("connection established");
			 </script>
			 <?php
	}
	else{
		echo ("no connected");
	}
?>