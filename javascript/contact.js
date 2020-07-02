const sr = ScrollReveal();

//titre du haut de la page
sr.reveal('.titre-coordonnes', {
    origin: 'left',
    distance: '70px',
    duration: 2000,
    reset: true
});

//bloc de l'adresse
sr.reveal('.adresse-coordonnes', {
    duration: 2200,
    scale: 0.3,
    delay: 240,
    reset: true
});

//bloc du telephone
sr.reveal('.telephonne-coordonnees', {
    duration: 2200,
    scale: 0.3,
    delay: 240,
    reset: true
});

//titre du formulaire
sr.reveal('.titre-formulaire', {
    origin: 'left',
    distance: '70px',
    duration: 2000,
    reset: true
});

//information du formulaire
sr.reveal('.texte_top-formulaire', {
    duration: 2600,
    scale: 0.3,
    opacity: 0.2,
    delay: 300,
    reset: true
});

//champs du formaulaire
sr.reveal('.form-group', {
    origin: 'right',
    distance: '150px',
    duration: 2500,
    interval: 500
});

//bouton d'envoie
sr.reveal('.bouton_envoyer', {
    origin: 'bottom',
    distance: '80px',
    duration: 1500,
    opacity: 0.1,
    delay: 800
});

//condition sous le formulaire
sr.reveal('.condition', {
    origin: 'right',
    distance: '50px',
    duration: 2000
});