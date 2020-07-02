const sr = ScrollReveal();

//titre du véhicule
sr.reveal('.titre_voiture', {
    duration: 2000,
    origin: 'top',
    distance: '50px',
    reset: true
});

//photo du véhicule
sr.reveal('.photo_voiture', {
    delay: 600,
    scale: 0.5,
    duration: 2500,
    reset: true
});

//caractèristiques du véhicules
sr.reveal('.caracteristique', {
    duration: 2500,
    delay: 800,
    origin: 'right',
    distance: '100px',
    reset: true
});

//texte descriptif du véhicule
sr.reveal('.texte_descriptif_vehicule', {
    origin: 'bottom',
    distance: '80px',
    delay: 1400,
    opacity: 0.2,
    reset: true
});

//bouton de contact
sr.reveal('.bouton_contact', {
    origin: 'bottom',
    distance: '90px',
    duration: 2500,
    opacity: 0.1
});