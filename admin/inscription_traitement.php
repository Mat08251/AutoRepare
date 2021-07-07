<?php 
    session_start();
     include('../php/connectbdd.php');

    if (!empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp_confirm']) AND !empty($_POST['email']))
    { 
        $pseudo= htmlspecialchars ($_POST['pseudo']);
        $pass_hache = htmlspecialchars($_POST['mdp']);
        $pass_hache_confirm = htmlspecialchars($_POST['mdp_confirm']);
        $email= htmlspecialchars ($_POST['email']);
        $statut= htmlspecialchars ($_POST['statut']);

        //vérification si le pseudo existe dans la base de données
        $verif= $bdd->prepare("SELECT pseudo, mdp, statut FROM administrateur WHERE  pseudo= :pseudo");
        $verif->execute(array(
        'pseudo' => $pseudo));
        $result = $verif->fetch();
        $row = $verif->rowCount();

        if($row == 0)
        {
            if(strlen($pseudo) <= 100) //verification du pseudo inférieur à 100 caractères
            {
               if(strlen($email) <= 100) //verification de l'email inférieur à 100 caractères
               {
                   //vérification de l'adresse mail 
                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
                {
                    if($pass_hache == $pass_hache_confirm)
                    {   // Hachage du mot de passe
                        $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

                        //insertion des informations dans la base de données
                        $req = $bdd->prepare ('INSERT INTO administrateur(pseudo, mdp, email, statut) VALUES(:pseudo, :mdp, :email, :statut)');
                        $req->execute(array(
                        'pseudo' => $pseudo,
                        'mdp' => $pass_hache,
                        'email' => $email,
                        'statut' => $statut  
                        ));
                        header('location: ../index.php');

                    }else { header('Location: inscription.php?reg_err=mdp'); }
                }
                else
                {
                    header('location: inscription.php?success=1');
                }
               }else { header('Location: inscription.php?reg_err=email_length'); }
            }else { header('Location: inscription.php?reg_err=pseudo_length'); }
        }
        else { header('Location: inscription.php');}     
    }
    else {
        header('location: ../index.php');
    }
?>