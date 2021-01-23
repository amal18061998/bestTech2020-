<?php 
include("includes/header.php");
//include("includes/left-colonne.php");
$con = mysqli_connect("localhost","root","","besttech1");
?>
        <main id="page-wrapper"  style="background-color:#f9fae1;">
            <div class="container-fluid">
                <div class="page-header d-flex">
                    <div class="heading page-header-item">
                        <h6 class="h6">Ecommerce</h6>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                
                                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card card-shadow p-3">
                    <h6 class="h6 card-title">Add Product</h6>
                    <div class="row">
    
                        <div class="col-xl-6 col-lg-8">
                            <form method="post" enctype="multipart/form-data" class="row">

                                <div class="col-12 form-field">
                                    <label for="product" class="title-small c-blue">Product Name</label>
                                    <input type="text" name="product_title" id="product" class="form-control" placeholder="Name" >
                                </div>

                                <div class="col-sm-6 form-field">
                                    <label for="category" class="form-label">Category</label>
                                    <select name="cat_id" id="category" class="custom-select">
                                        <option> Select a Category </option>
                              
                                        <?php 
                              
                                            $get_cat = "select * from categories";
                                            $run_cat = mysqli_query($con,$get_cat);
                              
                                            while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                                 $id_cat = $row_cat['cat_id'];
                                                 $cat_title = $row_cat['cat_title'];
                                  
                                                  echo "
                                  
                                                    <option value='$id_cat'> $cat_title </option>
                                  
                                                        ";
                                  
                                                     }
                              
                                        ?>
                                    </select>
                                </div>

                               

                                <div class="col-12 form-field">
                                    <label for="category" class="form-label">Image 1</label>
                                    <input name="product_img" type="file" class="form-control" required>
                                </div>
                        
                                

                                <div class="col-sm-6 form-field">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" name="product_price" id="price" class="form-control" placeholder="Price" required>
                                </div>

                                <div class="col-sm-6 form-field">
                                    <label for="qnt" class="form-label">Quantity</label>
                                    <input type="text" name="product_qte" id="qnt" class="form-control" placeholder="Quantity" required >
                                </div>

                                
                                <div class="col-sm-6 form-field">
                                    <label for="tag" class="form-label">Keywords</label>
                                    <input type="text" name="product_keywords" id="tag" class="form-control" required>
                                </div>

                                <div class="col-sm-6 form-field">
                                    <label for="promo" class="form-label">  Promotion</label>
                                    <input type="text" name="product_promo" id="promo" class="form-control" placeholder="write 0 if there is no promotion" required >
                                </div>

                                <div class="col-12 form-field">
                                    <label for="desc" class="form-label">Description</label>
                                    <textarea name="product_desc" id="desc" cols="30" rows="5" class="form-control" required></textarea>
                                </div>
                             
                                <div class="col-sm-6 form-field">
                                    <div class="btns justify-content-end">
                                        <input type="submit" class="btn bg-green" name="save" value="Save">
                                        <input type="submit" class="btn btn-border-gray" value="Cancel">
                                    </div>
                                </div>
                                
                            </form>
                        </div>
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
<?php 

if(isset($_POST['save'])){

    $product_title = $_POST['product_title'];//nom du produit

   
    $cat = $_POST['cat_id'];//femme , homme , enfant...
    $product_price = $_POST['product_price'];
    
    $product_desc = $_POST['product_desc'];
    $pdt_quantite = $_POST['pdt_quantite'];
 
    


    $product_img = $_FILES['product_img']['name']; //name=Le nom original du fichier, tel que sur la machine du client web(admin)
   
    
    $temp_name = $_FILES['product_img']['tmp_name'];//temp_name=Le nom temporaire du fichier qui sera chargé sur la machine serveur(le serveur BD).
    
    
    move_uploaded_file($temp_name,"images/BestTechImages/$product_img"); //move_uploaded_file — Déplace un fichier téléchargé dans un dossier image
   
    
    $insert_product = "insert into  products(cat_id,product_price,product_title,pdt_quantite,product_img,product_desc) values ('$cat','$product_price','$product_title','$pdt_quantite','$product_img','$product_desc)";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('add-product.php','_self')</script>";
        
    }
    
}

?>