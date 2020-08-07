<?php 
    include('../../php/connectbdd.php');

    $id= $_GET['id'];
    $delete= $bdd->prepare("DELETE FROM vente_produit WHERE id_produit='$id'");
    $delete->execute();

    $delete->closeCursor();
    header('location:../admin.php?success=5');
?>