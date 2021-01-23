
<?php include "includes/headerE.php"; ?>
     <html>
     <form method="POST" action=""> 
     <input type="text" name="recherche">
     <input class="btn hvr-hover"  type="SUBMIT" value="Search!"> 
     </form>
     </html>

     <?php
     

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'besttech1';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT * FROM products
      WHERE product_title LIKE '%$recherche%'
      ");

     // affichage du résultat
    while( $r = mysqli_fetch_array($q)){
     echo $r['product_title'].' <br />'
;
     }

include "includes/footerE.php"

?>

