<?php 
    include('../../../php/connectbdd.php');

    $id= $_GET['id'];
    $delete= $bdd->prepare("DELETE FROM services WHERE id_services='$id'");
    $delete->execute();

    $delete->closeCursor();
    header('location:../../admin.php?success=15');
?>