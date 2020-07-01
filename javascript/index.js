const sr = ScrollReveal();

sr.reveal('.texte-descriptif', {
    duration: 3000,
    distance: '30px',
    reset: true
});

sr.reveal('.exemple-travaux', {
    origin: 'right',
    duration: 2800,
    distance: '80px',
    reset: true
});

sr.reveal('.titre-service', {
    origin: 'bottom',
    distance: '20px',
    duration: 2000,
    scale: 1,
    reset: true
});

sr.reveal('.card', {
    delay: 1000,
    interval: 250
}, 500);

sr.reveal('.bouton-contact', {
    origin: 'right',
    distance: '500px',
    duration: 2500,
    opacity: 0.2,
    reset: true
});

sr.reveal('.info-banniere', {
    origin: 'bottom',
    distance: '80px',
    duration: 1500,
    delay: 800,
}, 1000);