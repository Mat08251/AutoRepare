<?php 
     include('../php/connectbdd.php');

     $pseudo= htmlspecialchars ($_POST['pseudo']);
     $mdp= htmlspecialchars ($_POST['mdp']);
     $email= htmlspecialchars ($_POST['email']);
     $statut= htmlspecialchars ($_POST['statut']);


     // Hachage du mot de passe
    $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);


    $req = $bdd->prepare ('INSERT INTO administrateur(pseudo, mdp, email, statut) VALUES(:pseudo, :mdp, :email, :statut)');
    $req->execute(array(
        'pseudo' => $pseudo,
        'mdp' => $pass_hache,
        'email' => $email,
        'statut' => $statut
    ));
?>