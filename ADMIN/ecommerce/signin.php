<?php session_start();
session_destroy();
$con=mysqli_connect("localhost","root","","besttech1");?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from kri8thm.kiraninfosoft.com/dashto/theme/pages/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 17:02:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Dashto - Powerfull Admin Template">
    <meta name="keywords" content="admin dashboard, admin panel, dashboard, responsive dashboard, admin template, themeforest, dashboard template, css3, html5">
    
    
    <link rel="shortcut icon" href="../images/BestTechImages/favicon.ico" >
    
    <link href="../assets/css/vendor.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/styles.css" rel="stylesheet" type="text/css">
   
  
</head>
<body style="background-color: #c0e4c3;">
        <div id="loader"><div id="loader-content">
            <div id="loader-circle"></div><span>bestTech Administration</span></div>
        </div>
        <div id="wrapper" class="full-height auth-widget">
            <div class="card card-shadow auth-panel">
               
                <form action="signin.php" method="post" class="mb-3">
                    <div class="form-field"><input type="text" placeholder="Username" name="mail" class="form-control"></div>
                    <div class="form-field"><input type="password" placeholder="Password" name="password" class="form-control"></div>
                    <div class="form-field" ><input style="color: #35dd84; "type="submit" value="Sign In"  name="login" class="btn btn-block "></div>
                </form>
                
                <script src="../assets/js/vendor.js"></script>
                <script src="../assets/js/base/custom.js"></script>
        </div>
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
          

          if($auth=='A'){
            $query="select nameClient,id_client from client where mailClient='$customer_email'";
            $run_query = mysqli_query($con,$query);
            $row_query=mysqli_fetch_array($run_query);
            $nameClient=$row_query['nameClient'];

            $id_admin=$row_query['id_client'];

            session_start();

            $_SESSION['id_client']=$id_admin;

            $_SESSION['nameClient']=$nameClient;
            header("Location:product.php");}
        else{echo "<script>alert('Your email or password is wrong')</script>";
                exit();}
        }
       
     
        }?>