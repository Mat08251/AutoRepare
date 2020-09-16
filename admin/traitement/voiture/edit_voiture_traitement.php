<?php 
    include('../../../php/connectbdd.php');

    $nom= $_POST['nom'];
    $caracteristique= $_POST['caracteristique'];
    $descriptif= $_POST['descriptif'];
    $prix= $_POST['prix'];
    $statut= $_POST['option_vente'];


    $id= $_GET['id'];

    $edit= $bdd->prepare("UPDATE vehicule SET nom_voiture=:nom, caracteristique_voiture=:caracteristique, descriptif_voiture=:descriptif, prix_voiture=:prix, statut=:statut WHERE id_voiture='$id'");
    $edit->execute(array(
        'nom'=> $nom,
        'caracteristique'=> $caracteristique,
        'descriptif'=> $descriptif,
        'prix'=>  $prix,
        'statut' => $statut
    ));

    $edit->closeCursor();
    header('location:../../admin.php?success=3');
?>