<?php
/*

$sql= "SELECT * FROM tbl_user_reg WHERE Email='$emailid' and Password='$password'";
//echo $sql;
$result=mysqli_query($con,$sql);

if($result)
{
	header("Location:home.php");
}
else
{
	header("Location:create_acc_form.php");
}
*/
session_start();
ob_start();
?>

<?php

	//session_start();
if(isset($_POST['submit_login']))
{
   include('connection.php');
	$emailid=$_POST['emailid'];
	$password=$_POST['password'];
 
  $query = mysqli_query($con,"SELECT * FROM tbl_user_reg WHERE `Email`='$emailid' AND `Password`='$password'");
  
 // $row = mysqli_fetch_array($query);
  //	$username = $row['Name'];
  
  if (mysqli_num_rows($query) != 0)
  {
      $_SESSION['user']=$emailid;
	 header("Location:add_blog.php");
  }
  else
  {
      header("Location:sign_in.php");
  }
}
mysqli_close($con);

///
 include 'conn.php';
    $frname = $_POST['bname'];
    $frpass = $_POST['bpass'];
    $result = mysqli_query($con,"SELECT * FROM staff");
    while($row = mysqli_fetch_array($result))
    {
        $dbname = $row['Staff_Name'];
        $dbpass = $row['Staff_Password'];
        if($frname==$dbname && $frpass==$dbpass)
        {
            $_SESSION['user']=$dbname;
            header("Location:cust_main.php");
        }
        else 
        {
            header("Location:index.php");
        }
    }
mysqli_close($con);

?>
