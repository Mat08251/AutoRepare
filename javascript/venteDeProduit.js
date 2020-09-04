const sr = ScrollReveal();

//titre Promo
sr.reveal('.titrePromo', {
    duration: 2800,
    scale: 0.1,
    reset: true
});

//photo de la promo
sr.reveal('.photoPromo', {
    duration: 2500,
    scale: 0.4,
    delay: 600,
    reset: true
});

//texte descriptif de la promo
sr.reveal('.textePromo', {
    origin: 'right',
    distance: '100px',
    duration: 1500,
    delay: 1000,
    reset: true,
    mobile: false
});

//titre rubrique produit
sr.reveal('.titreListeProduit', {
    duration: 3500,
    scale: 0.1,
    reset: true
});

//card des divers produits
sr.reveal('.card', {
    duration: 2000,
    delay: 200,
    interval: 500
});