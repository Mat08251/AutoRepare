<?php 
    include('../../../php/connectbdd.php');

    $descriptif= $_POST['descriptif'];




    $id= $_GET['id'];

    $edit= $bdd->prepare("UPDATE promo_vente SET  texte_promoVente=:descriptif WHERE id_promoVente='$id'");
    $edit->execute(array(
        'descriptif'=> $descriptif
    ));

    $edit->closeCursor();
    header('location:../../admin.php?success=8');
?>