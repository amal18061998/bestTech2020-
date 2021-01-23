 
 
 
 
 <?php
if(isset($_COOKIE['accept_cookie'])) {
   $showcookie = false;
} else {
   $showcookie = true;
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
<title>BestTech </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
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

</head>

<body>
<style>
.cookie-alert {
   position: fixed;
   bottom: 20px;
   right:20px;
   border-radius: 10px;
   background:#2f2f2f;
   color:#fff;
   padding:10px 15px;
   width:280px;
   z-index:100;
}
.cookie-alert a { 
   display:block;
   text-align: center;
   padding:5px 10px;
   margin:8px auto 0 auto;
   border-radius: 10px;
   background:transparent;
   border: 2px solid #46A2D9;
   color:#46A2D9;
   transition: all .3s ease;
}
   .cookie-alert a:hover {
      background: #46A2D9;
      color:#2f2f2f;
   }
@media only screen and (max-width:480px) {
   .cookie-alert {
      text-align: center;
      left: 0; right: 0;;
        margin: 0 auto;
      max-width:700px;
      padding:10px 30px;
   }
}

</style>
 
 <!-- Start Footer  -->
 <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box" action="includes/subscriber-master/index.php">

    <input type="submit" id="btn-subscriber" value="click here to subscribe..">
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About BestTech</h4>
                            <p> 
							<p>you can find what you want here! </p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="deliveryInfo.php">Delivery info</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Km 4 Soukra Road , <br> Sfax 3038,<br> PPG9+C3 Sfax</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+216-12-345-678"> 74 275 595</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">webmaster@enis.tn</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved.  Copyright &copy;<script>
                        document.write(new Date().getFullYear());</p></script>
    </div>
    <!-- End copyright  -->
</body>
</html>
<?php if($showcookie) { ?>
<div class="cookie-alert">
By continuing to browse this site, you accept the use of cookies to provide you with content and services tailored to your areas of interest.<br /><a href="includes/acceptCookies.php">OK</a>
</div>
<?php } ?>

