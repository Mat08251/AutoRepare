<?php
session_start();
include('../php/connectbdd.php');

$pseudo = $_SESSION['pseudo'];

$statut = $_SESSION['statut'];
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
<center><a href="../Index.php" class="lien-admin  mb-5">Revenir à l'accueil</a></center>
    <center><a href="traitement/deco_admin.php"><button type="button" class="boutondeco btn btn-outline">Deconnexion</button></a></center>
    
    <h3 class="lien-admin   mt-4 "><center><?php echo $_SESSION['pseudo']?></center></h3>

    <div class="card_rubrique">
        <div class="container">
            <h2 class="titre-rubrique text-center">Rubrique du site</h2>

            <div class="card-deck">
                
                <div class="rubrique card col-sm-6" style="background-image: url(../images/imagecard1.jpg ); ">
                    <a href="promoIndex.php" class="lien-card"><h5 class="card-title text-center">Promotion Accueil</h5></a> 
                </div>
                <div class="rubrique card col-sm-6" style="background-image: url(../images/garage3.jpg ); ">
                    <a href="service.php" class="lien-card"><h5 class="card-title text-center">Services</h5></a> 
                </div>
                <div class="rubrique card col-sm-6" style="background-image: url(../images/garage6mini.jpg); ">
                  <a href="voitures.php" class="lien-card"><h5 class="card-title text-center">Voitures</h5></a>
                </div>
                <div class="rubrique card col-sm-6" style="background-image: url(../images/gammeProduitmini.jpg); ">
                  <a href="produits.php" class="lien-card"><h5 class="card-title text-center">Produits</h5></a>
                </div>
                <div class="rubrique card col-sm-6" style="background-image: url(../images/produit2mini.jpg); ">
                  <a href="promotionVente.php" class="lien-card"><h5 class="card-title text-center">Promotion page vente produit</h5></a> 
                </div>
            </div>
        </div>
    </div>
</body>
<?php }else{
  header('location: Index.php');
}?>
</html>