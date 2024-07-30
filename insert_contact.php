<?php
include('connection.php');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$company_name=$_POST['company_name'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="INSERT INTO `tbl_contact_us`(`Name`,`Email`,`Phone`,`Company_name`,`Subject`,`Message`) VALUES ('$name','$email','$phone','$company_name','$subject','$message')";

$result=mysqli_query($con,$sql);

//header("Locaton:");
?>