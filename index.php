<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>

    <!--slide-->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

        <!-- LOAD JQUERY LIBRARY -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
        
        <!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <title>Document</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div id="logo">
            <img src="images/logo.png" alt="logo-du-garage">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/venteDeProduit.php">Vente de produit Auto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/venteDeVehicule.php">Vente de véhicule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/contact.php">Contact</a>
                </li>
            </ul>
            <div class="vl"></div>
            <ul class="social">
                <i class="icon fab fa-facebook-f"></i>
                <i class="icon fab fa-twitter"></i>
                <i class="icon fab fa-instagram"></i>
            </ul>
        </div>
    </nav>
    <!--Fin de la Navbar-->
    
        <!--slide-->
        <div class="rev_slider_wrapper">
        
        <!-- the ID here will be used in the JavaScript below to initialize the slider -->
        <div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">

                <!-- BEGIN SLIDES LIST -->
                <ul>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/image2.jpg" alt="Promo-du-moment" class="rev-slidebg">
                        <div class="insertion-texte">
                            <p>test test test test test test test test test test test test</p>
                        </div>
                    </li>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/garage1.jpg" alt="Vente-de-vehicule" class="rev-slidebg">

                    </li>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/voitureauto.jpg" alt="Vente-de-produit-auto" class="rev-slidebg">

                    </li>

                </ul><!-- END SLIDES LIST -->

            </div><!-- END SLIDER CONTAINER -->
        </div>
   
   <!--intro du site-->
    <div class="descriptif-garage">
        <p class="texte-descriptif col-md-6 col-sm-12">Bienvenue chez votre garagiste Auto-repare</br>
            Chez nous qualité et écoute du client sont primordiable afin d'établir dès le départ
            une confiance mutuelle.</br>
            Ici vous trouverez également tout le necessaire pour entretenir votre véhicule avec notre large gamme de produit.
            Nous proposons également les divers services listés à votre droite.</br>
            Pour d'éventuelles question sur nos services ou nos tarif n'hésitez pas à nous contacter. 

        </p>
        <div class="exemple-travaux col-md- col-sm-12">
            <i class="exemple fas fa-chevron-right">Vidange</i>
            <i class="exemple fas fa-chevron-right">Entretien du véhicule</i>
            <i class="exemple fas fa-chevron-right">Contrôle technique</i>
            <i class="exemple fas fa-chevron-right">Vente de produit Auto</i>
            <i class="exemple fas fa-chevron-right">Vente de véhicule</i>
            <i class="exemple fas fa-chevron-right">Petites et grosses réparations</i>
        </div>
    </div>

    <!--rubrique des services-->
    <div class="service">
        <div class="container">
            <h2 class="titre-service text-center">SERVICES</h2>

            <div class="card-deck">
                <div class="card col-sm-6" style="background-image: url(images/garage6mini.jpg ); height:400px; background-position: center; background-position: right; ">
                    <h5 class="card-title text-center">Entretien du véhicule</h5> 
                </div>
                <div class="card col-sm-6" style="background-image: url(images/image1.jpg); height:400px;">
                    <h5 class="card-title text-center">Vidange</h5>
                </div>
                <div class="card col-sm-6" style="background-image: url(images/image1.jpg); height:400px;">
                    <h5 class="card-title text-center">Contrôle technique</h5> 
                </div>
                <div class="card col-sm-6" style="background-image: url(images/image1.jpg); height:400px;">
                    <h5 class="card-title text-center">Réparation du véhicule</h5> 
                </div>
            </div>
        </div>
    </div>

    <!--partie contact du garage-->
    <div class="banniere-contact">
                <div class="bouton-contact">
                    <a href="php/contact.php"><button type="button" class="btn btn-primary btn-lg">Me Contacter</button></a>
                </div>
                <div class="info-banniere col-md-12">
                    <div class="adresse-banniere col-md text-center">
                        <i class="iconInfo fas fa-map-marker-alt"></i><span class="font-weight-bold">Adresse:</span>
                        <p>6 rue Pierre Denaiffe ZAC de, 08110 Carignan</p>
                    </div>
                    <div class="telephonne-banniere col-md text-center">
                        <i class="iconInfo fas fa-phone"></i><span class="font-weight-bold">Téléphone:</span>
                        <p>06 35 10 13 18</p>
                    </div>
                    <div class="heure-banniere col-md text-center">
                        <i class="iconInfo far fa-clock"></i><span class="font-weight-bold">Heure d'ouverture:</span>
                        <p>Du Lundi au Vendredi de:<br>
                            8h00-12h00, 13h30-18h00</br>
                            Et le Samedi de:</br>
                            8h00-12h00
                        </p>
                    </div>
                </div>
    </div>

    <!--carte de localisation du garage-->
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2583.434665933933!2d5.150063615309478!3d49.646108779372526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea614dfe9f599f%3A0xd433a02635edb930!2sAutos%20R%C3%A9pare!5e0!3m2!1sfr!2sfr!4v1592918158903!5m2!1sfr!2sfr" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    
    <!--Début du footer-->
    <footer>
    <div class="footer1">
        <div class="logo-footer col-2">
            <img src="images/logo.png" alt="logo-du-garage" style="width: 170px; height: 80px;">
        </div>
        <div class="infos mr-auto col-md-9">
            <div class="adresse">
                <i class="iconInfo fas fa-map-marker-alt"></i><span class="font-weight-bold">Adresse:</span>
                <p>6 rue Pierre Denaiffe ZAC de, 08110 Carignan</p>
            </div>
            <div class="telephone">
                <i class="iconInfo fas fa-phone"></i><span class="font-weight-bold">Téléphone:</span>
                <p>06 35 10 13 18</p>
            </div>
            <div class="heure">
                <i class="iconInfo far fa-clock"></i><span class="font-weight-bold">Heure d'ouverture:</span>
                <p>Du Lundi au Vendredi de:<br>
                    8h00-12h00, 13h30-18h00</br>
                    Et le Samedi de:</br>
                    8h00-12h00</p>
            </div>
        </div>
    </div>

    <hr class="barre_de_separation">

    <div class="footer2">
        <div class="copyright">
            <p>Auto Repare <i class="far fa-copyright"></i> 2020 réalisé par Mathieu Duguet</p>
        </div>

        <hr class="barre_test">

        <ul class="social-footer">
            <i class="icon-footer fab fa-facebook-f"></i>
            <i class="icon-footer fab fa-twitter"></i>
            <i class="icon-footer fab fa-instagram"></i>
        </ul>
    </div>
    </footer>
    <!--Fin du footer-->

    <!--script javascript ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="javascript/index.js"></script>

    <!-- Slider's main "init" script -->
    <script type="text/javascript">
            
            /* https://learn.jquery.com/using-jquery-core/document-ready/ */
            jQuery(document).ready(function() {

                /* initialize the slider based on the Slider's ID attribute from the wrapper above */
                jQuery('#rev_slider_1').show().revolution({

                    /* options are 'auto', 'fullwidth' or 'fullscreen' */
                    sliderLayout: 'auto',

                    /* basic navigation arrows and bullets */
                    navigation: {

                        arrows: {
                            enable: true,
                            style: "hesperiden",
                            hide_onleave: false
                        },

                        bullets: {
                            enable: true,
                            style: "hesperiden",
                            hide_onleave: false,
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 5

                        }
                    }
                });
            });

            </script>

            <!-- ***************** -->
            <!-- END SLIDER MARKUP -->
            <!-- ***************** -->
</body>
</html>