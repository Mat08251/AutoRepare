<?php 
    include('../../../php/connectbdd.php');

     //on récupére les données du formulaire
    $descriptif= $_POST['descriptif'];

    

    $promoIndex= $bdd->prepare("INSERT INTO promotions ( text_promo)
    VALUES (:text_promo)");
    $promoIndex->execute(array(
        'text_promo' => $descriptif
    ));

    //on ferme le requête et on redirige vers la page admin
    $promoIndex->closeCursor();
    header('location:../../admin.php?success=10');


?>