<?php include('connectbdd.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/servicesCarrosserie.css">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <title>Carrosserie</title>
</head>
<body>
    <!--Navbar-->
    <?php include '../includes/navbar.php' ?>
    
    <!--photo d'accueil-->
    <div class="image_top_page">
        <img class="test" src="../images/image4mini.jpg" alt="photo_d'accueil_page" style="background-position: top;">
    </div>

    <!--titre de la rubrique-->
    <div class="titre-travaux col-md-8 col-sm-12">
        <h2>Travaux de carrosserie</h2>
    </div>

    <hr class="barre_travaux">

    <!--bloc descriptif de la rubrique-->
    <div class="bloc-page container">
    <?php $servicecarrosserie= $bdd->prepare("SELECT * FROM services");
                  $servicecarrosserie->execute();

                  while($carrosserie=$servicecarrosserie->fetch()) {
            ?>
        <div class="photo_travaux col-md- ">
            <img src="../images/<?=$carrosserie['image_service'] ?>" class="photo_rubrique" alt="photo_rubrique-travaux">
        </div>
        <div class="bloc_texte_travaux col-md-8 col-sm-10">
            <p><?=$carrosserie['texte1_service'] ?></p>
            <p><?=$carrosserie['texte2_service'] ?></p>
        </div>
        <?php } $servicecarrosserie->closeCursor(); ?>
    </div>

    <hr class="barre_dessous_tavaux">

     <!--bouton de contact-->
     <div class="bouton_contact col-md-12">
        <a href="contact.php"><button type="button" class="btn btn-primary btn-lg">Me contacter</button></a>
    </div>

    <!--footer-->
    <?php include '../includes/footer.php' ?>

    <!--script javascript ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/servicesCarrosserie.js"></script>
</body>
</html>