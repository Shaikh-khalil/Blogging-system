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
//include('header.php'); 
include('connection.php');


if(isset($_GET['action'])=='submitfunc') {
	
	$Id = $_REQUEST['commentID'];
	//echo 'Id = '.$id;
	$sql_query = "update tbl_sub_comment set Status='Approved' where Id= $Id"; 	//and Status = 'Approved'	
	$result = mysqli_query($con,$sql_query);		
	}
	


$blog_id = $_REQUEST['blog_id'];

$sql = "select * from tbl_my_blog_post where Id = $blog_id";
	
	$result=mysqli_query($con,$sql);
	
	$filal_arr = array();
	
	if ($result->num_rows > 0) 
	{
    	// output data of each row
    	while($row = $result->fetch_assoc()) 
		{ 
					$temp_arr["subcmnts"] = array();
					$temp_arr["maincmnts"] = array();
					$sql_subcmnt = "select * from tbl_my_blog_post where parent_id= ".$row['Id']." order by id desc ";
			
					$result_subcmnt=mysqli_query($con,$sql_subcmnt);
					if(isset($result_subcmnt) && !empty($result_subcmnt))
					{
						while($row_subcmnt = $result_subcmnt->fetch_assoc()) 
						{ 
							array_push($temp_arr["subcmnts"],$row_subcmnt);
						}
					}		
					$temp_arr["maincmnts"] = $row;
					array_push($filal_arr,$temp_arr);	
		}
	}
	else 
	{
    	echo "0 results";die();
		
	}
?>
	<style>
		.pad{padding-top:100px}
	</style>

	<div class="pad">
		<div class="container">
			<div class="row">
			<?php
					if (!empty($filal_arr)) 
					{
					    // output data of each row
    					foreach($filal_arr as $row) 
						{ ?>
	
						<div class="col-md-10">
							<h2 style="color:#FF0000">Title:</h2>
							<p><b style="color:#0066FF"><?php echo $row["maincmnts"]["Title"];?></b></p>

							<h2 style="color:#FF0000">Image:</h2>
							<img src="<?php echo $row["maincmnts"]["Image"];?>" style="height:auto; width:50%" >
							<h2 style="color:#FF0000">Blog news:</h2>
							<p><?php echo $row["maincmnts"]["Comment"];?></p>
							
							<div class="example">
								<div class="col-md-10">
									<h2 style="color:#000000">Blog Comment</h2>
								</div>
							</div>				
			
							<div id="my">
				
								<?php
									$sql_query = "Select * from tbl_sub_comment where Blog_id = $blog_id "; 
									//and Status = 'Approved'
									
									$result = mysqli_query($con,$sql_query);
									$row1 = mysqli_fetch_array($result);
										
				     			?>
								<?php
									
									foreach($result as $row1)
									{
									$comment_status = $row1['Status'];
									$comment_id = $row1['Id'];
//										print 'cccc'.$comment_status;
									if( !isset($_SESSION['user']) && $comment_status == 'Approved')
																	{
									
									 ?>
										<div class="container">
											<div class="row">
												<div class="col-md-8"> 
													<h2 class="page-header">Comments</h2>
														<section class="comment-list">
														
															<!-- First Comment -->
																<article class="row">
																
																	<div class="col-md-2 col-sm-2 hidden-xs">
																		<figure class="thumbnail">
																			<img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                							<figcaption class="text-center"><b style="color:#0000FF"><?php echo $row1["Name"];?></b></span></br></figcaption>
              															</figure>
            														</div>
																	
            														<div class="col-md-8 col-sm-10">
             			 <div class="panel panel-default arrow left">
                			<div class="panel-body">
                  				<header class="text-left">
                    				<div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                 		
                  					<div class="comment-post">
                    					<p>
											<b style="color:#0000FF"><?php echo $row1["Comment"];?></b></span>
                     					</p>
                  					</div>
									
                  							<?php /*?><p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p><?php */?>
                			</div>
							
             			</div>
						</div>
														
																	
												          	</article>
	 												</div>
		
					
  												</div>
 										</div>
				
									<?php }
									
									else
									{
										if(isset($_SESSION['user']) && $comment_status == 'Not Approved')
																	{
																	?>
																	<div class="container">
											<div class="row">
												<div class="col-md-8"> 
													<h2 class="page-header">Comments</h2>
														<section class="comment-list">
														
															<!-- First Comment -->
																<article class="row">
																
																	<div class="col-md-2 col-sm-2 hidden-xs">
																		<figure class="thumbnail">
																			<img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                							<figcaption class="text-center"><b style="color:#0000FF"><?php echo $row1["Name"];?></b></span></br></figcaption>
              															</figure>
            														</div>
																	
            														<div class="col-md-8 col-sm-10">
             			 <div class="panel panel-default arrow left">
                			<div class="panel-body">
                  				<header class="text-left">
                    				<div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                 		
                  					<div class="comment-post">
                    					<p>
											<b style="color:#0000FF"><?php echo $row1["Comment"];?></b></span>
                     					</p>
                  					</div>
									
                  							<?php /*?><p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p><?php */?>
                			</div>
							
             			</div>
						</div>
														
																	<form action="?action=submitfunc" method="post">
																		<div class="col-md-2 col-sm-2" style="margin-top:20px;">
																		<input type="text" value="  <?php echo ''.$comment_id ?> "  name="commentID" style="display:none;"/>
																		<input type="text" value="  <?php echo ''.$blog_id ?> "  name="blog_id" style="display:none;"/>
																				<input type="submit" class="btn btn-info" name="approveid" value="Approved">
																		</div>
																	</form>
												          	</article>
	 												</div>
		
					
  												</div>
 										</div>
										<?php 
																	}
									
									}
									
									} ?>
					
							</div><!--end-->
							<div>
								<?php
									include('sub_comment.php');
				
									?>
						</div>
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
