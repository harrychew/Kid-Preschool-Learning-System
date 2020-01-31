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
    $Photo=$row_user['photo']; 
    $name=$row_user['name'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Challenge | Cheerful Preschool</title>
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
		<img src="images/c2.jpg" width="1600" height="600" alt=abc" />  
        <div class="wrapper" style="background-color:#ff9900">
           <div class="container" >
                <div class="row">
                    <div class="span2">
                        <div class="content">
                           <?php
                            for ($i=1;$i<=15;$i++){
                            echo "<img src='images/sidebar3.jpg' width='500' height='500' alt='123'>";
                        }
                            ?> 
                           
                        </div>
                        <!--/.content-->                     
                    </div>
                    
                    <div class="span8">
                        <div class="content2">
                            <h1 style="text-align:center;color:black">Are you ready?</h1>
                            <h2 style="text-align:center;color:black">Listen and choose the correct answer!</h2>
                            <ol style="font-size: 20px; color:black; ">
                               <form method="post"> 
                                <audio controls>
                                    <source src="sounds/a.mp3" type='audio/mpeg'>
                                    Your browser does not support the audio element.
                                </audio>
                                <br><br>
                                <li style="font-size: 20px ;color:black">What is the answer?
                                <br><br>
                                <input type="radio" name="q1" value="a"> A
                                <br><br>
                                <input type="radio" name="q1" value="b"> B
                                <br><br>
                                <input type="radio" name="q1" value="c"> C

                                
                                </li>
                                <br>
                                <br>
                                <audio controls>
                                    <source src="sounds/3.mp3" type='audio/mpeg'>
                                    Your browser does not support the audio element.
                                </audio>
                                <br><br>
                                <li style="font-size: 20px ;color:black">What is the answer?
                                <br><br>
                                <input type="radio" name="q2" value="1"> 1
                                <br><br>
                                <input type="radio" name="q2" value="2"> 2
                                <br><br>
                                <input type="radio" name="q2" value="3"> 3
                                
                                </li>
                                <br>
                                <br>
                                <audio controls>
                                    <source src="sounds/f.mp3" type='audio/mpeg'>
                                    Your browser does not support the audio element.
                                </audio>
                                <br><br>
                                <li style="font-size: 20px ;color:black">What is the answer?
                                <br><br>
                                <input type="radio" name="q3" value="d"> D
                                <br><br>
                                <input type="radio" name="q3" value="e"> E
                                <br><br>
                                <input type="radio" name="q3" value="f"> F
                                
                                </li>
                                <br>
                                <br>
                                <audio controls>
                                    <source src="sounds/p.mp3" type='audio/mpeg'>
                                    Your browser does not support the audio element.
                                </audio>
                                <br><br>
                                <li style="font-size: 20px ;color:black">What is the answer?
                                <br><br>
                                <input type="radio" name="q4" value="o"> O
                                <br><br>
                                <input type="radio" name="q4" value="p"> P
                                <br><br>
                                <input type="radio" name="q4" value="q"> Q
                                </li>
                                <br>
                                <br>
                                <h1 style="font-size: 30px ;color:black">3+3=?</h1>
                                <br><br>
                                <li style="font-size: 20px ;color:black">What is the answer?
                                <br><br>
                                <input type="radio" name="q5" value="9"> 9
                                <br><br>
                                <input type="radio" name="q5" value="6"> 6 
                                <br><br>
                                <input type="radio" name="q5" value="3"> 3                               
                                </li>
                                <br>
                                <br>
                                <h1 style="font-size: 30px ;color:black">2+6=?</h1>
                                <br><br>
                                <li style="font-size: 20px ;color:black">What is the answer?
                                <br><br>
                                <input type="radio" name="q6" value="7"> 7
                                <br><br>
                                <input type="radio" name="q6" value="8"> 8 
                                <br><br>
                                <input type="radio" name="q6" value="3"> 3
                                </li>
                                <br>
                                <br>
                                <img src="images/elephant.jpg" height="100" width="100">
                                <br><br>
                                <li style="font-size: 20px ;color:black">What is this animal call?
                                <br><br>
                                <input type="radio" name="q7" value="zebra"> Zebra
                                <br><br>
                                <input type="radio" name="q7" value="elephant"> Elephant
                                <br><br>
                                <input type="radio" name="q7" value="cat"> Cat
                                </li>

                                <br>
                                <br>
                                <img src="images/apple.jpg" height="100" width="100">
                                <br><br>
                                <li style="font-size: 20px ;color:black">What is this call?
                                <br><br>
                                <input type="radio" name="q8" value="apple"> Apple
                                <br><br>
                                <input type="radio" name="q8" value="orange"> Orange
                                <br><br>
                                <input type="radio" name="q8" value="watermelon"> Watermelon
                                </li>
                                
                                <br>
                                <br>
                                <li style="font-size: 20px ;color:black">What is your name?
                                <br><br>
                                <input type="text" name="q9" value="">
                                </li> 
                            
                                <br>
                                <br>
                                <li style="font-size: 20px ;color:black">How old are you?
                                <br><br>
                                <input type="text" name="q10" value="">
                                </li> 

                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary btn-block btn-large" name="submit">Check Score</button>
                                </form>
                            
                            </ol>

                            <p style="text-align:left;font-size:150%;color:black">
                            <a href="123.php" style="color:black">Learn 123!</a>
                            
                            <span style="float:right"><a href="abc.php" style="color:black">Learn ABC!</a></span>
                            </p> 
                           
 
                        </div>

                        <!--/.content-->
                    </div>
                     <div class="span2">
                        <div class="content2">
                            <?php
                            for ($i=1;$i<=15;$i++){
                            echo "<img src='images/sidebar3.jpg' width='500' height='500' alt='123'>";


                        }
                            ?> 

                            
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
        <!--for table-->
       	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>   
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
		<script type="text/javascript">
        $(document).ready( function () {
        $('#table').dataTable();
        $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        } 
        );
   		</script>

      
    </body>

</html>
 <?php
    if(isset($_POST['submit'])){
        $count=0;
        if(isset($_POST['q1']) && $_POST['q1']=="a"){
            $count++;
           
        }
        if(isset($_POST['q2']) && $_POST['q2']=="3"){
            $count++;
           
        }
        if(isset($_POST['q3']) && $_POST['q3']=="f"){
            $count++;
           
        }
        if(isset($_POST['q4']) && $_POST['q4']=="p"){
            $count++;
           
        }
        if(isset($_POST['q5']) && $_POST['q5']=="6"){
            $count++;
           
        }
        if(isset($_POST['q6']) && $_POST['q6']=="8"){
            $count++;
           
        }
        if(isset($_POST['q7']) && $_POST['q7']=="elephant"){
            $count++;
           
        }
        if(isset($_POST['q8']) && $_POST['q8']=="apple"){
            $count++;
           
        }
       $name=$_POST['q9'];
       if ($name!==""){
       $count++;
       }
       $age=$_POST['q10'];
       if($age!==""){
       $count++;
       }


        
        if ($count<5){
            echo "<script>confirm('".$count." over 10! Aww...You will do better next time!')</script>";
            $add_score="insert score(name, score) values ('$name','$count')";
            $run_score=mysqli_query($con,$add_score);
            if($run_score){
                
                echo "<script>alert('Score saved!')</script>";
                echo "<script>window.open('challenge.php','_self' )</script>";
            }
            
        }else{
            echo "<script>confirm('".$count." over 10! Great Job! Congratulation!')</script>";
            $add_score="insert score(name, score) values ('$name','$count')";
            $run_score=mysqli_query($con,$add_score);
            if($run_score){
                
                echo "<script>alert('Score saved!')</script>";
                echo "<script>window.open('challenge.php','_self' )</script>";
            }   

        }
        
        
    }

    
    ?>


<?php }?> 

