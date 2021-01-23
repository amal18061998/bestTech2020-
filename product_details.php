<?php 

include ('includes/headerE.php');
$_SESSION['id_client'];?>
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
<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="images/best-tech (1).gif"  alt="#"/></div>
    <!-- Start Main Top -->
 
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product's Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Product's Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->


    <?php

   global $con;

  
    if(isset($_GET['pro_id']) and isset($_GET['cat_id'])){
    
    $product_id = $_GET['pro_id'];

    $cat=$_GET['cat_id'];
    
    $get_product = "select * from products where product_id='$product_id 'and cat_id='$cat' ";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
   
    
    $p_cat_id = $row_product['product_id'];
        
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img'];

    $pro_quantite =$row_product['pdt_quantite'];
   
    
   
}
echo "<div id='content'class='col-sm-9'>
<div class='row'>

    <div class='col-sm-6'>
        <div class='thumbnails'>

      <div><a class='thumbnail' href='images/BestTechImages/$pro_img1' title='$pro_title'><img src='images/BestTechImages/$pro_img1 ' title='lorem ippsum dolor dummy' alt='lorem ippsum dolor dummy' /></a></div>
      
      <div id='product-thumbnail' class='owl-carousel'>
        <div class='item'>
        <div class='image-additional'><a class='thumbnail' href='images/BestTechImages/$pro_img1' title='lorem ippsum dolor dummy'> <img src='images/BestTechImages/$pro_img1 ' target title='lorem ippsum dolor dummy' alt='lorem ippsum dolor dummy' /></a></div>
        </div>
        
         </div>

         </div>

    </div>

    <div class='col-sm-6'>
    <h1 class='productpage-title'> $pro_title</h1>
    <div class='rating product'> <span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star fa-stack-1x'></i><i class='fa fa-star-o fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i></span> <span class='review-count'> <a href='#' onClick='$('a[href=\'#tab-review\']').trigger('click'); return false;'>1 reviews</a> / <a href='#' onClick='$('a[href=\'#tab-review\']').trigger('click'); return false;'>Write a review</a></span>
      <hr>
      <!-- AddThis Button BEGIN -->
      <div class='addthis_toolbox addthis_default_style'><a class='addthis_button_facebook_like' ></a> <a class='addthis_button_tweet'></a> <a class='addthis_button_pinterest_pinit'></a> <a class='addthis_counter addthis_pill_style'></a></div>
      <!-- AddThis Button END -->
    </div>
    <ul class='list-unstyled productinfo-details-top'>
      <li>
        <h2 class='productpage-price'>$pro_price DT </h2>
      </li>
   
    </ul>
    <hr>
    
    <hr>
    <p class='product-desc'> $pro_desc </p>
 


    
    "; 


  
    
    ?>  



                               
                               </div>
                               </div>
            
        
        
        
        
			
  <?php include ("includes/footerE.php"); ?>
    <!-- End Footer  -->

    

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>