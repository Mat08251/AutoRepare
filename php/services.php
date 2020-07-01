<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/footer.css">
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
    <!--Navbar-->
    <?php include '../includes/navbar.php' ?>

    <!--photo d'accueil-->
    <div class="image_top_page">
        <img class="test" src="../images/image5.jpg" alt="photo_d'accueil_page">
    </div>

    <!--descriptif haut de la page-->
    <div class="container">
        <h2 class="titre_debut_page col-md-12">Nos services proposés au garage</h2>

        <hr class="barre_sous-titre">

        <div class="descriptif-service col-md-12">
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

    <!--liste des services proposés-->
    <div class="container">
        <h4 class="titreRubrique">Se que notre Garage vous propose en type de réparation de votre véhicule</h4>
        <div class="rubrique col-md-12">
            <div class="proposition col-md-6">
                <i class="fas fa-caret-right">Nous réalisons l'entretien de votre véhicule (révision)</i><p>
                <a href="../php/servicesCarrosserie.php" class="lien-visite">Se renseigner</a>
                </p>
                <i class="fas fa-caret-right">Nous réalisons la vidange de votre véhicule</i><p>
                <a href="" class="lien-visite">Se renseigner</a>
                </p>
                <i class="fas fa-caret-right">Nous réalisons le contrôle technique de votre véhicule</i><p>
                <a href="" class="lien-visite">Se renseigner</a>
                </p>
                <i class="fas fa-caret-right">Nous réalisons les petites comme les grosses réparations de votre véhicule</i><p>
                <a href="" class="lien-visite">Se renseigner</a>
                </p>
            </div>
            <div class="photo col-md-6">
                <img src="placeholder 350x150" alt="">
            </div>
        </div>

        <!--description des services-->
        <div class="description_service col-md-12">
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

    <!--bouton de contact-->
    <div class="bouton_contact col-md-12">
        <button type="button" class="btn btn-primary btn-lg">Me contacter</button>
    </div>

    <!--Footer-->
    <?php include '../includes/footer.php' ?>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/services.js"></script>
</body>
</html>