<?php include('connectbdd.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/venteDeVehicule.css">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <title>Vente de véhicule</title>
</head>
<body>
    <!--Navbar-->
    <?php include '../includes/navbar.php' ?>
    

    <!--photo d'accueil-->
    <div class="image_top_page">
        <img class="test" src="../images/voitureGaremini.jpg" alt="photo_d'accueil_page">
    </div>

    <!--texte début de page-->
    <div class="container">
        <h3 class="titre_descriptif_vente col-md-12">Véhicule en vente dans notre Garage</h3>

        <hr class="barre_vente">

        <div class="texte_descriptif_vente">
            <p>Notre garage propose également la vente de véhicule d'occasion et neuf toute marque confondu
                avec un suivis professionnel de chaque véhicule, afin de garantir une confiance client durant le procedure d'achat.</br>
                Tout nos véhicule peuvent être consulté ci-dessous avec une fiche détaillé des caractèristiques de celui-ci.</br>
                Pour tout autre information concernant l'achat de véhicule n'hésitez pas à nous contacter.
            </p>
        </div>
    </div>

    <!--bloc des véhicules en vente-->
    <div class="bloc_vehicule container">
        <div class="row">

            <?php $voitures= $bdd->prepare("SELECT * FROM vehicule");
                  $voitures->execute();

                  while($voiture=$voitures->fetch()) {
                if ($voiture['statut'] == 0) {
            ?>
                  
            <div class="card text-white">
                    <div class="back card-img-overlay" style="background-image:url('../images/<?=$voiture['image_voiture'] ?>');">
                        <div class="essai">
                            <h5 class="nom_vehicule card-title"><?=$voiture['nom_voiture'] ?></h5>
                            <div class="prix_vehicule"> <?=$voiture['prix_voiture'] ?>€ </div>
                            <a href="../php/ficheDeVehicule.php?id=<?=$voiture['id_voiture'] ?>"><button type="button" class="btn btn-primary">Voir infos</button></a>
                        </div>
                    </div>
            </div>
                  <?php 
                 } else {
                     
                 }
                } $voitures->closeCursor(); ?>
        </div>
    </div>

    <!--footer-->
    <?php include '../includes/footer.php' ?>

    <!--script javascript ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/venteDeVehicule.js"></script>
</body>
</html>