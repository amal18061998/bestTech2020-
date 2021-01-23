
<?php include ('includes/headerE.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>whishlist</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    </br>
    <form action="wishlistNewPost.php" method="post">
        <p>
        <label for="pseudo"> Your mail </label> : <input type="e_mail" name="pseudo" id="pseudo" required/><br />
        <label for="message"> Message </label> :  <input type="text" name="message" id="message" /><br />

        <input  class="btn hvr-hover" type="submit" value="Send us your wish!!" />
	</p>
    </form>

<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=wishlists;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM wishlist ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
/*while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}*/

$reponse->closeCursor();

?>
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
<?php include ('add_rate.php');?>
<?php include ('includes/footerE.php');?>