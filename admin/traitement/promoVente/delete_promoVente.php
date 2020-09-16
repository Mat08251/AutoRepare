<?php 
    include('../../../php/connectbdd.php');

    $id= $_GET['id'];
    $delete= $bdd->prepare("DELETE FROM promo_vente WHERE id_promoVente='$id'");
    $delete->execute();

    $delete->closeCursor();
    header('location:../../admin.php?success=9');
?>