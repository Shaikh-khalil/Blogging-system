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

 

    <title>Blog Post</title>
<style>
.bs-example{padding-top:100px;}
</style>
</head>

<body>
			<?php
				include('header.php');
			?>
			<div class="bs-example">
			<div class="container">
			<div class="row">
			
				<div id="fisrt" class=" col-lg-8">
			<form class="form-action" action="insert_user_reg.php" method="post" enctype="multipart/form-data">
				<h3>Create new account</h3> 
			<div class="form-group">
        <div class="form-group">
            <label>Name:</label>
            <input type="name" class="form-control" required="required" placeholder="Enter name" name="name">
        </div>
			 <div class="form-group">
            <label>Address:</label>
			<textarea class="form-control" name="address" ></textarea>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" required="required" placeholder="Enter email name" name="email">
        </div>
		 <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" required="required" placeholder="Enter password" name="password">
        </div>
		<br />	
			<div class="form-group">
                <input type="submit" class="btn-primary" value="Submit" name="btn_user_reg"/>
			</div>
			</form>
			
			</div> <!--first div edn-->
			
			
			</div><!--/bs-example -->
			</div><!--/rows -->
			</div><!--/.nav-collapse -->
			<?php
				include('footer.php');
			?>
		
          <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
</body>
</html>

