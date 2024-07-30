<?php
include('connection.php');
//insert data
	
	$username=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
		
	$sql = "INSERT INTO `tbl_user_reg`(`Name`,`Address`,`Email`,`Password`) VALUES ('$username','$address','$email','$password')";
	//echo '***'.$sql.'***';	
	$result=mysqli_query($con,$sql);
	
	header("Location:sign_in.php");
	

?>