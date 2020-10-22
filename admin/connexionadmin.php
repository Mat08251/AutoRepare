<?php 
    session_start();
    include('../php/connectbdd.php');
    $pseudo= htmlspecialchars ($_POST['pseudo']);
    $mdp= htmlspecialchars ($_POST['mdp']);

    $verif= $bdd->prepare("SELECT pseudo, mdp, statut FROM administrateur WHERE pseudo='$pseudo'");
    $verif->execute(array(
        'pseudo' => $pseudo));
    $result = $verif->fetch();

    $Password_Correct = password_verify($_POST['mdp'], $result['mdp']);
    
    if($Password_Correct) {
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['statut'] = $result['statut'];
        header('location: admin.php');
    }
    else {
        header('location: index.php?success=1');
    }
?>