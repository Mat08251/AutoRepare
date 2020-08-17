<?php 
    include('../../php/connectbdd.php');

    $descriptif= $_POST['descriptif'];

    

    $promoIndex= $bdd->prepare("INSERT INTO promotions ( text_promo)
    VALUES (:text_promo)");
    $promoIndex->execute(array(
        'text_promo' => $descriptif
    ));

    $promoIndex->closeCursor();
    header('location:../admin.php?success=10');


?>