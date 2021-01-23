<?php 
include("includes/header.php");
//include("includes/left-colonne.php");
$con = mysqli_connect("localhost","root","","besttech1");
?>
        <main id="page-wrapper">
            <div class="container-fluid">
                <div class="page-header d-flex">
                    <div class="heading page-header-item">
                        <h6 class="h6">Ecommerce</h6>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                
                                <li class="breadcrumb-item active" aria-current="page">orders</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card card-shadow p-3">
                    <h6 class="h6 card-title">orders</h6>
                    <div class="row">
                    <?php
                    $get_produit = "select * from commande";
    
                      $run_produit = mysqli_query($con,$get_produit); //executer la requete

                      while($row_produit=mysqli_fetch_array($run_produit)){ //si exist encore des lignes dans la table récupérée
        
                        $img= $row_produit['img'];

                        $location= $row_produit['location'];

                        $note = $row_produit['note'];

                       

                       
                        
                        echo"<div>

                        <div class='card card-shadow product'>

                           <div class='product-img'><img src='../../images/BestTechImages/$img' alt='$note' title='$note'>
                            </div>";?>
                            
                            <?php echo"
                            <div class='product-desc'><span class='title-midd text-truncate'>$note</span>
                                
                               
                               
                            </div>

                        </div>

                    </div> ";}
                                
                                ?>
                       
                    </div>
                </div>
            </div>
        </main>
        <aside id="right-sidebar"></aside>
    </div>
    <script src="../assets/js/vendor.js"></script>
    <script src="../assets/js/base/init.switcher.js"></script>
    <script src="../assets/js/base/custom.js"></script>
</body>
<footer class="text-center mb-4">© 2020 DashBoard </footer>
<!-- Mirrored from kri8thm.kiraninfosoft.com/dashto/theme/ecommerce/add-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 17:02:23 GMT -->

</php>
