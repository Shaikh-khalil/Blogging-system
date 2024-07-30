<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact_us</title>
<!-- Bootstrap core CSS -->
  	  <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

	<link href="css/bootstrap.cards.css" rel="stylesheet">

	
	<link href="css/font-awesome.min.css" rel="stylesheet">


    <script src="js/jquery-3.3.1.slim.min.js" > </script>

	<script src="js/bootstrap.bundle.min.js" > </script>
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
<style>
.bs-example
{
margin:100px
}
.head{text-align:center;
}
lebale{text-shadow:#000000;
}
</style>

</head>

<body>
	<?php
		include('header.php');
	?> 
<div class="bs-example">
	<div  class="container">
		<div class="head">
			<h1><font color="#0066FF"> How to Reach us?</font></h1>
			<p><h4>We are happy to answer any qutions you have or provide you with an estimate,just send us message in the form below.</h4></p>
		</div>
		<div class="head">
			<h1><font color="#0066FF">Drop your Message</font></h1>
			<p><h4>To respond to your inquiries and mails quickly and accurately, we will connect you directly with the relevant people. if you are passionate about the possibilities as we are,Please take a moment for filling this contact form .</h4></p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form class="form-action" action="insert_contact.php" method="post">
				<div class="form-group">
				   <lebale>Name*</lebale>
				   <input type="text" class="form-control" required="required" name="name">
				</div>
				<div class="form-group">
					<lebale>Email*</lebale>
					<input type="email" class="form-control" required="required" name="email">
				</div>
				<div class="form-group">
					<lebale>Phone*</lebale>
					<input type="number" class="form-control" required="required" name="phone">
				</div>
				<div class="form-group">
					<lebale>Company Name*</lebale>
					<input type="text" class="form-control" reqired="required" name="company_name">
				</div>
				<div class="form-group">
					<lebale>Subject*</lebale>
					<input type="text" class="form-control" required="required" name="subject">
				</div>
				<div class="form-group">
					<lebale>Message*</lebale>
					<textarea id="text" class="form-control" name="message" required="required" rows="8"></textarea>
				</div>
				<div class="form-group">
					<input class="btn btn primary btn-lg" name="submit" value="Submit Message" type="submit" /> 
				</div>
				</form>
			 </div>
			 <!-- <div class="row"> -->
			<div class="col-md-6 mx-auto" >
					<div class="row text-center text-white">

						<h1 class="display-4">Team Page</h1>
			
					</div>
				
					<!-- </div> -->
			<!-- </div>End -->


				<div class="col text-center">

					<div class="bg-white rounded shadow-sm py-5 px-15"><img src="img\khalil.jpeg" alt="image" width="100" height="60" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0">Khalil Shaikh</h5><span class="small text-uppercase text-muted">TYBSC(CS)</span>
					<!-- <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="https://www.facebook.com/login" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul> -->
					</div>
					<br />

					<div class="bg-white rounded shadow-sm py-5 px-4"><img src="img\aves pic.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0">Aves Sayyed</h5><span class="small text-uppercase text-muted">TYBSC(CS)</span>
					<!-- <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="https://www.facebook.com/login" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul> -->
					</div>
					<br />

					<div class="bg-white rounded shadow-sm py-5 px-15"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0">Naaz Tamboli</h5><span class="small text-uppercase text-muted">TYBSC(CS)</span>
					<!-- <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="https://www.facebook.com/login" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul> -->
					</div>

					
				</div>
	
			</div>

		</div>

	
	

        <!-- Team item -->
        <!-- <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-7.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>End -->
    </div>
</div>
	
	</div>
</div>
	<?php
		include('footer.php');
	?>


   <?php /*?> <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	<?php */?>

</body>
</html>
