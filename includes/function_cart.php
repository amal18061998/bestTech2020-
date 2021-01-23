<?php 


$con=mysqli_connect("localhost","root","","besttech1");

/// begin add_cart functions ///

function add_cart(){
  
  global $con;
  
  if(isset($_GET['add_cart'])){
      
      $id_client=$_GET['$id_client'];
     
      $product_id = $_GET['add_cart'];
      
     // $cat_title=$_GET['nom_cat'];

      
     
      $product_qty=$_POST['product_qty'];
      
      
      $check_product = "select quantite from panier where id_client='$id_client' and product_id='$product_id'";
     
      $run_check_product  = mysqli_query($con,$check_product);
      $row_check_product=mysqli_fetch_array($run_check_product);
     
      if(mysqli_num_rows($run_check_product)>0){//si existe deja
          $sum_product=$row_check_product['quantite']+ $product_qty;

          if($sum_product>9){

          echo "<script>alert('La quantité d\'un article dans un panier ne doit pas depasser 9')</script>";}
          //echo "<script>window.open('$cat_title.php?pro_id=$product_id','_self')</script>";}
          else{
            $query = "update panier set quantite =$sum_product where product_id='$product_id'";
     
            $run_query = mysqli_query($con,$query);
            
            echo "<script>window.open('cart.php?pro_id=$product_id','_self')</script>";
          }
        
        }
          
          $query = "insert into panier (id_client,product_id,quantite) values ('$id_client','$product_id','$product_qty')";
          
          $run_query = mysqli_query($con,$query);
          
          echo "<script>window.open('cart.php?pro_id=$product_id','_self')</script>";
          
      
      
    }
  
  }



?>
