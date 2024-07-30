<?php
include('connection.php');
//insert data

	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$blog_no=$_POST['blog_no'];
	
	$sql="INSERT INTO `tbl_sub_comment`(`Name`,`Email`,`Comment`,`Blog_id`) VALUES ('$name','$email','$comment','$blog_no')";
	$result=mysqli_query($con,$sql);
	
	header('location:index.php'); 
	
?>