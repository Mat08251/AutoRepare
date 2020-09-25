<?php 
    include('../../../php/connectbdd.php');

    $id= $_GET['id'];
    //on prépare une requête pour supprimer un véhicule
    $delete= $bdd->prepare("DELETE FROM vehicule WHERE id_voiture='$id'");
    $delete->execute();

    //on ferme la requête puis on redirige vers la page admin
    $delete->closeCursor();
    header('location:../../admin.php?success=2');
?>