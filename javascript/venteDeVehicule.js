const sr =ScrollReveal();

//titre début de la page
sr.reveal('.titre_descriptif_vente', {
    origin: 'left',
    distance: '80px',
    duration: 2000
});

//texte rubrique vente de véhicule
sr.reveal('.texte_descriptif_vente', {
    duration: 2800,
    opacity: 0.2,
    scale: 0.6
});

//card des véhicules en vente
sr.reveal('.card', {
    duration: 2800,
    scale: 0.4,
    interval: 600
}, 1500);