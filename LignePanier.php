<?php
  class LignePanier {
	   public $prod ;
	   public $qte ;
	
	   function __construct($produit) {
	     $this->prod = $produit;
	     $this->qte = 1; 
	   }


	   public function addProduit($conn){
		try{
			$stm = $conn->prepare("INSERT INTO commande (produit,prix) VALUES (?,?)");
			$stm->execute([$this->prod, $this->qte]);
			return true;
		}catch(PDOException $e ){
			if ($e->getCode() == 2300){
				$message=$e->getMessage();
			}
			return false;
		}
	}
	   
/* l'ideal serait d'avoir les attributs en private avec des set et des get pour chaque attribut.
   On le fera pour la prochaine version... ;-) */
   
	}
	
?>