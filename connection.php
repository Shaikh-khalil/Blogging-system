<?php
 $error="connection failed";
 $con=mysqli_connect("localhost","root","","db_myblog") or die($error);
// $con=mysqli_connect("localhost","cluster5","6103jMaZyo","cluster5_db_myblog") or die($error);

 if($con){}else { echo 'fail con';die(); }
 
 ?>
