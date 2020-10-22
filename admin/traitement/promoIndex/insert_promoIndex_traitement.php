<?php 
    include('../../../php/connectbdd.php');

     //on récupére les données du formulaire
    $descriptif= $_POST['descriptif'];

    
try {
    $promoIndex= $bdd->prepare("INSERT INTO promotions ( text_promo)
    VALUES (:text_promo)");
    $promoIndex->execute(array(
        'text_promo' => $descriptif
    ));
}
catch(PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
    //on ferme le requête et on redirige vers la page admin
    $promoIndex->closeCursor();
    header('location:../../admin.php?success=10');


?>