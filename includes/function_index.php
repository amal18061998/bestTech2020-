
<script>
.con{
  width: 500px;
  border: 5px solid rgb(111,41,97);
  border-radius: .5em;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  margin: 1em;
}
</script>
<?php


$db=mysqli_connect("localhost","root","","besttech1");

function getPro(){

    global $db;
    
    $get_produit="select * from products LIMIT 6,8";
    $run_produit= mysqli_query($db,  $get_produit);
    while($row_produit=mysqli_fetch_array($run_produit)){
        $pro_id=$row_produit['product_id'];
        $pro_title=$row_produit['product_title'];
        $pro_price=$row_produit['product_price'];
        $pro_img1=$row_produit['product_img'];
        echo"
        <div class='con'>
        <a href='product_index.php?pro_id=$pro_id'> </a>
        <div class='product'>
        
            <a href='product_index.php?pro_id=$pro_id'>
            
                <img width='180px' height='170px' class='img-responsive' src='images/BestTechImages/$pro_img1'>
            
            </a>
            
            <div class='text'>
            
                <h3>
        
                <a href='product_index.php?pro_id=$pro_id'>$pro_title</a> 
                
                </h3>
                
                <p class='price'>
                
                     $pro_price DT
                
                </p>
                
                <p class='button'>
                
                    <a class='btn btn-default' href='product_index.php?pro_id=$pro_id'>
                        View Details

                    </a>
                
                
                </p>
            
            </div>
        
        </div>
    
    </div>
    ";
        
    }}


?>