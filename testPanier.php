<?php
	//session_start();
  
  
    include "Panier.php"; 	
    
    function afficherPanier($panier) {
         echo "<table>"; 
         foreach ($panier->lignes as $lp) {
             echo "<tr>" ;
             foreach ($lp->prod as $cle=>$valeur) {
                echo " <td> $cle : $valeur </td>" ;
             }
             echo "<td> " . $lp->qte . "</td>" ;
             echo "</tr>";
         }    
         echo "</table>";
    }
    
    function testAjouter($panier) {
         echo "<p>Le panier contient " . $panier->nbProduits . " produits ";
         echo  count($panier->lignes) . "</p>" ;
         
         $panier->ajouterProduit("p1", "Produit 1", 10.00);
         echo "<p>Le panier contient " . $panier->nbProduits . " produits ";
         echo count($panier->lignes) . "</p>" ;
         
         $panier->ajouterProduit("p2", "Produit 2", 20.00);
         echo "<p>Le panier contient " . $panier->nbProduits . " produits ";
         echo count($panier->lignes) . "</p>" ;
         
         $panier->ajouterProduit("p2", "Produit 2", 20.00);
         echo "<p>Le panier contient " . $panier->nbProduits . " produits ";
         echo count($panier->lignes) . "</p>" ;
         
         afficherPanier($panier);
           
    }
    
    function testTotal ($panier) {
        $total = $panier->calculerTotal();
        echo "<p>Prix total : <b> $total </b> </p>";
    }
    
    function testSupprimer($panier) {
         echo "<p>Le panier contient " . $panier->nbProduits . " produits ";
         echo  count($panier->lignes) . "</p>" ;
         
         $panier->supprimerProduit("p1");
         echo "<p>Le panier contient " . $panier->nbProduits . " produits ";
         echo count($panier->lignes) . "</p>" ;
         
         $panier->supprimerProduit("p2");
         echo "<p>Le panier contient " . $panier->nbProduits . " produits ";
         echo count($panier->lignes) . "</p>" ;
         
         afficherPanier($panier);

    }

?>

<!DOCTYPE html>
<html>
 <head>
 	<meta charset="UTF-8" />
 	<meta name="author" content="Manuele" />
    <title>Mon Panier</title>
    <link rel="stylesheet" href="css/panier.css" />
 </head>
 <body>
   <header> <h1>Test Panier</h1> </header>
   <section>
     <?php 
         $panier = new Panier();
         testAjouter($panier);
         testTotal($panier);
         testSupprimer($panier);
         testTotal($panier);
     ?>
   </section>
 </body>
</html>