<?php 
    include('../../../php/connectbdd.php');

    $id= $_GET['id'];
    $delete= $bdd->prepare("DELETE FROM vehicule WHERE id_voiture='$id'");
    $delete->execute();

    $delete->closeCursor();
    header('location:../../admin.php?success=2');
?>