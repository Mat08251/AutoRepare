<?php include('connectbdd.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/venteDeProduit.css">
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


    <!--rubrique de la promotion-->
    <div class="Promo container-fluid">
        <!--titre de la promotion-->
        <h2 class="titrePromo col-md-12 text-center">Promotion du moment</h2>
       <!--information promotion--> 
        <div class="rubriquePromo container">
            <div class="photoPromo col-md-3">
                <img src="../images/image3.jpg" class="photo_promo" alt="photo de la promo">
            </div>
            <div class="textePromo col-md-8">
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
    </div>
    <!--fin rubrique promotion-->

    <!--Rubrique vente de produit-->
    <div class="listeDesProduits container">
        <!--titre de la rubrique-->
        <h4 class="titreListeProduit col-md-12 text-center">Produits en vente sur place</h4>

        <!--cards des produits en vente-->
        <div class="row row-cols-1 row-cols-md-3">
        <?php $produits= $bdd->prepare("SELECT * FROM vente_produit");
                  $produits->execute();

                  while($produit=$produits->fetch()) {
            ?>
            <div class="col mb-4">
                <div class="card">
                <img src="../images/<?=$produit['image_produit'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$produit['titre_produit'] ?><span class="prix"><?=$produit['prix_produit'] ?>€</span></h5>
                    <p class="card-text"><?=$produit['texte_produit'] ?></p>
                </div>
                </div>
            </div> 
            <?php } $produits->closeCursor(); ?> 
        </div>
    </div>
    <!--Fin de la rubrique vente de produit-->
    
    <!--footer-->
    <?php include '../includes/footer.php' ?>

    <!--script javascript ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/venteDeProduit.js"></script>
</body>
</html>