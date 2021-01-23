<?php
include("includes/left-colonne.php");

$con = mysqli_connect("localhost","root","","besttech1");
?>
<!DOCTYPE php>
<php lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="admin dashboard, admin panel, dashboard, responsive dashboard, admin template, themeforest, dashboard template, css3, html5">
    <title>bestTech Administration</title>
   
    
  
    <link href="../assets/css/vendor.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/BestTechImages/favicon.ico" >
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    
</head>

<body  style="background-color:#edffe3;">
    <div id="loader">
        <div id="loader-content">
            <div id="loader-circle"></div><span>BestTech-Admin</span></div>
    </div>

    <div id="wrapper">
        <header id="header" style="background-color:#edffe3;"><a href="javascript:void(0);" id="hamburger"><i class="icon ion-navicon" ></i></a>
            <?php //Ajout des 2 listes du choix du categorie et produit_categorie?>
            <form action="product.php" method="GET">

                <ul class="input-group">
                   
                      <li><button type="button" class="btn"></button></li>
                    
                        

                        <li><select name="cat" id="category" class="custom-select" selected >
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
                        </select><li>
                    

                    
                       

                        <li><input type="submit" class='btn bg-green ' name="recherche" value="Search"></li>

                    
                                    
                </ul>


            </form>

           
        </header>

        </body>
        </html>