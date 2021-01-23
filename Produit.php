<?php 
   
class Produit {
	   public $code ;
	   public $nom ;
	   public $prix ;
	
	   function __construct($codeProd, $nomProd, $prixProd) {
	     $this->code = $codeProd ; 
	     $this->nom = $nomProd ;
	     $this->prix = $prixProd ;
	   }
/* l'ideal serait d'avoir les attributs en private avec des set et des get pour chaque attribut.
   On le fera pour la prochaine version... ;-) */
	   
	}
?>
