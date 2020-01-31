<?php 
include("includes/db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body style="background-color:#ff9900">
 
        <div class="navbar navbar-fixed-top" style="background-color:#ff9900">
            <div class="navbar-inner" style="background-color:#ff9900">
                <div class="container" >
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded" ></i></a><a class="brand" href="index.php" style="background-color: #ff9900; font-weight: bolder; font-size:300%; color:white; ">KID PRESCHOOL LEARNING SYSTEM </a>

				</div>
			</div>
		</div>


	<div class="wrapper">

		<div class="container">
			<a href="login.php">Back to Login</a>
			<div class="row">
				<div class="module module-login span4 offset4">
					<form method = "post" action ="" class="form-vertical">
						<div class="module-head">
							<h4 style="color:black; text-align:center;"><?php echo @$_GET['not_admin']; ?></h4>
							<h4 style="color:black; text-align:center;"><?php echo @$_GET['logged_out']; ?></h4>
							<h3>Please enter your email</h3>
							<h4>We will sent a verification code for you!</h4>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input type="text" class="span12" name="email" placeholder="example@email.com" required="required" />
								</div>
							</div>
						
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary btn-block btn-large" name="submit">Submit</button>
									
									<a href="registration.php">Not a user? Sign up here!</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer" style="background-color:#ff9900" >
            <div class="container"  >
                <b class="copyright" style="color:#ffffff" >&copy; <?php echo date("Y");?> TWT2231 Web Technique Assignment </b>All rights reserved.
            </div>
    </div>


	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
<?php

include("includes/db.php");
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		
		$sel_email="select * from user where email='$email'";
		$run_email= mysqli_query($con,$sel_email);
		$check_email=mysqli_num_rows($run_email);

		$row_email=mysqli_fetch_array($run_email);

		$name=$row_email['name'];
		
		echo mysqli_error($con);
		if($check_email==0){
			echo "<script>alert('The system does not recognized the email, try again!')</script>";
		}else{
			echo "<script>confirm('Hello ".$name.", a confirmation code has been sent to your email!')</script>";
			echo "<script>window.open('login.php','_self' )</script>";
			// header('location:index.php');
			
		}
		
	}
?>