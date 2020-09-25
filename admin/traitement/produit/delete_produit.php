<?php 
    include('../../../php/connectbdd.php');

    $id= $_GET['id'];
     //on prépare une requête pour supprimer un produit
    $delete= $bdd->prepare("DELETE FROM vente_produit WHERE id_produit='$id'");
    $delete->execute();

    //on ferme la requête puis on redirige vers la page admin
    $delete->closeCursor();
    header('location:../../admin.php?success=5');
?>