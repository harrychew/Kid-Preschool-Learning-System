<?php 
include("includes/db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Cheerful Preschool</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	
</head>
<body style="background-color:#ff9900">
	
	<div class="content" style="background-color:#ff9900">
	
	<div class="navbar navbar-fixed-top" style="background-color:#ff9900">
		<div class="navbar-inner" style="background-color:#ff9900">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	 <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded" ></i></a><a class="brand" href="index.php" style="background-color: #ff9900; font-weight: bolder; font-size:300%; color:white; ">KID PRESCHOOL LEARNING SYSTEM </a>


				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li>
							<a href="forgetpassword.php" style="color:white" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'">
							Forgot your password?
							</a>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	

	<img src="images/kids3.jpg" width="1600" height="600" alt="kids" />

	<div class="wrapper" style="background-color:#ff9900">
	
		<div class="container" >
			<div class="row">
				<div class="module module-login span4 offset4">
					<form method = "post" action ="" class="form-vertical">
						<div class="module-head">
							<h4 style="color:black; text-align:center;"><?php echo @$_GET['logged_out']; ?></h4>
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input type="text" class="span12" name="username" placeholder="username" required="required" />
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input type="password" class="span12" name="password" placeholder="Password" required="required" />
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
									<a href="registration.php">Not a user? Sign up here!</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

</div>
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
	if(isset($_POST['login'])){
		$username= mysqli_real_escape_string($con,$_POST['username']); //prevent injection of malicious code in admin login form
		
		$password= mysqli_real_escape_string($con,$_POST['password']);
		
		$sel_user="select * from user where username='$username' AND password='$password'";
		$run_user= mysqli_query($con,$sel_user);
		$check_user=mysqli_num_rows($run_user);

		$row_user=mysqli_fetch_array($run_user);

		$user_id=$row_user['userID'];
		
		echo mysqli_error($con);
		if($check_user==0){
			echo "<script>alert('Password or Email is wrong, try again!')</script>";
		}else{
			$_SESSION['userID']=$user_id;
			// header('location:index.php');
			echo "<script>window.open('index.php?logged_in=You have successfully Logged in!&user_id=$user_id','_self' )</script>";
		}
		
	}
?>