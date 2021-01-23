<?php session_start();
$con=mysqli_connect("localhost","root","","besttech1");?>



<div class="container">
   





        <div class="col-sm-9" id="content">
            <h1>Register Account</h1>
            <p>do youu have an account?! <a href="login.php">login page</a>.</p>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="registerOrNo.php">
                <legend>Personnal details</legend>
                    <div style="display: none;" class="form-group required"></div>


                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-firstname" placeholder="" value="" name="nameClient" required>
                        </div>
                    </div>



                    <div class="form-group required">
                        <label for="input-lastname" class="col-sm-2 control-label">LastName</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-lastname" placeholder="" value="" name="lastnameClient" required>
                        </div>
                    </div>



                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="mailClient">
                        </div>
                    </div>



                <fieldset>
                   
                    <div class="form-group required">
                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="input-password" placeholder="Mot de passe" value="" name="passwordClient">
                        </div>
                    </div>



                   
                </fieldset>


                <div class="buttons">
                    <div class="pull-right">
                        <input type="submit" value="Register" name="enregistrer" class="btn btn-primary">
                    </div>
                </div>




            </form>
</div>
</div>

<?php include ("includes/footerE.php"); ?>
    <!-- End Footer  -->
    <?php

if(isset($_POST['enregistrer'])){

         $nom = $_POST['nameClient'];

         $prenom = $_POST['lastnameClient'];
      
         $email = $_POST['mailClient'];
    
         $password = $_POST['passwordClient'];
    
    
         $insert_customer = "insert into client(nameClient,lastnameClient,mailClient,passwordClient) values ('$nom','$prenom','$email','$password')";
        
         $run_customer = mysqli_query($con,$insert_customer);
    
  
        
        
         $query="select lastnameClient,id_client from client where mailClient='$email'";
         $run_query = mysqli_query($con,$query);
         $row_query=mysqli_fetch_array($run_query);
         $nameClient=$row_query['nameClient'];
         $_SESSION['nameClient']=$nameClient;
 
         $id_client=$row_query['id_client'];
         $_SESSION['id_client']=$id_client;
         if($run_customer){
             echo "<script>alert('Compte has been created sucessfully')</script>";
             echo "<script>window.open('index.php','_self')</script>";
         }
         
 }

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