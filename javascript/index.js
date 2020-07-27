const sr = ScrollReveal();

//texte du descriptif du haut de page
sr.reveal('.texte-descriptif', {
    duration: 3000,
    distance: '30px',
    reset: true
});

//liste des divers travaux proposés
sr.reveal('.exemple-travaux', {
    origin: 'bottom',
    duration: 2800,
    distance: '80px',
    reset: true
});

//titre rubrique service
sr.reveal('.titre-service', {
    origin: 'bottom',
    distance: '20px',
    duration: 2000,
    scale: 1,
    reset: true
});

//card des services
sr.reveal('.card', {
    delay: 1000,
    interval: 250
}, 500);

//bouton bannière de contact
sr.reveal('.bouton-contact', {
    origin: 'left',
    distance: '300px',
    duration: 2500,
    opacity: 0.2,
    reset: true,
});

//infos bannière de contact
sr.reveal('.info-banniere', {
    origin: 'bottom',
    distance: '80px',
    duration: 1500,
    delay: 800,
}, 1000);