<?php 
    include('../../../php/connectbdd.php');

    $id= $_GET['id'];
    //on prépare une requête pour supprimer un véhicule
    try {
    $delete= $bdd->prepare("DELETE FROM vehicule WHERE id_voiture='$id'");
    $delete->execute();
    }
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    //on ferme la requête puis on redirige vers la page admin
    $delete->closeCursor();
    header('location:../../admin.php?success=2');
?>