<?php
	
	include "Panier.php"; 	
    
	/* mes operations */
	
	/* on ajoute un produit au panier */
	function ajouterProduit($produit, $nom, $prix) {
	    $total = 0 ; 
	    
        /* on verifie si le panier est deja dans la session */
        if ( !isset($_SESSION["panier"]) ) {
            /* pas de panier -> un nouveau panier doit etre cree */
            $panier = new Panier();
            $panier->ajouterProduit($produit, $nom, $prix); 
            
            /* on lui ajoute a la session */
            /* pour cela, on a besoin de serialize(), qui va permettre de le garder dans $_SESSION */
            $_SESSION["panier"] = serialize($panier);
            
            /* on recupere le nb de produits dans le panier */
            $total = $panier->getNbProduits();
        }
        else {
            /* il y a deja un panier, on le recupere et on le met a jour */
            /* pour cela, on a besoin de unserialize(), qui va lire l'objet dans $_SESSION */
            $panier = unserialize($_SESSION["panier"]);
            $panier->ajouterProduit($produit, $nom, $prix); 
            
            /* on remet le panier (mis a jour) dans la session */
            $_SESSION["panier"] = serialize($panier);
             
            /* on recupere le nb de produits */
            $total = $panier->getNbProduits();
        }
        return $total;
  
  
       
	}
	
	/* on supprime un produit du panier */
	function supprimerProduit($produit) {
	    $total = 0;
	    
	    /* on verifie qu'il y a bien un panier dans la session */
        if ( isset($_SESSION["panier"]) ) {
            /* on le recupere et on le met a jour */
            $panier = unserialize($_SESSION["panier"]);
            $panier->supprimerProduit($produit);
            
            /* on remet le panier (mis a jour) dans la session */
            $_SESSION["panier"] = serialize($panier);
            
            /* on recupere le nb de produits */
            $total = $panier->getNbProduits();
        }

      return $total;
    }
    
       
	
	/* affichage du contenu du panier */
	function afficherPanier() {
	    /* on recupere le panier de la session */
        /* pour cela, on a besoin de unserialize(), qui va lire l'objet dans $_SESSION */
        $panier = unserialize($_SESSION["panier"]);
	   
	   //echo "<p>Il y a " . $panier->getNbProduits() . " de produits dans le panier </p>" ;
	   echo "<table>" ;
       foreach($panier->lignes as $lp) {
          $prod = $lp->prod; //on recupere le produit et la quantite pour afficher
          $qte = $lp->qte; 
          echo "<tr><td> " . $prod->nom . " </td> <td> $qte </td> </tr> ";
        } 
        echo "</table>" ;
        echo "<p class=total > Total = " . $panier->calculerTotal() ." </p>";
        
  

	}
	
	/* fermeture de la session */
	function terminerSession() {
       unset($_SESSION);
       session_destroy();
	}
	
?>

<!DOCTYPE html>
<html>
 <head>
 	<meta charset="UTF-8" />
 	<meta name="author" content="Manuele" />
    <title>Mon Panier</title>
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
 <body>
   
   
      <p> <a class="btn hvr-hover" href="formPanier.php"> Products </a> </p>
      </br>
   	  <p> <a class="btn hvr-hover"  href="ctlPanier.php?action=terminer"> destroy it  </a></p>
       </br>
   	  <p> <a class="btn hvr-hover" href="commande.php"> order NOW</a><?php  echo "<script>alert('just send us a screenshot of your order when you fill the upcoming form')</script>";?> <p>
    
    
   <section> 
     <article>
     <?php 
       /* on recupere l'info du formulaire, au min on doit avoir le produit et l'action */
       /* produit correspond au code produit, action a ce qu'on veut en faire */
       if( ! empty ( $_GET["action"] ) AND ! empty ( $_GET["produit"] ) ) {
          $action = $_GET["action"];
          $produit = $_GET["produit"];  
          
          /* on veut ajouter un nouveau produit */
          if ($action == "ajouter") {
             /* on recupere les autres informations */
             $nom = $_GET["descr"];
             $prix = $_GET["prix"];
             
             $total = ajouterProduit($produit,$nom,$prix) ;
             
             echo "<center><p>add<span class=nom> $nom </span> to cart. 
                      products' quantity: <span class=total $total </span> </p></center>";
             
          }
          /* on veut supprimer un produit */
          elseif ($action == "supprimer" ) {
             $total = supprimerProduit($produit) ;
             echo "<p>Product deleted. THERE is $total product in the cart.</p>";
          }
          
          afficherPanier();
          
          
        }
        
       else {
          /* si on ne veut ni ajouter, ni supprimer, 
            soit on veut consulter le panier, soit on veut terminer la session */
          
          //on veut terminer
          if ( ! empty ( $_GET["action"] ) ) {
              terminerSession();
              echo "<p> try again </p>";
          }
          else {
              afficherPanier();
          }
       } 
      
   ?>      
    </article> 
   </section> 
       
 </body>

</html>	

