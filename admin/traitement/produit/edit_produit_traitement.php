<?php 
    include('../../../php/connectbdd.php');
    if (empty($_SESSION['id_admin']) AND empty($_SESSION['pseudo']) AND empty($_SESSION['statut']))
{
    header('location:../../../index.php');
}
//on récupere les données du formulaire
    $nom= $_POST['nom'];
    $descriptif= $_POST['descriptif'];
    $prix= $_POST['prix'];




    $id= $_GET['id'];
//on prépare la requête pour mettre à jour la table voiture
try {
    $edit= $bdd->prepare("UPDATE vente_produit SET titre_produit=:nom, texte_produit=:descriptif, prix_produit=:prix WHERE id_produit='$id'");
    $edit->execute(array(
        'nom'=> $nom,
        'descriptif'=> $descriptif,
        'prix'=>  $prix
    ));
}
catch(PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
//on redirige vers la page admin
    $edit->closeCursor();
    header('location:../../admin.php?success=6');
?>