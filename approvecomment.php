<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection.php');
 function approve()
 {
	$Id = $_POST['commentID'];
	echo 'Id = '.$id;
	$sql_query = "update tbl_sub_comment set Status='Approved' where Id= $Id"; 	//and Status = 'Approved'	
	if(mysqli_query($con,$sql_query))	
		echo 'Sucesss';
	else
		echo 'No Sucesss';
 }
?>
</body>
</html>
