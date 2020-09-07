<?php include('connectbdd.php');
    $id= $_GET['id'];

    $fiche= $bdd->prepare("SELECT * FROM vehicule WHERE id_voiture='$id'");
    $fiche->execute();

    while($fichevoiture=$fiche->fetch()) {

   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/ficheDeVehicule.css">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <title>Véhicule Autos Repare</title>
</head>
<body>
    <?php include '../includes/navbar.php' ?>
    
    <!--photo d'accueil-->
    <div class="image_top_page">
        <img class="test" src="../images/voitureGaremini.jpg" alt="photo_d'accueil_page">
    </div>

    <div class="container">
        <h5 class="titre_voiture col-sm-12 col-md-4  text-center"><?=$fichevoiture['nom_voiture'] ?></h5>

        <div class="descriptif-vehicule container col-sm-12 col-md-12 ">
            <div class="photo_voiture col-sm-12 col-md-3 ">
                <img src="../images/<?=$fichevoiture['image_voiture'] ?>" class="photo-responsive card-img" alt="photo_du_vehicule" style="">
            </div>
            <p class="caracteristique col-sm-7 col-md-7  text-center"><?=$fichevoiture['caracteristique_voiture'] ?></p>
        </div>
    </div>

    <div class="texte_descriptif_vehicule container col-sm-12 col-md-10">
        <p><?=$fichevoiture['descriptif_voiture'] ?></p><br>
        <?=$fichevoiture['prix_voiture'] ?>€
    </div>
    <?php } $fiche->closeCursor(); ?>
    <hr class="barre_separation text-center">

     <!--bouton de contact-->
     <div class="bouton_contact col-md-12">
        <a href="contact.php"><button type="button" class="btn btn-primary btn-lg">Me contacter</button></a>
    </div>

    <!--footer-->
    <?php include '../includes/footer.php' ?>

    <!--script javascript ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/ficheDeVehicule.js"></script>
</body>
</html>