<?php 
    include('../../../php/connectbdd.php');

    //on récupere les données du formulaire
    $descriptif= $_POST['descriptif'];




    $id= $_GET['id'];
//on prépare la requête pour mettre à jour la table voiture
    $edit= $bdd->prepare("UPDATE promo_vente SET  texte_promoVente=:descriptif WHERE id_promoVente='$id'");
    $edit->execute(array(
        'descriptif'=> $descriptif
    ));

    //on redirige vers la page admin
    $edit->closeCursor();
    header('location:../../admin.php?success=8');
?>