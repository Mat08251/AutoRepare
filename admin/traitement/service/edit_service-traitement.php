<?php 
    include('../../../php/connectbdd.php');
    if (empty($_SESSION['id_admin']) AND empty($_SESSION['pseudo']) AND empty($_SESSION['statut']))
{
    header('location:../../../index.php');
}

    //on récupere les données du formulaire
    $nom= $_POST['nom'];
    $texte1= $_POST['descriptif1'];
    $texte2= $_POST['descriptif2'];



    $id= $_GET['id'];

    //on prépare la requête pour mettre à jour la table voiture
    try {
    $edit= $bdd->prepare("UPDATE services SET nom_service=:nom, texte1_service=:descriptif1, texte2_service=:descriptif2 WHERE id_services='$id'");
    $edit->execute(array(
        'nom'=> $nom,
        'descriptif1'=> $texte1,
        'descriptif2'=> $texte2,
    ));
    }
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    //on redirige vers la page admin
    $edit->closeCursor();
    header('location:../../admin.php?success=14');
?>