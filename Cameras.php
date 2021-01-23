
<?php 
include ("includes/headerE.php");
include ("includes/bd.php");
include ("includes/fonctionsP.php");



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
    
   

<div class="container"> <!--contenu de toute la page-->
  
  <?php /*CATEGORIE DESCRIPTION + CATEGORIE ID*/
        $get_cat_table = "select * from categories where cat_title='Cameras'";
        
        $run_cat_table = mysqli_query($con,$get_cat_table);
        $row_cat_table=mysqli_fetch_array($run_cat_table);
        $cat_title=$row_cat_table['cat_title'];
        $cat=$row_cat_table['cat_id'];
       

       
       ?>
  <div class="row"> <!--Les zones de la page-->
    <div id='column-left'class='col-sm-3 hidden-xs column-left'><!-- debut:categories des produits-->

      

    </div> <!-- fin:categories des produits-->

    <div id="content" class="col-sm-9">
      <h2 class="category-title">Cameras</h2>
      <div class="row category-banner">
        
        
      </div>
      <div class="category-page-wrapper"><!--Affichage des produits avec List/Grids-->
        <div class="col-md-6 list-grid-wrapper">
          <div class="btn-group btn-list-grid">
            
          </div>
         
      </div>
                    <div class='grid-list-wrapper'> <!-- begin :liste des produits-->
      <?php if (!isset($_GET['cat_id'])) //si aucune categorie de "CATEGORIE DES PRODUITS" est selectionnée 
                //on affiche tous les produits de la categorie $cat
               { getPro($cat);
               echo "</div>";} //<!-- end: liste des produits -->
            else {  
                $p_cat_id=$_GET['cat_id'];
                getpcatpro($p_cat_id,$cat);}
      ?>
    </div>
    </div>
  </div>
</div>



<!-- Start Footer  -->
<?php include("footerE.php");
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