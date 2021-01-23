<?php 
session_start();

$db = mysqli_connect("localhost","root","","besttech1");

          $p_id=$_GET['delete_product'];
          $get_delete_product = "DELETE FROM products where product_id='$p_id'  ";
          $run_delete_product = mysqli_query($db,$get_delete_product);
          if($run_delete_product){
          echo "<script>alert('Product has been deleted sucessfully')</script>";
          echo "<script>window.open('../product.php','_self')</script>"; }        
?>