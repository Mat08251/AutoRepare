<?php 
    if(isset($_GET['success'])) {
      if($_GET['success']==1) { ?>
        <center><div class="alert alert-success">Voiture ajoutée</div></center>
      <?php } 
      elseif($_GET['success']==2) { ?>
        <center><div class="alert alert-success">Voiture supprimée</div></center>
      <?php } 
      elseif($_GET['success']==3) { ?>
        <center><div class="alert alert-success">Voiture modifiée</div></center>
      <?php } 
      elseif($_GET['success']==4) { ?>
        <center><div class="alert alert-success">Produit ajouté</div></center>
      <?php } 
      elseif($_GET['success']==5) { ?>
        <center><div class="alert alert-success">Produit supprimé</div></center>
      <?php } 
      elseif($_GET['success']==6) { ?>
        <center><div class="alert alert-success">Produit modifié</div></center>
      <?php } 
      elseif($_GET['success']==7) { ?>
        <center><div class="alert alert-success">promotionIndex page vente ajoutée</div></center>
      <?php } 
      elseif($_GET['success']==8) { ?>
        <center><div class="alert alert-success">promotionIndex page vente modifiée</div></center>
      <?php } 
      elseif($_GET['success']==9) { ?>
        <center><div class="alert alert-success">promotionIndex page vente supprimée</div></center>
      <?php } 
      elseif($_GET['success']==10) { ?>
        <center><div class="alert alert-success">promotion page accueil ajoutée</div></center>
      <?php } 
      elseif($_GET['success']==11) { ?>
        <center><div class="alert alert-success">promotion page accueil modifiée</div></center>
      <?php } 
      elseif($_GET['success']==12) { ?>
        <center><div class="alert alert-success">promotion page accueil supprimée</div></center>
      <?php } 
      elseif($_GET['success']==13) { ?>
        <center><div class="alert alert-success">Service ajouté</div></center>
      <?php } 
      elseif($_GET['success']==14) { ?>
        <center><div class="alert alert-success">Service modifié</div></center>
      <?php } 
      elseif($_GET['success']==15) { ?>
        <center><div class="alert alert-success">Service supprimée</div></center>
      <?php } 
    } ?>



/*$Password_Correct = password_verify($_POST['mdp'], $result['mdp']);
    
    if($Password_Correct) {
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        
    }
    else {
        header('location: index.php?success=1');
    }*/





    //Vérification si l'email est correct
     if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
     {
     // Hachage du mot de passe
    $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);


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

<?php 
    $_GET['success'] = 1 or 2 or 3 or 4 or 5 or 6 or 7 or 8;
    switch($_GET['success']) {
      case 1:  
        echo "Voiture ajoutée";
      
      break; 
      
      
    } ?>