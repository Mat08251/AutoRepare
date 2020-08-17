<?php
include('../php/connectbdd.php');
session_start();
$pseudo = $_SESSION['pseudo'];
$mdp = $_SESSION['mdp'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie Administrateur</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>
<?php 
if(isset($pseudo)){?>
<body class="fond">
    
<img class="logo" src="../images/logo.png"><h1 class="text-center font-weight-bold font-italic mt-4 mb-5">Bienvenue dans votre interface Administrateur</h1>
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
    } ?>
<center><a href="../Index.php" class="lien-admin  mb-5">Revenir à l'accueil</a></center>
    <center><a href="admin.php" class="lien-admin  mt-5 mb-5">Accès à l'accueil admin</a></center>
    <center><a href="traitement/deco_admin.php"><button type="button" class="boutondeco btn btn-outline">Deconnexion</button></a></center>
    <div class=" mt-2">
    <h3 class="lien-admin   mt-4 "><center><?=$pseudo?></center></h3>
        

    <h3 class="lien-admin font-weight-light  mt-4 mb-5"><center>Promotion page accueil</center></h3>

    <center><a href="traitement/insert_promoIndex.php" class="lien-admin">Ajouter une promotion<i class="fas fa-plus-circle mb-4"></i></a></center>
  
    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Descriptif</th>
          <th scope="col" class="modif text-center">Modifier</th> 
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


      <?php
          $promo= $bdd->prepare("SELECT * FROM promotions");
          $promo->execute();

          while($promotionIndex= $promo->fetch())
      { ?>
      <tr class="fond_tableau">
        <td><?= substr($promotionIndex['text_promo'], 0, 20); ?>...</td>
        <td><a href="traitement/edit_promoIndex.php?id=<?=$promotionIndex['id_promo'] ?>" class="text-muted"><i
              class="icon fas fa-user-edit"></i></a></td>
        <td><a href="traitement/delete_promoIndex.php?id=<?=$promotionIndex['id_promo'] ?>" class="text-muted"><i
              class="icon fas fa-trash-alt"></i></a></td>
      </tr>
      <?php
      }
      $promo->closecursor();
      ?>
      </tbody>
    </table>
  </div>

    <h3 class="lien-admin font-weight-light  mt-4 mb-5"><center>Voitures</center></h3>

    <center><a href="traitement/insert_voiture.php" class="lien-admin ">Ajouter une voiture <i class="fas fa-plus-circle mb-4"></i></a></center>

    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Caractéristiques</th>
          <th scope="col">Descriptif</th>
          <th scope="col">Prix</th>
          <th scope="col" class="text-center">Image</th>
          <th scope="col" class="modif text-center">Modifier</th> 
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $promotions= $bdd->prepare("SELECT * FROM vehicule");
            $promotions->execute();

            while($promotionIndex= $promotions->fetch())
        { ?>
        <tr class="fond_tableau">
          <th scope="row"><?= $promotionIndex['nom_voiture']; ?></th>
          <td><?= substr($promotionIndex['caracteristique_voiture'], 0, 20); ?>...</td>
          <td><?= substr($promotionIndex['descriptif_voiture'], 0, 20); ?>...</td>
          <td><?= $promotionIndex['prix_voiture']; ?></td>
          <td><img style="width: auto; height: 120px;" src="../images/<?= $promotionIndex['image_voiture'] ?>"</td>
          <td><a href="traitement/edit_voiture.php?id=<?=$promotionIndex['id_voiture'] ?>" class="text-muted"><i
                class="icon fas fa-user-edit"></i></a></td>
          <td><a href="traitement/delete_voiture.php?id=<?=$promotionIndex['id_voiture'] ?>" class="text-muted"><i
                class="icon fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
}
$promotions->closecursor();
?>
      </tbody>
    </table>
  </div>


  <h3 class="lien-admin font-weight-light  mt-4 mb-5"><center>Produits</center></h3>

    <center><a href="traitement/insert_produit.php" class="lien-admin ">Ajouter un produit <i class="fas fa-plus-circle mb-4"></i></a></center>
  
    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Descriptif</th>
          <th scope="col">Prix</th>
          <th scope="col">Image</th>
          <th scope="col" class="modif text-center">Modifier</th> 
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


      <?php
          $promotions= $bdd->prepare("SELECT * FROM vente_produit");
          $promotions->execute();

          while($promotionIndex= $promotions->fetch())
      { ?>
      <tr class="fond_tableau">
        <th scope="row"><?= $promotionIndex['titre_produit']; ?></th>
        <td><?= substr($promotionIndex['texte_produit'], 0, 20); ?>...</td>
        <td><?= $promotionIndex['prix_produit']; ?></td>
        <td><img style="width: auto; height: 120px;" src="../images/<?= $promotionIndex['image_produit'] ?>"</td>
        <td><a href="traitement/edit_produit.php?id=<?=$promotionIndex['id_produit'] ?>" class="text-muted"><i
              class="icon fas fa-user-edit"></i></a></td>
        <td><a href="traitement/delete_produit.php?id=<?=$promotionIndex['id_produit'] ?>" class="text-muted"><i
              class="icon fas fa-trash-alt"></i></a></td>
      </tr>
      <?php
      }
      $promotions->closecursor();
      ?>
      </tbody>
    </table>
  </div>

  <h3 class="lien-admin font-weight-light  mt-4 mb-5"><center>Promotion page vente</center></h3>

    <center><a href="traitement/insert_promoVente.php" class="lien-admin ">Ajouter une promotionIndex <i class="fas fa-plus-circle mb-4"></i></a></center>
  
    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Descriptif</th>
          <th scope="col">Image</th>
          <th scope="col" class="modif text-center">Modifier</th> 
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


      <?php
          $promovente= $bdd->prepare("SELECT * FROM promo_vente");
          $promovente->execute();

          while($promotionIndex= $promovente->fetch())
      { ?>
      <tr class="fond_tableau">
        <td><?= substr($promotionIndex['texte_promoVente'], 0, 20); ?>...</td>
        <td><img style="width: auto; height: 120px;" src="../images/<?= $promotionIndex['image_promoVente'] ?>"</td>
        <td><a href="traitement/edit_promoVente.php?id=<?=$promotionIndex['id_promoVente'] ?>" class="text-muted"><i
              class="icon fas fa-user-edit"></i></a></td>
        <td><a href="traitement/delete_promoVente.php?id=<?=$promotionIndex['id_promoVente'] ?>" class="text-muted"><i
              class="icon fas fa-trash-alt"></i></a></td>
      </tr>
      <?php
      }
      $promotions->closecursor();
      ?>
      </tbody>
    </table>
  </div>
</body>
<?php }else{
  header('location: Index.php');
}?>
</html>