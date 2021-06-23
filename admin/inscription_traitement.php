<?php 
    session_start();
     include('../php/connectbdd.php');

    if (!empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp_confirm']) AND !empty($_POST['email']))
    { 
        $pseudo= htmlspecialchars ($_POST['pseudo']);
        // Hachage du mot de passe
        $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $pass_hache_confirm = password_hash($_POST['mdp_confirm'], PASSWORD_DEFAULT);
        $email= htmlspecialchars ($_POST['email']);
        $statut= htmlspecialchars ($_POST['statut']);

        //Vérification si l'email est correct
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
        {
        

        $req = $bdd->prepare ('INSERT INTO administrateur(pseudo, mdp, email, statut) VALUES(:pseudo, :mdp, :email, :statut)');
        $req->execute(array(
        'pseudo' => $pseudo,
        'mdp' => $pass_hache,
        'email' => $email,
        'statut' => $statut  
        ));
        header('location: ../index.php');
    
        }
        else
        {
            header('location: inscription.php?success=1');
        }
    }
    else {
        header('location: ../php/contact.php');
    }
?>