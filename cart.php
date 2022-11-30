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
                            <li class="nav-item"> <a class="nav-link " href="index.php">HOME <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link " href="restaurants.php">RESTAURANTS <span class="sr-only"></span></a> </li>
                            
                            <?php
                        if(empty($_SESSION["user_id"]))
                            {
                                echo '<li class="nav-item"><a href="login.php" class="nav-link ">LOGIN</a> </li>
                              <li class="nav-item"><a href="registration.php" class="nav-link ">SIGNUP</a> </li>';
                            }
                        else
                            {
                                    
                                    
                                        echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">MY ORDERS</a> </li>';
                                    echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">LOGOUT</a> </li>';
                            }

                        ?>
                            <li class="nav-item"> <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSc6ThThBXq2x0NFUVxugfXNB0L-gJZM8DqlPruWqynFH21x0w/viewform">FEEDBACK <span class="sr-only"></span></a> </li>
                            <li class="nav-item">  <a class="nav-link active" href="cart.php">CART <span class="sr-only"></span></a> </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
            <!-- top Links -->
           
            <!-- end:Top links -->

            <div class="breadcrumb">
                <div class="container">
                   
                </div>
            </div>
            <div class="container m-t-30">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                         <div class="widget widget-cart">
                                <div class="widget-heading">
                                    <h1 class="widget-title text-dark">
                                 Cart
                              </h1>
                                              
                              
                                    <div class="clearfix"></div>
                                </div>
                                <div class="order-row bg-white">
                                    <div class="widget-body">
                                    
                                    
    <?php

$item_total = 0;

foreach ($_SESSION["cart_item"] as $item)  // fetch items define current into session ID
{
?>                                  
                                    
                                        <div class="title-row">
                                        <?php echo $item["title"]; ?><a href="dishes.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>" >
                                        <i class="fa fa-trash pull-right"></i></a>
                                        </div>
                                        
                                        <div class="form-group row no-gutter">
                                            <div class="col-xs-8">
                                                 <input type="text" class="form-control b-r-0" value=<?php echo "Rs.".$item["price"]; ?> readonly id="exampleSelect1">
                                                   
                                            </div>
                                            <div class="col-xs-4">
                                               <input class="form-control" type="text" readonly value='<?php echo $item["quantity"]; ?>' id="example-number-input"> </div>
                                        
                                      </div>
                                      
    <?php
$item_total += ($item["price"]*$item["quantity"]); // calculating current price into cart
}
?>                                
                                      
                                      
                                      
                                    </div>
                                </div>
                               
                                <!-- end:Order row -->
                             
                                <div class="widget-body">
                                    <div class="price-wrap text-xs-center">
                                        <p>TOTAL</p>
                                        <h3 class="value"><strong><?php echo "Rs.".$item_total; ?></strong></h3>
                                        <p>Free delivery in Vadodara</p>
                                        <a href="checkout.php?res_id=<?php echo $_GET['res_id'];?>&action=check"  class="btn theme-btn btn-lg">Order</a>
                                    </div>
                                </div>
                                
                        
                                
                                
                            </div>
                    </div>

    </div>
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
