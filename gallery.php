
<?php include ("includes/headerE.php");






//$p = new Produit();
 //var_dump($p->query($conn,'SELECT * FROM article'));
 //$p = new Produit();
 //$p->query($conn,'SELECT * FROM article');
//  foreach ($p as $product){ $product->designation;}?>


<?php 
$db = mysqli_connect("localhost","root","","besttech1");
//get categories
function getCateg(){
    global $db;
          
        $get_cats = " select cat_title from categories ";
        //$cat=$row_cat_table['cat_id'];
        $run_cats = mysqli_query($db,$get_cats);
        while ($row_cats=mysqli_fetch_array($run_cats)) 
        {   $cat_title=$row_cats['cat_title'];
            echo "


            <div class='row'>
            <div class='col-lg-12'>
                <div class='special-menu text-center'>
                    <div class='button-group filter-button-group'>
                         <li><a href='$cat_title.php'>$cat_title</a></li>
                    
                
                        </div>
                        </div>
                    </div>
                </div>" ;
            
         }
       
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

    <!-- Site Icons -->
   

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
    
   





    <!-- Start All Title Box -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Gallery</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Gallery</h1>
                        <p>Lest's Discover this new world!!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter=".*" style="float:left;"><?php getCateg();?></button>
                          
                            <!--<button data-filter=".fruits">PC</button>
							<button data-filter=".podded-vegetables">Phones</button>
							<button data-filter=".root-and-tuberous">other</button>-->
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="title-all text-center">
                        <h1>latest products</h1>
                       
                    </div>
            <?php
             global $db;
    
             $get_produit="select * from products LIMIT 8,10";
             $run_produit= mysqli_query($db,  $get_produit);
             while($row_produit=mysqli_fetch_array($run_produit)){
                 $pro_id=$row_produit['product_id'];
                 $pro_title=$row_produit['product_title'];
                 $pro_price=$row_produit['product_price'];
                 $pro_img1=$row_produit['product_img'];
                 echo"
                
                 <div class='col-lg-9'>
               
                 <a href='product_index.php?pro_id=$pro_id'> </a>
                
                <div class='col-lg-3 col-md-6 special-grid bulbs'>
                    <div class='products-single fix'>
                        <div class='box-img-hover'>
                        <!---->
                        
                            <div class='type-lb'>
                                <p class='sale'>Sale</p>
                            </div>
                            <a href='product_index.php?pro_id=$pro_id'>
                            <div class='mask-icon'>
                            <ul>
                                <li><a href='product_index.php?pro_id=$pro_id'data-toggle='tooltip' data-placement='right'title='View'><i class='fas fa-eye'></i></a></li>
                                <li><a href='comparator/indexComp.php' data-toggle='tooltip' data-placement='right' title='Compare'><i class='fas fa-sync-alt'></i></a></li>
                                <li><a href='wishNew.php' data-toggle='tooltip''data-placement='right' title='Add to Wishlist'><i class='far fa-heart'></i></a></li>
                            </ul>
                            </div>
                            <dl>
                            <img  width='300px' height='200px' src='images/BestTechImages/$pro_img1' class='img-fluid' alt='Image'>
                            </dl>
                          
                           
                            
                             </a>
                           
                             </div>
        
                             <a href='product_index.php?pro_id=$pro_id'>$pro_title</a> 
                             
                             </h3>
                             
                             <p class='price'>
                             
                                  $pro_price DT
                             
                             </p>
                             
                             
                             
                            
                         
                         </div>
                        </div>
                    
                
                </div>
                ";}?>

               

                
              

            
        </div>
   
    <!-- End Gallery  -->

    

    <!-- Start Footer  -->
    <?php include ("includes/footerE.php");
    ?>

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