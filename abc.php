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
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Let's practice! | Cheerful Preschool</title>
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
		<img src="images/abc123.jpg" width="1600" height="600" alt=abc" />  
        <div class="wrapper" style="background-color:#ff9900">
           <div class="container">
                <div class="row">
                    <div class="span2">
                        <div class="content">
                            <?php
                            for ($i=1;$i<=12;$i++){
                            echo "<img src='images/sidebar12.jpg' width='500' height='500' alt='123'>";
                        }
                            ?> 
                           
                        </div>
                        <!--/.content-->                     
                    </div>
                    
                    <div class="span8">
                        <div class="content2">
                            <h1 align="center" style="font-size:300%;color:black">Let's practice, kid!</h1>

                            <table align ="center" border="1" style="font-size:125%; color:black; border-color:black;">
                                <tr align="center" style="font-size:125%;color:black">
                                    <th>&nbsp&nbsp Alphabet &nbsp&nbsp  </th>
                                    <th>&nbsp&nbsp Read Along! &nbsp&nbsp</th>
                                    <th> &nbsp&nbsp Play sound  &nbsp&nbsp</th>
                                </tr>

                                
                               <?php 
                              
                               $list=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                               $list2=array("A for apple","B for baseball","C for clock","D for donkey","E for elephant","F for father","G for grandmother","H for hungry","I for Internet","J for justice","K for kangaroo","L for London","M for monkey","N for Norway","O for overtime","P for pillow","Q for question","R for rabbit","S for superman","T for telephone","U for underwear","V for vaccinate","W for World Wide Web","X for xylophone","Y for yogurt","Z for zebra");

                               for ($x=0;$x<26;$x++){
                               echo "<tr align='center'>
                                    <td>".$list[$x]."</td><td>".$list2[$x]."</td>
                                    <td><br><br><audio controls>
                                    <source src='sounds/".$list[$x].".mp3' type='audio/mpeg'>
                                    Your browser does not support the audio element.
                                    </audio><br><br>
                                    </td>
                                </tr>";
                            }
                            ?>

                            </table>
                              <br><br>
                            <h1 align="center" style="font-size:300%;color:black">Did you get it right?</h1>
                            <p style="text-align:left;font-size:150%;color:black">
                            <a href="123.php" style="color:black">Learn 123!</a>
                            
                            <span style="float:right"><a href="challenge.php" style="color:black">Go to challenge!</a></span>
                            </p> 
                            
                            
                        </div>
                        <!--/.content-->
                    </div>
                     <div class="span2">
                        <div class="content2">
                            <?php
                            for ($i=1;$i<=12;$i++){
                            echo "<img src='images/sidebar12.jpg' width='500' height='500' alt='123'>";
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

<?php }?> 

