<?php    
session_start();
include("includes/db.php");

if(!isset($_SESSION['userID'])){
    echo "<script>window.open('login.php?not_admin=You are not an Admin','_self')
    </script>"; //put this at the top of every php file in admin panel to 
                //prevent people from directly go to the php file by typing 
                //the url in the brower, example: 'localhost/ecommerce/view_cats.php'
}else{
    $user_id=$_SESSION['userID'];
    //get user photo 
    $get_user="select * from user where userID='$user_id'";
    $run_user=mysqli_query($con,$get_user);
    $row_user=mysqli_fetch_array($run_user);
    $name=$row_user['name'];
    $Photo=$row_user['photo']; 
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage | Cheerful Preschool</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>

       

    </head>

    <body style="background-color:#ff9900">
        <h3 style="color:red; text-align:center;"><?php echo @$_GET['logged_in'];?></h3> 
        <div class="navbar navbar-fixed-top" style="background-color:#ff9900">
            <div class="navbar-inner" style="background-color:#ff9900">
                <div class="container" >
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded" ></i></a><a class="brand" href="index.php" style="background-color: #ff9900; font-weight: bolder; font-size:300%; color:white; ">KID PRESCHOOL LEARNING SYSTEM </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse" style="background-color:#ff9900">

                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#ff9900">
                                <img src="user/photo/<?php echo $Photo;?>" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu"style="background-color:#fd6a02">
                                    <li style="color:#ff9900"><a href="my_account.php?user_id=<?php echo $user_id; ?>" style="color:white" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'">My Account</a></li>
                                    <li style="color:#ff9900"><a href="edit_my_account.php?user_id=<?php echo $user_id; ?>" style="color:white" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'">Edit Account</a></li>
                                    <li class="divider"></li>
                                    <li style="color:#ff9900"><a href="logout.php"style="color:white" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
		<img src="images/kids3.jpg" width="1600" height="600" alt=abc" />  
        <div class="navigation-bar" style="background-color: #fd6a02; font-weight: bolder">
	
            <table>
                    <tr style="padding-left: auto; padding-top: auto;">
                      <td> &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp&nbsp &nbsp  &nbsp <a style="font-size: 150%;color:#ffffff" href="index.php">Home</a>&nbsp &nbsp  &nbsp  &nbsp</td>
                        <td>&nbsp &nbsp  &nbsp  &nbsp<a style="font-size: 150%;color:#ffffff" href="challenge.php">Challenge</a>&nbsp &nbsp  &nbsp  &nbsp</td>
                       <td>&nbsp &nbsp  &nbsp  &nbsp<a style="font-size: 150%;color:#ffffff"href="aboutus.php">About Us</a>&nbsp &nbsp  &nbsp  &nbsp</td>         
                       <td>&nbsp &nbsp  &nbsp  &nbsp<a style="font-size: 150%;color:#ffffff"href="contactus.php">Contact Us</a>&nbsp &nbsp  &nbsp  &nbsp</td>
                    </tr> 
            </table>  
                    
        </div> 
        <div class="wrapper" style="background-color:#ff9900">
        <h2 style="color:black" align="center">Welcome <?php echo $name; ?> to Our Website! </h2>
        <h3 style="color:black" align="center">For a better learning experience, please let your kid watch all the videos and sing along with them.</h3>


           <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="content">
                           <h1 style="color:black" align="center"><u>Let's learn 123!</h1>
                           &nbsp &nbsp  &nbsp<video width="500" controls>
                            <source src="video/123-2.mp4" type="video/mp4">
                            
                            Your browser does not support HTML5 video.
                            </video> 
                            <h2 style="color:black" align="center">Video 1</h2>
                           <br>
                           &nbsp &nbsp  &nbsp<video width="500" controls>
                            <source src="video/123-3.mp4" type="video/mp4">
                            
                            Your browser does not support HTML5 video.
                            </video> 
                            <h2 style="color:black" align="center">Video 2</h2>
                            <br>
                           &nbsp &nbsp  &nbsp<video width="500" controls>
                            <source src="video/123.mp4" type="video/mp4">
                            
                            Your browser does not support HTML5 video.
                            </video> 
                            <h2 style="color:black" align="center">Video 3</h2>
                            <br>
							<br>
							<br>
							<br>
							<br>
							<center><img src="images/icons/downhere.png" width="100" height="600" alt="arrow" />
                           <h2 align="center" ><a href="123.php" style="color:black" >LET'S PRACTICE!</a></h2>
                        </div>
                        <!--/.content-->                     
                    </div>
                    
                    <div class="span6">
                        <div class="content2">
                           <h1 style="color:black" align="center"><u>Let's learn ABC!</h1> 
                        </div>

                            &nbsp &nbsp  &nbsp<video width="500" controls>
                            <source src="video/ABC-3.mp4" type="video/mp4">
                            
                            Your browser does not support HTML5 video.
                            </video>
                            <h2 style="color:black" align="center">Video 1</h2>
                            <br>
                            &nbsp &nbsp  &nbsp<video width="500" controls>
                            <source src="video/ABC.mp4" type="video/mp4">
                            
                            Your browser does not support HTML5 video.
                            </video>
                            <h2 style="color:black" align="center">Video 2</h2>
                            <br>
                            &nbsp &nbsp  &nbsp<video width="500" controls>
                            <source src="video/ABC-2.mp4" type="video/mp4">
                            
                            Your browser does not support HTML5 video.
                            </video>
                            <h2 style="color:black" align="center">Video 3</h2>
                            <br>
							<br>
							<br>
							<br>
							<br>
							<center><img src="images/icons/downhere.png" width="100" height="600" alt="arrow" />
                            <h2 align="center"><a href="abc.php" style="color:black" align="center">LET'S PRACTICE!</a></h2>
                        

                        </div>
                        <!--/.content-->
                    </div>
                          
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer" style="background-color:#ff9900" >
            <div class="container"  >
                <b class="copyright" style="color:#ffffff" >&copy; <?php echo date("Y");?> TWT2231 Web Technique Assignment </b>All rights reserved.
            </div>
        </div>
      

        <!--for bar on top-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type="text/javascript">
       
        </script>

      
    </body>

</html>

<?php }?> 

