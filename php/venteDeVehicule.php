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
    <title>Document</title>
</head>
<body>
    <?php include '../includes/navbar.php' ?>
    

    <!--photo d'accueil-->
    <div class="image_top_page">
        <img class="test" src="../images/image1.jpg" alt="photo_d'accueil_page">
    </div>

    <!--texte début de page-->
    <div class="container">
        <h3 class="titre_descriptif_vente col-md-12">Véhicule en vente dans notre Garage</h3>

        <hr class="barre_vente">

        <div class="texte_descriptif_vente">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type
                   specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                     the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                      and more recently with desktop publishing software like Aldus PageMaker including
                      versions of Lorem Ipsum.
            </p>
        </div>
    </div>

    <!--bloc des véhicules en vente-->
    <div class="bloc_vehicule container">
        <div class="row">
            <div class="card text-white">
                    <div class="back card-img-overlay">
                        <h5 class="nom_vehicule card-title">Card title</h5>
                        <a href="../php/ficheDeVehicule.php"><button type="button" class="btn btn-primary">Voir infos</button></a>
                    </div>
            </div>
            <div class="card text-white">
                    <div class="back card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <a href="../php/ficheDeVehicule.php"><button type="button" class="btn btn-primary">Voir infos</button></a>
                    </div>
            </div>
            <div class="card text-white">
                    <div class="back card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <a href="../php/ficheDeVehicule.php"><button type="button" class="btn btn-primary">Voir infos</button></a>
                    </div>
            </div>
            <div class="card text-white">
                    <div class="back card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <a href="../php/ficheDeVehicule.php"><button type="button" class="btn btn-primary">Voir infos</button></a>
                    </div>
            </div>
            <div class="card text-white">
                    <div class="back card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <a href="../php/ficheDeVehicule.php"><button type="button" class="btn btn-primary">Voir infos</button></a>
                    </div>
            </div>
           <div class="card text-white">
                    <div class="back card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <a href="../php/ficheDeVehicule.php"><button type="button" class="btn btn-primary">Voir infos</button></a>
                    </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php include '../includes/footer.php' ?>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/venteDeVehicule.js"></script>
</body>
</html>