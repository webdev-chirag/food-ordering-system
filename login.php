<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/LOGIN.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #3316B4;
	  }
	  </style>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
    <style>
body {
  background-image: url('paneer.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>

<body>
	<!--header starts-->
	<header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php">Vadodara FOS</a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link " href="index.php">HOME <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link " href="restaurants.php">RESTAURANTS <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not LOGIN
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">LOGIN</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link ">SIGNUP</a> </li>';
							}
						else
							{
									//if user is LOGIN
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link ">MY ORDERS</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link ">LOGOUT</a> </li>';
							}

						?>
                        <li class="nav-item"> <a class="nav-link" target=”_blank” href="https://docs.google.com/forms/d/e/1FAIpQLSc6ThThBXq2x0NFUVxugfXNB0L-gJZM8DqlPruWqynFH21x0w/viewform">FEEDBACK <span class="sr-only"></span></a> </li>
                        <li class="nav-item"> <a class="nav-link " href="cart.php">CART <span class="sr-only"></span></a> </li>							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from LOGIN form
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$LOGINquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $LOGINquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION["user_id"] = $row['u_id']; // put user id into temp session
										 header("refresh:1;url=index.php"); // redirect to index.php page
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; // throw error
                                }
	 }
	
	
}
?>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2>LOGIN Page</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Submit" />
    </form>
  </div>
  
  <div class="cta"><a href="registration.php" style="color:#ffff;"> Create an account</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   



</body>

</html>
