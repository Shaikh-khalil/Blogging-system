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
.form_bg {
    background-color:#330000;
    color:#666;
    padding:20px;
    border-radius:10px;
    position:fixed-top;
    border:1px solid #fff;
    margin: auto;
    top:0;
    right: 0;
    bottom:0;
    left: 0;
    width: 400px;
    height: 390px;
}
.align-center {
    text-align:center;
}
font{color:#FF0000;
}
.pad{padding:100px;
}
</style>

</head>
<title>Log in</title>

<body>
<?php
	include('header.php');
?>
	<div class="pad">
	<div class="container">
    <div class="row">
        <div class="form_bg">
				
            <form action="insert_sign_in.php" method="post">
					<div class="form-group">
						<h2 class="align-center"><a href="#">Blogger</a></h2>
					</div>
					<div class="form-group">
                 		<h2 class="align-center"><font>Welcome Login hear</font></h2>
					</div>
                <div class="form-group">
					<leble><font>Email id:</font></leble>
                    <input type="email" class="form-control" required="required" placeholder="Email id" name="emailid">
                </div>
                <div class="form-group">
					<leble><font>Password</font></label>
                    <input type="password" class="form-control" required="required" placeholder="Password" name="password">
                </div>
                <br/>
                <div>
                    <button type="submit" name="submit_login" class="btn btn-default" id="login">Login</button></br><br />
					
                </div>
				<div>
				<a href="create_acc_form.php">Creat Account form</a>
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
