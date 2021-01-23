<?php include ("includes/headerE.php");?>
<?php 
include ("includes/bd.php");
include "Produit.php" ;
include "LignePanier.php";


class Panier {
	   public $lignes ;
	   public $nbProduits ;
	
	   function __construct() {
	     $this->nbProduits = 0 ; 
	   }
	   
	   
	   /* on ajoute un produit au panier */
	   function ajouterProduit($code, $nom, $prix) {
	      // echo "<p>ajouter $code $nom $prix </p> ";
	               
	       /* on verifie si le panier n'est pas vide */ 
	       if ( $this->nbProduits == 0) {
	          //  echo "<p>premier produit </p> ";
	             
	           /* le panier etait vide - on y ajoute un nouvel produit */
	           $prod = new Produit($code, $nom, $prix);
	           
	           /* le produit dans la ligne de panier */ 
	           $lp = new LignePanier($prod);
	           
	           /* on garde chaque ligne dans un tableau associatif, avec le code produit en clé */
			   $this->lignes[$code] = $lp;
			   
	           
	         //  echo "<p>" . $lp->prod->code . " " . $lp->qte . "</p>" ;
	           
	           $this->nbProduits = 1;
	       }
	       else {
	           /* il y a deja des produits dans le panier */
	           /* on verifie alors si $code n'y est pas deja */
	           
	           if ( isset ($this->lignes[$code]) ) {
	               /* le produit y figure deja, on augmente la quantite */
	               $lp =  $this->lignes[$code] ; //on recupere la ligne du panier
	               $qte = $lp->qte; 
	               $lp->qte = $qte + 1;
	               
	              // echo "<p> nouvelle qte ($qte) : " . $lp->qte ."</p>" ;
	               
	           }
	           else { 
	               /* le produit n'etait pas encore dans le panier, on n'y ajoute */
	               $prod = new Produit($code, $nom, $prix);
	               $lp = new LignePanier($prod);
	               
	               $this->lignes[$code] = $lp;
	               $this->nbProduits = $this->nbProduits + 1;
	               
				  // echo "<p>" . $this->lignes[$code]->prod->code . " " . $this->lignes[$code]->qte . "</p>" ;
				  

	           }   
	            
	       }	       
	       
	   } //fin ajouter
	   
	   
      /* on supprime un produit du panier */
	  function supprimerProduit($code) {
	     // echo "<p> supprimer $code </p>";
	      
	      /* on verifie si le produit est dans le panier */
	      if ( isset($this->lignes[$code]) ) {
	          /* il y est, donc on retrouve la ligne de panier */
	          $lp = $this->lignes[$code] ;
	          
	          /* on supprime 1 de la quantite */
	          $lp->qte = $lp->qte - 1 ;  
	          
	         // echo "<p> nouvelle qte : " . $lp->qte . "</p>" ;
	          
	          /* si qte<1, on supprime toute la ligne du tableau */
	          if (  $lp->qte < 1) {
	              unset($this->lignes[$code]);
	            //  echo "<p> produit $code supprime " . count($this->lignes) . "</p>";
	            
	            /* on enleve un produit de nbProduits */
	            $this->nbProduits = $this->nbProduits - 1;
	          }
	      }	 
	  }
	   
	 /* on calcule le montant du panier */
	 function calculerTotal () {
	      $total = 0;
	      
	      foreach ($this->lignes as $lp) {
	          $prod = $lp->prod;
	          $prixLigne = $prod->prix * $lp->qte ;
	          $total = $total + $prixLigne ;
	      }
	      
	      return $total;
	 }  
	 
	 /* on obtient combien de produits on a dans le panier */
	 function getNbProduits() {
	    return $this->nbProduits;
	 }
	
	}

?>