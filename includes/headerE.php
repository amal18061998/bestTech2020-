
<?php


session_start();
//$_SESSION['id_client']=$_GET['id_client'];
include("includes/function_cart.php");

$db=mysqli_connect("localhost","root","","besttech1");




if (isset($_SESSION['id_client'])){

   $id_client=$_SESSION['id_client'];
  //print_r("yes!!");

  
}
?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <link rel="shortcut icon" href="favicon.ico" >
    <title>BestTech </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script src="javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="javascript/jstree.min.js" type="text/javascript"></script>
<script src="javascript/template.js" type="text/javascript" ></script>
<script src="javascript/common.js" type="text/javascript"></script>
<script src="javascript/global.js" type="text/javascript"></script>
<script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
     
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/BestTechImages/favicon.ico" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script src="javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="javascript/jstree.min.js" type="text/javascript"></script>
<script src="javascript/template.js" type="text/javascript" ></script>
<script src="javascript/common.js" type="text/javascript"></script>
<script src="javascript/global.js" type="text/javascript"></script>
<script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>

</head>

<body>


<div class="main-top">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                        
                    </div>
                   

                    <div class="our-link">
                        <ul>
                            <!--<li><a href="my-account.php"><i class="fa fa-user s_color"></i> My Account</a></li>-->
                            <li><a href="https://www.google.tn/maps/place/%C3%89cole+nationale+d'ing%C3%A9nieurs+de+Sfax/@34.7260819,10.7155551,17z/data=!3m1!4b1!4m5!3m4!1s0x13002ca4425ed6a1:0x1cb1842d2707fe25!8m2!3d34.7260819!4d10.7177438?hl=fr"><i class="fas fa-location-arrow"></i> Our location </a></li>
                            <li><a href="bot.php"><i class="fas fa-headset"></i> Ask Prezzi </a></li>
                            <li><a href="chat.php"><i class="far fa-comments"></i> OnChat </a></li>
                        </ul>
                    </div>
                    <div class="currency">
              <!--reccuperer la session-->
                     </div>
                     
                     <?php 
                   
                   if(!isset($_SESSION['nameClient'])){
                        
                        echo "Welcome to  BestTech";
                        
                    }else{
                        
                        echo "Welcome to BestTech : " . $_SESSION['nameClient'] . "";
                        
                    }
                    
                    ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
						
                    <ul class="list-inline">
                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>My Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="registerOrNo.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
                
              </ul>
						
					</div>
					
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: mimi
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on laptops
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop cameras
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                              
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/BEST-TECH.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                <img  width='130px' height='130px'  src="images/BestTechImages/favicon.ico">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="formPanier.php">Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="wishNew.php">Wishlist</a></li>

                        <!--<li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                
                            
                                <li><a href="shop.php">Sidebar Shop</a></li>
								<li><a href="shop-detail.php">Product's Detail</a></li>
                                <li><a href="cart.php">Cart</a></li>
                               
                                
                                <li><a href="wishNew.php">Wishlist</a></li>
                            </ul>
                        </li>-->
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="slider-range.php">Select your budget </a></li>
                        <li class="nav-item"><a class="nav-link" href="comparator/indexComp.php">Comparator</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                       <a href="recherche.php"><i class="fa fa-search"></i></a>
                       
                    </ul>
                </div>
    
                <!-- End Atribute Navigation -->
    </div>
    <!-- Start Side Menu -->
    
          
   
            
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
     </header>


    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    
</body>
</html>       