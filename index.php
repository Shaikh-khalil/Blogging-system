<?php
	session_start();
?>
<html>
<!-- Bootstrap core CSS -->
  	  <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

<body>
<?php
	include('header.php'); 
include('connection.php');

$sql = "select * from tbl_my_blog_post where parent_id=0 order by id desc ";
	
	$result=mysqli_query($con,$sql);
	
	$filal_arr = array();
	
		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
	$temp_arr["subcmnts"] = array();
	$temp_arr["maincmnts"] = array();
		$sql_subcmnt = "select * from tbl_my_blog_post where parent_id= ".$row['Id']." order by id desc ";
	
		$result_subcmnt=mysqli_query($con,$sql_subcmnt);
		if(isset($result_subcmnt) && !empty($result_subcmnt)){
			while($row_subcmnt = $result_subcmnt->fetch_assoc()) { 
				array_push($temp_arr["subcmnts"],$row_subcmnt);
			}
		}		
		$temp_arr["maincmnts"] = $row;
			array_push($filal_arr,$temp_arr);	
     }
} else {
    echo "0 results";die();
}
//print_r($filal_arr);
	//exit;	
?>
	<style>
		.pad{padding-top:100px}
	</style>
<div class="pad">
	<div class="container">
		<div class="row">
		<?php
		if (!empty($filal_arr)) {
    // output data of each row
    foreach($filal_arr as $row) { ?>
				<div class="col-md-6">
				<h2 style="color:#FF0000">Title:</h2>
				<p><b style="color:#0099FF"><?php echo $row["maincmnts"]["Title"];?></b></p>
				
				

				<?php if($row["maincmnts"]["Image"] != 'img/')
						{
						  ?>
								<h2 style="color:#FF0000">Image:</h2>
								<img src="<?php echo $row["maincmnts"]["Image"];?>" style="height:50%; width:100%"> 
				<?php  } ?>
					<h2 style="color:#FF0000">Blog news:</h2>
						<p><?php echo $row["maincmnts"]["Comment"];?></p>
						<a href="blog_detail.php?blog_id=<?php echo $row["maincmnts"]["Id"]; ?>" >Read More</a>
	
					
				</div>		
<?php }
} else {
    echo "0 results";die();
}
		?>
		
			</div>
		</div>
	</div>
</div>

<?php
include('footer.php'); 
?>
	 <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
