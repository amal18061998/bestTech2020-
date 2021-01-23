<?php 
//require ('product_details.php');
$db = mysqli_connect("localhost","root","","besttech1");

function getPro($cat){//afficher tous les produits de categories $cat 
    
    global $db;
    
    $get_produit = "select * from products where cat_id='$cat' ORDER BY(cat_id) ";//récuperer les produits de catégorie $cat dans une table
    
    $run_produit = mysqli_query($db,$get_produit); //executer la requete
    
    while($row_produit=mysqli_fetch_array($run_produit)){ //si exist encore des lignes dans la table récupérée
        
        $pro_id = $row_produit['product_id'];//l'id du produit
        
        $pro_title = $row_produit['product_title'];//le nom du produit
        
        $pro_price = $row_produit['product_price'];// le prix
        
        $pro_img = $row_produit['product_img'];//l'image

        $pro_desc = $row_produit['product_desc'];//description

        $pro_cat_id = $row_produit['cat_id']; 
       
        echo " <div class='product-layout product-list col-xs-12'><a href='product_details.php?pro_id=$pro_id&id_cat=$cat'>  <!-- begin; 1 product de même categories-->
                  <div class='product-thumb'>
                    <div class='image product-imageblock'><a href='product_details.php?pro_id=$pro_id&id_cat=$cat'><img  width='300px' height='200px' class='img-responsive' src='images/BestTechImages/$pro_img' alt='$pro_id'></a>
                        
                    </div>
                    <div class='caption product-detail'>
                      <h4 class='product-name'> <a href='product_details.php?pro_id=$pro_id'>$pro_title</a> </h4>
                      <p class='product-desc'>$pro_desc</p>
                          
                     
                    <p class='price product-price'><h1>$pro_price DT</h1></p>
                     
                    </div>   
                    <form action=formPanier.php method=get > 
                    <div class='button-group'>
                    <input type=hidden name=action value=ajouter />
                      <input class='btn hvr-hover' type=submit value='buy it NOW' />
                    
                    </div>
                    </form>
                  </div>
                </div> <!-- end ; 1 product de même categories--> "; } } 
                

/// begin getpcatpro functions ///

function getpcatpro($p_cat_id,$cat){
    
  global $db;
  
      $get_produit ="select * from products where cat_id='$pro_cat_id' and cat_id='$cat'";
      
      $run_produit = mysqli_query($db,$get_produit);
      
      $count = mysqli_num_rows($run_produit);
      
      if($count==0){
          
          echo " <h1> No Product Found In This Product Categories </h1>";
          
      }else{
          
          while($row_produit=mysqli_fetch_array($run_produit)){
              
            $pro_id = $row_produit['product_id'];//l'id du produit
        
            $pro_title = $row_produit['product_title'];//le nom du produit
            
            $pro_price = $row_produit['product_price'];// le prix
            
            $pro_img = $row_produit['product_img'];//l'image
    
            $pro_desc = $row_produit['product_desc'];//description
    
             
                     
              echo " <div class='product-layout product-list col-xs-12'>  <!-- begin; 1 product de même categories-->
              <div class='product-thumb'>
                <div class='image product-imageblock'><a href='product_details.php?pro_id=$pro_id&id_cat=$cat'><img class='img-responsive' src='image/product/$pro_img'alt='$pro_id'></a>
                    <div class='button-group'>
                      <button type='button' class='addtocart-btn'>Add to Cart</button>
                    </div>
                </div>
                <div class='caption product-detail'>
                  <h4 class='product-name'> <a href='product_details.php?pro_id=$pro_id&id_cat=$cat'>$pro_title</a> </h4>
                  <p class='product-desc'>$pro_desc</p>";
                 
                  
                    echo"<p class='price product-price'><span><h1>$pro_price DT<h1> </span></p> </div> 
                
                    
                <div class='button-group'>
                  <button type='button' class='addtocart-btn'>Add to Cart</button>
                </div>
              </div>
            </div> <!-- end ; 1 product de même categories--> "; } } 
           
               }
/// finish getpcatpro functions ///
?>