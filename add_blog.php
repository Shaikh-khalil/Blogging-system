<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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

<style>
.bs-example
{margin:100px;
}
</style>
<title>Blog</title>
</head>

<body>
	<?php
		include('header.php')
	?>
		<div class="bs-example">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
					<form class="form-action" action="insert_my_blog_post.php" method="post" enctype="multipart/form-data">
							<h3>My Blog Post</h3>
						<div class="form-group">
							<leble>Title:</leble>
								<input type="title" class="form-control" required="required" placeholder="Enter Blog Title" name="title" />
						</div>
						<div class="form-group">
							 <label>Comment:</label>
        					    <textarea class="form-control" rows="8" cols="45" name="comment"></textarea>
        				</div>
						<div class="form-group">
							<p id="demo"></p>

								<script>
									var d = new Date();
									document.getElementById("demo").innerHTML = d;
								</script>
						</div>

						<div class="form-group">
							<p>
								<b><font color="#0033FF">Please specify a file/image, or a set of files:</font></b><br><br />
								<input type="file" name="myimage"><br />
							</p>
						</div>
					<div class="form-group">
						<button type="submit" name="submit" value="Blog Post" class="btn-primary">Blog Post</button>
						<button type="reset" name="reset" value="cancel" class="btn-danger">Cancel</button>
			
					</div>
					</form>
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

