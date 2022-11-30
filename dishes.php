<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); // connection to db
error_reporting(0);
session_start();

include_once 'product-action.php'; //including controller

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Vadodara FOS</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> Vadodara FOS</a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                       <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">RESTAURANTS <span class="sr-only"></span></a> </li>
                            
                            <?php
                        if(empty($_SESSION["user_id"]))
                            {
                                echo '<li class="nav-item"><a href="login.php" class="nav-link active">LOGIN</a> </li>
                              <li class="nav-item"><a href="registration.php" class="nav-link active">SIGNUP</a> </li>';
                            }
                        else
                            {
                                    
                                    
                                        echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">MY ORDERS</a> </li>';
                                    echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">LOGOUT</a> </li>';
                            }

                        ?>
                            <li class="nav-item"> <a class="nav-link active" href="https://docs.google.com/forms/d/e/1FAIpQLSc6ThThBXq2x0NFUVxugfXNB0L-gJZM8DqlPruWqynFH21x0w/viewform">FEEDBACK <span class="sr-only"></span></a> </li>
                             
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
           
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <?php $ress= mysqli_query($db,"select * from restaurant where rs_id='$_GET[res_id]'");
                                         $rows=mysqli_fetch_array($ress);
                                          
                                          ?>
            <section class="inner-page-hero bg-image" data-image-src="images/img/dish.jpeg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div class="image-wrap">
                                    <figure><?php echo '<img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo">'; ?></figure>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt">
                                    <h6><a href="#"><?php echo $rows['title']; ?></a></h6>
                                    <p><?php echo $rows['address']; ?></p>
                                    <ul class="nav nav-inline">
                                    </ul>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:Inner page hero -->
          
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:30px;">
                      
                        <!-- end:Widget menu -->
                        <div class="menu-widget" id="2">
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              Menu <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular2" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="collapse in" id="popular2">
                        <?php  // display values and item of food/dishes
                                    $stmt = $db->prepare("select * from dishes where rs_id='$_GET[res_id]'");
                                    $stmt->execute();
                                    $products = $stmt->get_result();
                                    if (!empty($products)) 
                                    {
                                    foreach($products as $product)
                                        {
                        
                                                    
                                                     
                                                     ?>
                                <div class="food-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-8" >
                                        <form method="post" action='dishes.php?res_id=<?php echo $_GET['res_id'];?>&action=add&id=<?php echo $product['d_id']; ?>'>
                                            <div class="rest-logo pull-left">
                                                <a class="restaurant-logo pull-left" href="#"><?php echo '<img src="admin/Res_img/dishes/'.$product['img'].'" alt="Food logo">'; ?></a>
                                            </div>
                                            <!-- end:Logo -->
                                            <div class="rest-descr">
                                                <h6><a href="#"><?php echo $product['title']; ?></a></h6>
                                                <p> <?php echo $product['slogan']; ?></p>
                                            </div>
                                            <!-- end:Description -->
                                        </div>
                                        <!-- end:col -->
                                        <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> 
                                        <span class="price pull-left" >Rs.<?php echo $product['price']; ?></span>
                                          <input class="b-r-2" type="text" name="quantity"  style="margin-left:50px;" value="1" size="3" />
                                          <input type="submit" class="btn theme-btn" style="margin-left:60px;margin-top:40px;" value="Add" />
                                        </div>
                                        </form>
                                    </div>
                                    <!-- end:row -->
                                </div>
                                <!-- end:Food item -->
                                
                                <?php
                                      }
                                    }
                                    
                                ?>
                                
                                
                              
                            </div>
                            <!-- end:Collapse -->
                        </div>
                    
                   
<footer class="bg-dark text-center text-lg-start text-white" style="margin-top:30px;">

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2022 FOS Semester 5 Mini Project
  </div>
  <!-- Copyright -->
</footer>
             
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>
