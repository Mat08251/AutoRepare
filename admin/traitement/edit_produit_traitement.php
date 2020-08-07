<?php 
    include('../../php/connectbdd.php');

    $nom= $_POST['nom'];
    $descriptif= $_POST['descriptif'];
    $prix= $_POST['prix'];




    $id= $_GET['id'];

    $edit= $bdd->prepare("UPDATE vente_produit SET titre_produit=:nom, texte_produit=:descriptif, prix_produit=:prix WHERE id_produit='$id'");
    $edit->execute(array(
        'nom'=> $nom,
        'descriptif'=> $descriptif,
        'prix'=>  $prix
    ));

    $edit->closeCursor();
    header('location:../admin.php?success=6');
?>