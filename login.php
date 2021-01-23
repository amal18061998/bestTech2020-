
<?php
include ("includes/headerE.php");?>
<div class="container">
 
  <div class="row">
    
    <div class="col-sm-9" id="content">
      <div class="row">
        <div class="col-sm-6">
          <div class="well"> </div>

        <div class="col-sm-6">
          <div class="well">
            <h2>Login</h2>
            
            <form enctype="multipart/form-data" method="post" action="login.php">
              <div class="form-group">
                <label for="input-email" class="control-label">enter your E-Mail</label>
                <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="mail">
              </div>


              <div class="form-group">
                <label for="input-password" class="control-label">enter your Password</label>
                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
</br>
              <input type="submit" class="btn hvr-hover"  name="login" value="Login">         
               </div>
           </form>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include ("includes/footerE.php")?>

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


<?php 

if(isset($_POST['login'])){
    
    $customer_email = $_POST['mail'];
    
    $customer_pass = $_POST['password'];
    
    $select_customer = "select * from client where mailClient='$customer_email' AND passwordClient='$customer_pass'";
    $run_customer = mysqli_query($con,$select_customer);
    $check_customer = mysqli_num_rows($run_customer);
    

  
    if($check_customer==1)
    {
      
      $row_customer=mysqli_fetch_array($run_customer);
      $auth=$row_customer['auth'];
      

      if($auth=='C'){

            $query="select nameClient,id_client from client where mailClient='$customer_email'";
            $run_query = mysqli_query($con,$query);
            $row_query=mysqli_fetch_array($run_query);
            $nameClient=$row_query['nameClient'];

            $id_client=$row_query['id_client'];
            $_SESSION['id_client']=$id_client;
            

          
            
            $_SESSION['nameClient']=$nameClient;
                  
           echo "<script>alert('You are Logged , go check your cart')</script>"; 
                  
           echo "<script>window.open('index.php','_self')</script>";
           
          
          
      }
         else{
  
                  echo "<script>alert('You are an ADMINISTRATOR')</script>"; 
              
                  echo "<script>window.open('ADMIN/ecommerce/signin.php','_self')</script>";
}}
else{echo "<script>alert('Your email or password is wrong')</script>";
            exit();}



}



?>
