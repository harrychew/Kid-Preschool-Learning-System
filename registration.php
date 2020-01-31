<?php 
include("includes/db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration | Cheerful Preschool</title>
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


				
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	


	<div class="wrapper">
		<div class="container">
			<h1>Registration</h1>
			<a href="login.php" size="20">Back to Login</a>
			<div class="row" >						
				<form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
					<div class="control-group" >
						<label class="control-label" for="basicinput">Name</label>
						<div class="controls">
							<input type="text" name="name" size="60" required="required" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput" >Username</label>
						<div class="controls">
							<input type="text" name="user_name" size="60" required="required"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Password</label>
						<div class="controls">
							<input type="password" name="user_pass" size="60" required="required"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Confirm Password</label>
						<div class="controls">
							<input type="password" name="user_pass2" size="60" value=""/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Email</label>
						<div class="controls">
							<input type="text" name="email" size="60" required="required"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Contact Number</label>
						<div class="controls">
							<input type="text" name="contact_number" size="60" required="required"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Gender</label>
						<div class="controls">
						<input type="radio" name="gender" value="male" checked/>Male
						<input type="radio" name="gender" value="female"/>Female

						</div>
					</div>



					<div class="control-group">
						<label class="control-label" for="basicinput">Photo:</label>
						<div class="controls">
							<input type="file" name="photo"/>
						</div>
					</div>
					<div class="control-group">
						
						<div class="controls">
							<input type="checkbox" name="newsletter"/> Yes, I want to receives weekly newsletter
						</div>
					</div>									
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="submit_request" style="background-color: #4286f4" value="Click to Register"/>
						</div>
					</div>	

				</form>
			</div>
		</div>
	</div><!--/.wrapper-->
				<div class="footer" style="background-color:#ff9900" >
				            <div class="container"  >
				                <b class="copyright" style="color:#ffffff" >&copy; <?php echo date("Y");?> TWT2231 Web Technique Assignment </b>All rights reserved.
				            </div>
				    </div>

						
</body>	


<?php
	if(isset($_POST['submit_request'])){

		$name=$_POST['name'];
		$username =$_POST['user_name'];
		$pass =$_POST['user_pass'];
		$pass2 =$_POST['user_pass2'];
		$email =$_POST['email'];
		$contact_number=$_POST['contact_number'];

		if(isset($_POST['gender']) && $_POST['gender'] == "male"){
			$gender='male';
		}else{
			$gender='female';
		}
		if(isset($_POST['newsletter'])){
			$newsletter="yes";
		}else{
			$newsletter="no";
		}

		//getting the image from the field
		$photo=$_FILES['photo']['name'];
		$photo_tmp=$_FILES['photo']['tmp_name'];
		move_uploaded_file($photo_tmp,"user/photo/$photo");

		if ($pass == $pass2){
			$confirm_password=$pass2;
			$insert_user= "insert into user (name, username, password, email, contact_number, photo, gender, newsletter) values ('$name','$username','$confirm_password','$email','$contact_number','$photo','$gender','$newsletter')";
				$run_user=mysqli_query($con, $insert_user);
				
				if($run_user){
					echo "<script>alert('Request submitted!')</script>";
					echo "<script>window.open('login.php','_self')</script>";
				}
		}
		else{
			echo "<script>alert('Your password is not Valid! Please retype Password')</script>";
		}
		
		

		
		
	}


?>	