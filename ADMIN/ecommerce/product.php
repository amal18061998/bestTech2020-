<?php 
include("includes/header.php");
$con = mysqli_connect("localhost","root","","besttech1");
//include("includes/left-colonne.php");
?>


        <main id="page-wrapper">
            <div class="container-fluid">
                <div class="page-header d-flex">
                    <div class="heading page-header-item">
                        
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="ecommerce.php">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header-item ml-auto"><a href="add-product.php" class="btn bg-green">Add New Product</a></div>
                    <div class="page-header-item ml-auto"><a href="view-order.php" class="btn bg-green">Orders</a></div>
                </div>
                
                <div class="row" >

                        <?php

                        
                        
                        //affichage des produits existants selon le choix de cat et product_cat
                        
                        if (isset($_GET['recherche']) && isset($_GET['cat']) )
                            {if ( !($_GET['cat']=='Select a Category'))
                                {

                        $cat=$_GET['cat'];// cat selectionné 1:HOMME/2:FEMME/3:ENFANT  etc....
                        

                        $get_produit = "select * from products where cat_id='$cat'";//récuperer les produits de catégorie $cat dans une table
    
                        $run_produit = mysqli_query($con,$get_produit); //executer la requete
    
                        while($row_produit=mysqli_fetch_array($run_produit)){ //si exist encore des lignes dans la table récupérée
        
                                $pro_id = $row_produit['product_id'];
        
                                $pro_title = $row_produit['product_title'];
        
                                $pro_price = $row_produit['product_price'];

                                $pro_qte = $row_produit['pdt_quantite'];
        
                                $pro_img = $row_produit['product_img'];

                               
                                $pro_desc = $row_produit['product_desc'];
                               
                                
                                echo"<div class='col-lg-3'>

                                <div class='card card-shadow product card-h-100 p-3'>
        
                                   <div class='product-img'><img src='../../images/BestTechImages/$pro_img' alt='$pro_title ' title='$pro_title'>
                                    </div>";?>
                                    <input type='submit' class='btn bg-green' name='edit' value='Edit' onclick="location.href='edit-product.php?edit_product=<?php echo $pro_id ?>';" >
                                    <input type='submit' class='btn bg-blue' name='delete' value='Delete' onclick="location.href='includes/supprimer.php?delete_product=<?php echo $pro_id ?>';" >
                                    
                                    <?php echo"
                                    <div class='product-desc'><span class='title-midd text-truncate'>$pro_title</span>
                                        <p>$pro_desc</p><span class='title-midd text-truncate'> <br/>";?> 
                                        <p style="color:green;"><?php echo"Price: $pro_price DT <br/><br/></p>";?>
                                       <?php if ($cat==4){ 

                                           //$pro_price_promo=  $pro_price-(($pro_price*$pro_promo)/100);
                                           echo"<p style='color:#834e83;'> Price with promo: $pro_price DT<br/><br/></p>";}
                                           ?> 
                                        <p style="color:red;"><?php echo "IN STOCK: $pro_qte unity</p>
                                    </div>
        
                                </div>
        
                            </div> ";}}
                            else{
                               echo "<script>alert('Non valid selection! Retry again')</script>";
                               echo "<script>window.open('product.php','_self')</script>";
                               
                           } }          

                            else{
                                
                               echo"<h1 class='text-center mb-4'>Please select Category & Product Category !</h1>";
                           }
                                                
                       ?>
                      

               </div>  
           </div>
           
       </main>
       <aside id="right-sidebar"></aside>
   </div>
  

   <script src="../assets/js/vendor.js"></script>
   <script src="../assets/js/base/init.switcher.js"></script>
   <script src="../assets/js/base/custom.js"></script>
</body>

<footer class="text-center mb-4">© 2021 DashBoard </footer>


</php>


