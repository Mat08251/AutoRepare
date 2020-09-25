<?php 
    include('../../../php/connectbdd.php');

    $nom= $_POST['nom'];
    $texte1= $_POST['descriptif1'];
    $texte2= $_POST['descriptif2'];



    $id= $_GET['id'];

    $edit= $bdd->prepare("UPDATE services SET nom_service=:nom, texte1_service=:descriptif1, texte2_service=:descriptif2 WHERE id_services='$id'");
    $edit->execute(array(
        'nom'=> $nom,
        'descriptif1'=> $texte1,
        'descriptif2'=> $texte2,
    ));

    $edit->closeCursor();
    header('location:../../admin.php?success=14');
?>