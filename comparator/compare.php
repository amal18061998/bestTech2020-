

<?php 
$con = mysqli_connect('localhost','root','','besttech1');

$productOne = $productTwo = '';

$productOne = $_POST['card_one'];
$productTwo = $_POST['card_two'];

$pro1_sql = "select * from products where product_id='".$productOne."'";
$pro1_query = mysqli_query($con, $pro1_sql);
$pro1 = mysqli_fetch_object($pro1_query);

$pro2_sql = "select * from products where product_id='".$productTwo."'";
$pro2_query = mysqli_query($con, $pro2_sql);
$pro2 = mysqli_fetch_object($pro2_query);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    <link rel="apple-touch-icon" href="images/logoT.png">


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
<link rel="shortcut icon" href="../favicon.ico" >
<link href="owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script src="javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="javascript/jstree.min.js" type="text/javascript"></script>
<script src="javascript/template.js" type="text/javascript" ></script>
<script src="javascript/common.js" type="text/javascript"></script>
<script src="javascript/global.js" type="text/javascript"></script>
<script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <title>Compare Product</title>

    <style>
    	.card{
    		border: 2px solid #ccc; border-radius: 3px; padding: 10px;
    	}
    </style>
  </head>
  <body style="background-color: #e1ecb4;">
  <div class="main-top">

        
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
               
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="../formPanier.php">Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="../wishNew.php">Wishlist</a></li>

                        
                        <li class="nav-item"><a class="nav-link" href="../gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="../slider range.php">Select your budget </a></li>
                        <li class="nav-item"><a class="nav-link" href="comparator/indexComp.php">Comparator</a></li>
                        <li class="nav-item"><a class="nav-link" href="../contact-us.php">Contact us</a></li>
                    </ul>
                </div>
               
    </div>
    <!-- Start Side Menu -->
    
          
   
            
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
     </header>


    <!-- Start Top Search -->
   
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-6" style="margin-top: 30px;">
  				<h2>Compare Product List</h2>
  			</div>
        <div class="col-sm-6" style="margin-top: 30px;">
          <a href="indexComp.php" class="btn hvr-hover" style="text-align: right;"><h2>Back</h2></a>
        </div>	
  		</div>

  		<div class="row" style="margin-top: 50px;">
  			
  			<div class="col-sm-6" style="margin-bottom: 30px; padding: 5px;">
          <div class="card">
            <h3 style="text-align: center; background: #ccc; width: 100%; padding: 10px;">Product One</h3>
  				  <h4><?php echo $pro1->product_title; ?></h4>
            <p>Rs.<?php echo $pro1->product_price; ?></p>
            <p><b>Description</b>.<?php echo $pro1->product_desc; ?></p>
          </div>
  			</div>
        <div class="col-sm-6" style="margin-bottom: 30px; padding: 5px;">
          <div class="card">
            <h3 style="text-align: center; background: #ccc; width: 100%; padding: 10px;">Product Two</h3>
            <h4><?php echo $pro2->product_title; ?></h4>
            <p>Rs.<?php echo $pro2->product_price; ?></p>
            <p style="text-align: justify;"><b>Description</b>.<?php echo $pro2->product_desc; ?></p>
          </div>
        </div>	
  			
  		</div>
  	</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
