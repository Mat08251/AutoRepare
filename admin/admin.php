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
<body class="bg-light">
    
<img class="logo" src="../images/logo.png"><h1 class="text-center font-weight-bold font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface Administrateur</h1>
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
    } ?>
<center><a href="../index.php" class="lien-admin text-black-50 mb-5">Revenir à l'accueil</a></center>
    <center><a href="admin.php" class="lien-admin text-black-50 mt-5 mb-5">Accès à l'accueil admin</a></center>
    <center><a href="traitement/deco_admin.php"><button type="button" class="boutondeco btn btn-outline">Deconnexion</button></a></center>
    <div class=" mt-2">
    <h3 class="  mt-4 "><center><?=$pseudo?></center></h3>
        
    <h3 class="titreFormaAdmin  mt-4 mb-5"><center>Liste des formations</center></h3>

    <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Voitures</center></h3>

    <center><a href="traitement/insert_voiture.php" class="text-black-50">Ajouter une voiture <i class="fas fa-plus-circle mb-4"></i></a></center>

    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Caractéristiques</th>
          <th scope="col">Descriptif</th>
          <th scope="col">Prix</th>
          <th scope="col">Image</th>
          <th scope="col">Modifier</th> 
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $produits= $bdd->prepare("SELECT * FROM vehicule");
            $produits->execute();

            while($produit= $produits->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $produit['nom_voiture']; ?></th>
          <td><?= substr($produit['caracteristique_voiture'], 0, 20); ?>...</td>
          <td><?= substr($produit['descriptif_voiture'], 0, 20); ?>...</td>
          <td><?= $produit['prix_voiture']; ?></td>
          <td><img style="width: auto; height: 120px;" src="../images/<?= $produit['image_voiture'] ?>"</td>
          <td><a href="traitement/edit_voiture.php?id=<?=$produit['id_voiture'] ?>" class="text-muted"><i
                class="fas fa-user-edit"></i></a></td>
          <td><a href="traitement/delete_voiture.php?id=<?=$produit['id_voiture'] ?>" class="text-muted"><i
                class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
}
$produits->closecursor();
?>
      </tbody>
    </table>
  </div>


  <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Produits</center></h3>

    <center><a href="traitement/insert_produit.php" class="text-black-50">Ajouter un produit <i class="fas fa-plus-circle mb-4"></i></a></center>
  
    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Descriptif</th>
          <th scope="col">Prix</th>
          <th scope="col">Image</th>
          <th scope="col">Modifier</th> 
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


      <?php
          $produits= $bdd->prepare("SELECT * FROM vente_produit");
          $produits->execute();

          while($produit= $produits->fetch())
      { ?>
      <tr>
        <th scope="row"><?= $produit['titre_produit']; ?></th>
        <td><?= substr($produit['texte_produit'], 0, 20); ?>...</td>
        <td><?= $produit['prix_produit']; ?></td>
        <td><img style="width: auto; height: 120px;" src="../images/<?= $produit['image_produit'] ?>"</td>
        <td><a href="traitement/edit_produit.php?id=<?=$produit['id_produit'] ?>" class="text-muted"><i
              class="fas fa-user-edit"></i></a></td>
        <td><a href="traitement/delete_produit.php?id=<?=$produit['id_produit'] ?>" class="text-muted"><i
              class="fas fa-trash-alt"></i></a></td>
      </tr>
      <?php
      }
      $produits->closecursor();
      ?>
      </tbody>
    </table>
  </div>
</body>
<?php }else{
  header('location: index.php');
}?>
</html>