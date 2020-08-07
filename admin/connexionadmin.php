<?php 
    session_start();
    include('../php/connectbdd.php');
    $pseudo= $_POST['pseudo'];
    $mdp= $_POST['mdp'];

    $verif= $bdd->prepare("SELECT pseudo, mdp FROM administrateur WHERE pseudo='$pseudo' AND mdp='$mdp'");
    $verif->execute();
    $total= $verif->rowCount();
    if($total==1) {
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['mdp'] = $mdp;
        header('location: admin.php');
    }
    else {
        header('location: index.php?success=1');
    }
?>