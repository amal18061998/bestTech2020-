<?php include("includes/header.php");
 //include("includes/left-colonne.php");

$con = mysqli_connect("localhost","root","","besttech1");
////####################### DEBUT : Recuperer les données du produit AVANT éditer #################################///

if(isset($_GET['edit_product'])){
    
    //edit: le bouton rouge edit
    
    $edit_id = $_GET['edit_product']; // ID du produit à éditer 
   
    
    $get_p = "select * from products where product_id='$edit_id'";
    
    $run_edit = mysqli_query($con,$get_p);
    
    $row_edit = mysqli_fetch_array($run_edit);
    
    $p_id = $row_edit['product_price'];  
    
   
    
    $id_cat = $row_edit[' cat_id'];

    $p_title = $row_edit['product_title'];
    
    $p_image = $row_edit['product_img']; 

   
    
    $p_price = $row_edit['product_price'];

    $p_qte = $row_edit['pdt_quantite'];
    
    
    
    $p_desc = $row_edit['product_desc'];

   

    
    //récupérer le titre de categorie
    
    $get_cat = "select * from categories where cat_id='$id_cat'";
    
    $run_cat = mysqli_query($con,$get_cat);
    
    $row_cat = mysqli_fetch_array($run_cat);
    
    $cat_title = $row_cat['cat_title'];

}

////####################### FIN: Recuperer les données du produits AVANT éditer #################################///

?>
        <main id="page-wrapper">
            <div class="container-fluid">
                <div class="page-header d-flex">
                    <div class="heading page-header-item">
                        <h6 class="h6">Ecommerce</h6>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="ecommerce.php">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card card-shadow p-3">
                    <h6 class="h6 card-title">Edit Product</h6>
                    <div class="row">
    
                        <div class="col-xl-6 col-lg-8">

                            <form method="post" enctype="multipart/form-data" class="row">
                            
                                    <input type="hidden" name="p_id" value="<?php echo $p_id ;?>" /> 
                                <div class="col-12 form-field">
                                    <label for="product" class="title-small c-blue">Product Name</label>
                                    <input type="text" name="product_title" id="product" class="form-control" value=<?php echo "$p_title";?>>
                                </div>

                                <div class="col-sm-6 form-field">
                                    <label for="category" class="form-label">Category</label>
                                    <select name="cat" id="category" class="custom-select">
                                        <option value="<?php echo $id_cat; ?>"> <?php echo $cat_title; ?> </option>

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
                                    <input name="product_img" type="file" class="form-control" required> <br>
                                    <img width="100" height="100" src="../../images/BestTechImages/<?php echo $p_image; ?>" alt="<?php echo $p_image; ?>">
                                </div>

                               
                                <div class="col-sm-6 form-field">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" name="product_price" id="price" class="form-control" value="<?php  echo $p_price;?>" required>
                                </div>

                                <div class="col-sm-6 form-field">
                                    <label for="qnt" class="form-label">Quantity</label>
                                    <input type="text" name="product_qte" id="qnt" class="form-control" value="<?php  echo $p_qte;?>" placeholder="Quantity" required >
                                </div>


                               
                                <div class="col-12 form-field">
                                    <label for="desc" class="form-label">Description</label>
                                    <textarea name="product_desc" id="desc" cols="30" rows="5" class="form-control" value="<?php echo $p_desc;?>" required> <?php  echo $p_desc;?> </textarea>
                                </div>

                                <div class="col-sm-6 form-field">
                                    <div class="btns justify-content-end">
                                        <input type="submit" class="btn " name="update" value="SAVE">
                                        <input type="submit" class="btn " value="Cancel" onclick="location.href='product.php';">
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

////####################### DEBUT :Recuperer les données du produit APRES -éditer- #################################///

if(isset($_POST['update'])){ //update : le bouton SAVE

    $product_title = $_POST['product_title'];//nom du produit

   
    $cat = $_POST['cat_id'];//femme , homme , enfant...
    $product_price = $_POST['product_price'];
    
    $product_desc = $_POST['product_desc'];
    $pdt_quantite = $_POST['pdt_quantite'];
 
    


    $product_img = $_FILES['product_img']['name']; //name=Le nom original du fichier, tel que sur la machine du client web(admin)
   
    
    $temp_name = $_FILES['product_img']['tmp_name'];//temp_name=Le nom temporaire du fichier qui sera chargé sur la machine serveur(le serveur BD).
    
    
    move_uploaded_file($temp_name,"images/BestTechImages/$pro_img"); //move_uploaded_file — Déplace un fichier téléchargé dans un dossier image
   
    
    
    
    $update_product="UPDATE products SET cat_id='$cat',product_title='$product_title',product_img='$product_img',product_price='$product_price',pdt_quantite='$product_qte', p_desc='$product_desc'  where product_id='$pro_id'"; 
    
    
    $run_update_product = mysqli_query($con,$update_product);
    
    if($run_update_product){
        
        echo "<script>alert('Product has been updated sucessfully')</script>";
        echo "<script>window.open('add-product.php','_self')</script>";
        
    }   }

////####################### FIN :Recuperer les données du produits APRES éditer #################################///

?>

