<?php 
    include('../../php/connectbdd.php');

    $id= $_GET['id'];
    $delete= $bdd->prepare("DELETE FROM promotions WHERE id_promo='$id'");
    $delete->execute();

    $delete->closeCursor();
    header('location:../admin.php?success=12');
?>