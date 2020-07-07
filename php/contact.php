<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/contact.css">
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
        <img class="test" src="../images/image1.jpg" alt="photo_d'accueil_page">
    </div>

    <div class="container">
        <!--titre des coordonnées de contact-->
        <h3 class="titre-coordonnes">Auto Repare à Carignan : nos coordonnées</h3>

        <!--les coordonnées de contact-->
        <div class="coordonnees">
            <div class="adresse-coordonnes col-sm-6 col-md text-center">
                <i class="iconInfo fas fa-map-marker-alt"></i><span class="font-weight-bold">Adresse:</span>
                <p>6 rue Pierre Denaiffe ZAC de, 08110 Carignan</p>
            </div>
            <div class="telephonne-coordonnees col-sm-6 col-md text-center">
                <i class="iconInfo fas fa-phone"></i><span class="font-weight-bold">Téléphone:</span>
                <p>06 35 10 13 18</p>
            </div>
        </div>
    </div>

    <!--Début bloc avant le formaulaire-->
    <div class="container">
        <h4 class="titre-formulaire">Contactez-nous</h4>

        <!--texte d'informtion pour l'utilisateur-->
        <div class="texte_top-formulaire">
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
    <!--Fin du bloc avant le formulaire-->

    <!--Début du formaulaire de contact-->
        <div class="container formulaire">
            <form method="post" action="">
                <div class="form-group">
                    <label for="nom">Nom<i class="etoile fas fa-asterisk"></i></label>
                    <input type="text" class="zone_champ form-control" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom<i class="etoile fas fa-asterisk"></i></label>
                    <input type="text" class="zone_champ form-control" id="prenom" required>
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="password" class="zone_champ form-control" id="tel">
                </div>
                <div class="form-group">
                    <label for="email">Email<i class="etoile fas fa-asterisk"></i></label>
                    <input type="email" class="zone_mail form-control" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="texte">Votre demande</label>
                    <textarea class="form-control col-8" id="texte" rows="6" cols="4"></textarea>
                </div>
                <div class="bouton_envoyer">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    <!--Fin du formulaire de contact-->
        <div class="condition"><!--information pour rassurer l'utilisateur-->
            <p>Ces informations nous sont uniquement destinées.</p>
        </div>
    </div>

    <!--Footer-->
    <?php include '../includes/footer.php' ?>

    <!--script javascript ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/contact.js"></script>
</body>
</html>