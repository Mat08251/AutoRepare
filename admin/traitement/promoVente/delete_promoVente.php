<?php 
    include('../../../php/connectbdd.php');

    $id= $_GET['id'];
    //on prépare une requête pour supprimer une promo en page vente
    $delete= $bdd->prepare("DELETE FROM promo_vente WHERE id_promoVente='$id'");
    $delete->execute();

    //on ferme la requête puis on redirige vers la page admin
    $delete->closeCursor();
    header('location:../../admin.php?success=9');
?>