<?php 
    include('../../../php/connectbdd.php');

    $promotion= $_POST['descriptif'];




    $id= $_GET['id'];

    $edit= $bdd->prepare("UPDATE promotions SET  text_promo=:descriptif WHERE id_promo='$id'");
    $edit->execute(array(
        'descriptif'=> $promotion
    ));

    $edit->closeCursor();
    header('location:../../admin.php?success=11');
?>