<?php 
    include('../php/connectbdd.php');
    if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
    
        $pseudo= htmlspecialchars ($_POST['pseudo']);
        $mdp= htmlspecialchars ($_POST['mdp']);
        //$email= htmlspecialchars ($_POST['pseudo']);

    
    $verif= $bdd->prepare("SELECT id_admin, mdp, statut FROM administrateur WHERE  pseudo= :pseudo");
    $verif->execute(array(
        'pseudo' => $pseudo));
    $result = $verif->fetch();

    $Password_Correct = password_verify($_POST['mdp'], $result['mdp']);
    
    if (!$result)
    {
        header('location: index.php?success=1');
    }
    else 
    {
        if($Password_Correct) {
            session_start();
            $_SESSION['id_admin'] = $result['id_admin'];
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['statut'] = $result['statut'];
            header('location: admin.php');
        }
        else {
            header('location: index.php?success=1');
        }
    }

} else { header('location: ../index.php'); }
?>