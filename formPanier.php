

<!DOCTYPE html>
<html>
 <head>
 	<meta charset="UTF-8" />
 	<meta name="author" content="Manuele" />
    <title>Shop Now</title>
    
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
    <style>
       article {
    display: block;
    margin: 5px;
    padding: 3px;
    width: 80%;
    background-color: white;
    text-align: justify;
}

input.bouton { background-color : rgb(102, 102, 255);  
               color : yellow; }

table, td, th { border : 2px solid rgb(51, 0, 153); }
table { width : 70%;
        margin: auto;
        border-collapse : collapse; 
        border-radius : 10px;
        box-shadow: 10px 10px 5px gray;   
 }
 
.total { color : red; 
         font-weight : bold ;  
         text-align: right; }


.nom { font-weight : bold ; } 
     </style>
 </head>
 <?php include ("includes/headerE.php");?>

 <body>
    
    
    
   	  <!--<p> <a href="ctlPanier.php?action=terminer"> destroy it </a> </p>
   	  <p> <a href="ctlPanier.php"> order Now! </a> <p>-->
    
        </br></br></br>
    <section>
      <?php
      $db=mysqli_connect("localhost","root","","besttech1");
      $get_produit="select * from products ";
      $run_produit= mysqli_query($db,  $get_produit);
      while($row_produit=mysqli_fetch_array($run_produit)){
          $pro_id=$row_produit['product_id'];
          $pro_title=$row_produit['product_title'];
          $pro_price=$row_produit['product_price'];
          $pro_img1=$row_produit['product_img'];
          echo"
          </br></br>
        <table>
          <thead> <tr> <th> Product </th> <th> Price </th> <th>Add to cart </th> <th>Remove it </th> </tr> 
          </thead> 
          <tbody>
<!-- Commentaire : on aurait pu recuperer les produits de la BdD.-->
             <tr>
                 <td> <b> $pro_title </b> 
                 <br/> <img class='img-responsive' width='80' height='80' src='images/BestTechImages/$pro_img1'> </td>
                 <td> $pro_price </td>
                 <td> 
                   <form action=ctlPanier.php method=get > 
            <!-- on ajoute en champs cache ttes les infos du produit -->
                      <input type=hidden name=produit value= '$pro_id' />
                      <input type=hidden name=descr value='$pro_title' />
                      <input type=hidden name=prix value='$pro_price'/>
                      <input type=hidden name=action value=ajouter />
                      <input type=submit value='+' />
                    </form>
                 </td>
                <td> 
                   <form action=ctlPanier.php method=get > 
                      <input type=hidden name=produit value='$pro_id' />
                      <input type=hidden name=action value=supprimer />
                      <input type=submit value='-' />
                   </form>   
                </td>
             </tr>
             
            
             
          </tbody>
        </table>
        "
        ;}
       ?>
    </section>
   
 </body>
</html>
<?php include ('includes/footerE.php');?>