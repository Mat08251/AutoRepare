<?php 
    include('../../../php/connectbdd.php');

    $id= $_GET['id'];
    //on prépare une requête pour supprimer un service
    try {
    $delete= $bdd->prepare("DELETE FROM services WHERE id_services='$id'");
    $delete->execute();
    }
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    //on ferme la requête puis on redirige vers la page admin
    $delete->closeCursor();
    header('location:../../admin.php?success=15');
?>