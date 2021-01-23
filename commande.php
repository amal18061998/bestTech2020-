<?php include("includes/headerE.php");
$con = mysqli_connect("localhost","root","","besttech1");?>


<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">order Now</li>
                    </ul>
                </div>
            </div>
        </div>
<div class="card card-shadow p-3">
<div class="title-all text-center">
                    <h6 class="h6 card-title" >order Now!</h6>
                    </div>
                    <div class="row">
    
                        <div class="col-xl-6 col-lg-8">
                            <form method="post" enctype="multipart/form-data" class="row">
                               
                                <div class="col-12 form-field">
                                    <label class="m-b-20" for="product" class="title-small c-blue">your location</label>
                                    <input type="text" name="location" id="product" class="form-control" placeholder="Location" >
                                </div>

                                <div class="col-sm-6 form-field">
                                    <label class="m-b-20" for="category" class="form-label">shipping</label>
                                    <select name="cat" id="category" class="custom-select">
                                        <option> Select a type of shipping </option>
                              
                                        <?php 
                              
                                            $get_cat = "select * from shipping";
                                            $run_cat = mysqli_query($con,$get_cat);
                              
                                            while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                                 $id_cat = $row_cat['id'];
                                                 $cat_title = $row_cat['typeLiv'];
                                  
                                                  echo "
                                  
                                                    <option value='$id_cat'>$cat_title </option>
                                  
                                                        ";
                                  
                                                     }
                              
                                        ?>
                                    </select>
                                </div>

                               

                                <div class="col-12 form-field">
                                    <label class="m-b-20" for="category" class="form-label"> a screenshot of your order</label>
                                    <input name="img" type="file" class="form-control" required>
                                </div>
                                

                                <div class="col-sm-6 form-field">
                                    <label class="m-b-20" for="promo" class="form-label">  Promo code</label>
                                    <input type="text" name="code-promo" id="promo" class="form-control" placeholder="write 0 if there is no promotion" required >
                                </div>

                                <div class="col-12 form-field">
                                    <label class="m-b-20"  for="desc" class="form-label">Notes</label>
                                    <textarea name="note" id="desc" cols="30" rows="5" placeholder="Rewirte your mail and your phone number!"class="form-control" required></textarea>
                                </div>
                             
                                <div class="col-sm-6 form-field">
                                    <div class="btns justify-content-end">
                                        <input  type="submit" class="btn hvr-hover" name="save" value="Save">
                                        <input  type="submit" class="btn hvr-hover" value="Cancel">
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>




<?php include("includes/footerE.php");?>

<?php 

if(isset($_POST['save'])){ 

     $location=$_POST['location'];

     
     $cat =$_POST['cat'];
   
    
     $note= $_POST['note'];
     $code= $_POST['code-promo'];
 
    


     $product_img = $_FILES['img']['name']; //name=Le nom original du fichier, tel que sur la machine du client web(admin)
   
     
     $temp_name = $_FILES['img']['tmp_name'];//temp_name=Le nom temporaire du fichier qui sera chargé sur la machine serveur(le serveur BD).
     
    
     move_uploaded_file($temp_name,"images/BestTechImages/$product_img"); //move_uploaded_file — Déplace un fichier téléchargé dans un dossier image
   
    
     $insert = "INSERT INTO  commande (location,img,shipp,note,code_promo) values ('$location','$product_img','$cat','$note','$code')";
    
    $run_product = mysqli_query($con,$insert);
    print_r("yes");
    
    if($run_product){
        
          echo "<script>alert('Product has been inserted sucessfully')</script>";
          echo "<script>window.open('formPanier.php','_self')</script>";
        
    }
    
}

?>