<?php 
    include('../../../php/connectbdd.php');
//on récupere les données du formulaire
    $promotion= $_POST['descriptif'];




    $id= $_GET['id'];
//on prépare la requête pour mettre à jour la table voiture
try {
    $edit= $bdd->prepare("UPDATE promotions SET  text_promo=:descriptif WHERE id_promo='$id'");
    $edit->execute(array(
        'descriptif'=> $promotion
    ));
}
catch(PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

    //on ferme le requête et on redirige vers la page admin
    $edit->closeCursor();
    header('location:../../admin.php?success=11');
?>