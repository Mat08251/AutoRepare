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
<?php include 'includes/navbar.php' ?>
    
        <!--slide-->
        <div class="rev_slider_wrapper">
        
        <!-- the ID here will be used in the JavaScript below to initialize the slider -->
        <div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">

                <!-- BEGIN SLIDES LIST -->
                <ul>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/image1.jpg" alt="Promo-du-moment" class="rev-slidebg">

                    </li>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/image2.jpg" alt="Vente-de-vehicule" class="rev-slidebg">

                    </li>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/image3.jpg" alt="Vente-de-produit-auto" class="rev-slidebg">

                    </li>

                </ul><!-- END SLIDES LIST -->

            </div><!-- END SLIDER CONTAINER -->
        </div>
   
    <div class="descriptif-garage">
        <p class="texte-descriptif col-md-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type 
            specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in 
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
            and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.
        </p>
        <div class="exemple-travaux col-md-">
            <i class="exemple fas fa-chevron-right">Vidange</i>
            <i class="exemple fas fa-chevron-right">Entretien du véhicule</i>
            <i class="exemple fas fa-chevron-right">Contrôle technique</i>
            <i class="exemple fas fa-chevron-right">Vente de produit Auto</i>
            <i class="exemple fas fa-chevron-right">Vente de véhicule</i>
            <i class="exemple fas fa-chevron-right">Petites et grosses réparations</i>
        </div>
    </div>

    <div class="service">
        <div class="container">
            <h2 class="titre-service text-center">SERVICES</h2>

            <div class="card-deck">
                <div class="card" style="background-image: url(images/image1.jpg); height:400px;">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> 
                </div>
                <div class="card" style="background-image: url(images/image1.jpg); height:400px;">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> 
                </div>
                <div class="card" style="background-image: url(images/image1.jpg); height:400px;">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> 
                </div>
                <div class="card" style="background-image: url(images/image1.jpg); height:400px;">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> 
                </div>
            </div>
        </div>
    </div>

    <div class="banniere-contact">
        <div class="card bg-dark text-white">
            <img src="..." class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>

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