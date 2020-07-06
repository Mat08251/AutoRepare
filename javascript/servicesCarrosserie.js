const sr = ScrollReveal();

//titre du service
sr.reveal('.titre-travaux', {
    origin: 'left',
    duration: 2000,
    distance: '60px'
});

//photo du service
sr.reveal('.photo_travaux', {
    duration: 2800,
    distance: '50px',
    scale: 0.8
});

//description du service
sr.reveal('.bloc_texte_travaux', {
    origin: 'right',
    distance: '70px',
    duration: 2600,
    delay: 500,
});

//bouton de contact
sr.reveal('.bouton_contact', {
    origin: 'bottom',
    distance: '50px',
    duration: 2500
});