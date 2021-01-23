<?php include("includes/headerE.php");
include ("includes/bd.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title> BestTech</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

                    <div class="right-phone-box">
                        <p>Call US :+216 <a href="#">74 275 595</a></p>
                    </div>
   
    <!-- Start All Title Box -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
   
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        
                    </div>
                    <div class="card-body">
                        <form action="contact-us.php" method="post">

                            <input type="text" name="pseudo" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="mail" placeholder="Email" class="form-control mb-2" >
                            <input type="text" name="subject" placeholder="Subject" class="form-control mb-2" >
                            <textarea type="text" name="message" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <input  class="btn hvr-hover" type="submit" value="Send" name="enregistrer" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Cart -->

    
<?php include ("includes/footerE.php");?>
    <!-- End Footer  -->
    
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
if(isset($_POST['enregistrer'])){

$pseudo= $_POST['pseudo'];

$mail= $_POST['mail'];

$subject = $_POST['subject'];

$message = $_POST['message'];


$insert_customer = "insert into contactif(pseudo,mail,subject,message) values ('$pseudo','$mail','$subject','$message')";

$run_customer = mysqli_query($con,$insert_customer);}
//echo "<script>alert('your message has been send ! thank u for conntacting us')</script>";}
?>