<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


if(isset($_POST['submit'] ))
{
    if(empty($_POST['c_name']))
		{
			$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>field Required!</strong>
															</div>';
		}
	else
	{
		
	
	
	
       
	
	$mql = "update res_category set c_name ='$_POST[c_name]' where c_id='$_GET[cat_upd]'";
	mysqli_query($db, $mql);
			$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Updated!</strong> Successfully.</br></div>';
	
    
	}

}


?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link active" href="dashboard.php">DASHBOARD <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="allusers.php">ALL USERS <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="add_users.php">ADD USER <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="allrestraunt.php">ALL RESTAURANT <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="add_category.php">ADD CATEGORY <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="add_restraunt.php">ADD RESTAURANT <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="all_menu.php">ALL MENUS <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="add_menu.php">ADD MENUS <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="all_orders.php">ALL ORDERS <span class="sr-only"></span></a> </li>
                       
                        <!-- Messages -->
                       
                </div>
                <li>
                                                               <a href="logout.php"><i class="fa fa-power-off"></i> LOGOUT</a>
                                                            </li>
                        </ul>
            </nav>
        </div>
        
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                     
					
					
					  <div class="row">
                   
                   
					
					 <div class="container-fluid">
                <!-- Start Page Content -->
                  
									
									<?php  
									        echo $error;
									        echo $success; ?>
									
									
								
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Update Restaurant Category</h4>
                            </div>
                            <div class="card-body">
                                <form action='' method='post' >
                                    <div class="form-body">
                                        <?php $ssql ="select * from res_category where c_id='$_GET[cat_upd]'";
													$res=mysqli_query($db, $ssql); 
													$row=mysqli_fetch_array($res);?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <input type="text" name="c_name" value="<?php echo $row['c_name'];  ?>" class="form-control" placeholder="Category Name">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                        <a href="dashboard.php" class="btn btn-inverse">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					
                </div>
					
					
					
					
					
					
					
					
					
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> Sem 5 Mini Project</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>