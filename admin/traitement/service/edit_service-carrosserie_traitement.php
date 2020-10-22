<?php 
    include('../../../php/connectbdd.php');

  
    $texte1= $_POST['descriptif1'];
    $texte2= $_POST['descriptif2'];



    $id= $_GET['id'];

    try {
    $edit= $bdd->prepare("UPDATE services SET  texte1_service=:descriptif1, texte2_service=:descriptif2 WHERE id_services='$id'");
    $edit->execute(array(
        'descriptif1'=> $texte1,
        'descriptif2'=> $texte2,
    ));
    }
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    $edit->closeCursor();
    header('location:../../admin.php?success=3');
?>