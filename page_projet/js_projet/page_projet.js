"use strict";

// Attend que le DOM soit complètement chargé avant d'exécuter le code
document.addEventListener('DOMContentLoaded', () => {
    // Sélectionne tous les liens d'ancrage (liens commençant par #)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        // Ajoute un écouteur d'événements click sur chaque ancre
        anchor.addEventListener('click', function (e) {
            // Empêche le comportement par défaut du lien
            e.preventDefault();

            // Récupère l'élément cible depuis l'attribut href
            const target = document.querySelector(this.getAttribute('href'));

            // Défilement fluide vers l'élément cible
            target.scrollIntoView({
                behavior: 'smooth', // Animation fluide
                block: 'start'     // Aligne le haut de l'élément avec la fenêtre
            });
        });
    });
});

// Fonction de création des bulles d'animation
function createBubbles() {
    // Définition des couleurs des bulles
    const colors = ['#D4AFFF', '#6b64f3', '#ffffff'];

    // Création du conteneur principal pour les bulles
    const mainContainer = document.createElement('div');
    mainContainer.className = 'background-animation';
    document.body.appendChild(mainContainer);

 // Génération de 40 bulles
    for (let i = 0; i < 40; i++) {
        // Création de chaque bulle
        const bubble = document.createElement('div');
        bubble.className = 'floating-bubble';
        
        // Propriétés aléatoires pour chaque bulle
        bubble.style.left = `${Math.random() * 100}%`;           // Position horizontale
        bubble.style.width = `${Math.random() * 100 + 30}px`;    // Largeur aléatoire
        bubble.style.height = bubble.style.width;                // Hauteur égale à la largeur
        bubble.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];  // Couleur aléatoire
        bubble.style.animationDuration = `${Math.random() * 15 + 5}s`;  // Durée d'animation
        bubble.style.animationDelay = `${Math.random() * 8}s`;   // Délai d'animation
        
        // Ajout de la bulle au conteneur
        mainContainer.appendChild(bubble);
    }
}

// Initialisation des animations au chargement
document.addEventListener('DOMContentLoaded', createBubbles);  // Lance la création des bulles

// Configuration de la navigation fluide
document.addEventListener('DOMContentLoaded', () => {
    // Sélection de tous les liens de navigation
    const navLinks = document.querySelectorAll('.nav-links a');
    
    // Application des écouteurs d'événements sur chaque lien
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();  // Bloque le comportement par défaut du lien
            
            // Récupération de l'identifiant de la section cible
            const targetId = link.getAttribute('data-target');
            
            // Sélection de la section cible
            const targetSection = document.getElementById(targetId);
            
            // Défilement fluide vers la section
            targetSection.scrollIntoView({
                behavior: 'smooth'  // Animation de défilement fluide
            });
        });
    });
});


// Système de traduction
// Définition des traductions pour différentes langues
const translations = {
    fr: {
        'projects-page-title': 'Mes Projets | Portfolio',
        'back-button': 'Retour',
        'my-projects': 'Mes Réalisations',
        'ecommerce-title': 'Site E-commerce',
        'ecommerce-desc': 'Création d\'une boutique en ligne responsive avec système de panier et paiement sécurisé.',
        'webapp-title': 'Application Web',
        'webapp-desc': 'Dashboard administratif pour la gestion de données utilisateurs.',
        'game-title': 'Jeux Vidéo',
        'game-desc': 'Développement d\'un jeu vidéo interactif avec animations et niveaux progressifs.',
        'view-site': 'Voir le site',
        'rights-reserved': 'Tous droits réservés',
        'legal-notice': 'Mentions légales',
        'legal-title': 'Mentions légales',
        'legal-edition': 'Edition du site',
        'legal-website': 'Le présent site, accessible à l\'URL www.duriez-leo.fr (le « Site »), est édité par :',
        'legal-identity': 'Léo Duriez, né le 25/06/2005,',
        'legal-hosting': 'Hébergement',
        'legal-hosting-info': 'Le Site est hébergé par la société O2Switch, situé 222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand, (contact téléphonique ou email : (+33) 4 44 44 60 40).',
        'legal-director': 'Directeur de publication',
        'legal-director-info': 'Le Directeur de la publication du Site est Léo Duriez.',
        'legal-contact': 'Me contacter',
        'legal-phone': 'Par téléphone : +33 6 22 50 96 55',
        'legal-email': 'Par email : leo.duriezj@gmail.com'
    },
    en: {
        'projects-page-title': 'My Projects | Portfolio',
        'back-button': 'Back',
        'my-projects': 'My Projects',
        'ecommerce-title': 'E-commerce Website',
        'ecommerce-desc': 'Creation of a responsive online store with shopping cart and secure payment system.',
        'webapp-title': 'Web Application',
        'webapp-desc': 'Administrative dashboard for user data management.',
        'game-title': 'Video Game',
        'game-desc': 'Development of an interactive video game with animations and progressive levels.',
        'view-site': 'View site',
        'rights-reserved': 'All rights reserved',
        'legal-notice': 'Legal Notice',
        'legal-title': 'Legal Notice',
        'legal-edition': 'Website Edition',
        'legal-website': 'This website, accessible at www.duriez-leo.fr (the "Site"), is published by:',
        'legal-identity': 'Léo Duriez, born on 06/25/2005,',
        'legal-hosting': 'Hosting',
        'legal-hosting-info': 'The Site is hosted by O2Switch, located at 222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand, France (phone or email: (+33) 4 44 44 60 40).',
        'legal-director': 'Publication Director',
        'legal-director-info': 'The Publication Director of the Site is Léo Duriez.',
        'legal-contact': 'Contact Me',
        'legal-phone': 'By phone: +33 6 22 50 96 55',
        'legal-email': 'By email: leo.duriezj@gmail.com'
    }
};

// Définition de la fonction principale de changement de langue
function switchLanguage(lang) {
    // Parcourt tous les éléments HTML ayant l'attribut 'data-translate'
    document.querySelectorAll('[data-translate]').forEach(element => {
        // Récupère la clé de traduction depuis l'attribut
        const key = element.getAttribute('data-translate');
        
        // Vérifie si une traduction existe pour cette clé dans la langue choisie
        if (translations[lang][key]) {
            // Applique la traduction au contenu de l'élément
            element.textContent = translations[lang][key];
        }
    });

    // Gestion de l'état visuel des boutons de langue
    document.querySelectorAll('.lang-btn').forEach(btn => {
        // Retire la classe 'active' de tous les boutons
        btn.classList.remove('active');
    });
    // Ajoute la classe 'active' au bouton de la langue sélectionnée
    document.getElementById(`${lang}-btn`).classList.add('active');

    // Enregistre la préférence de langue dans le stockage local du navigateur
    localStorage.setItem('preferred-language', lang);
}

// Configuration des écouteurs d'événements pour les boutons de langue
// Écouteur pour le bouton français
document.getElementById('fr-btn').addEventListener('click', () => switchLanguage('fr'));
// Écouteur pour le bouton anglais
document.getElementById('en-btn').addEventListener('click', () => switchLanguage('en'));

// Initialisation de la langue au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    // Récupère la langue préférée du stockage local ou utilise 'fr' par défaut
    const preferredLanguage = localStorage.getItem('preferred-language') || 'fr';
    // Applique la langue
    switchLanguage(preferredLanguage);
});

// Sélection des éléments DOM pour le thème
const themeToggle = document.querySelector('.theme-toggle');          // Bouton de changement de thème
const htmlElement = document.documentElement;                         // Élément HTML racine
const logoImage = document.querySelector('.logo img');                // Image du logo
const lightIcon = document.querySelector('.light-icon');              // Icône mode clair
const darkIcon = document.querySelector('.dark-icon');                // Icône mode sombre

// Récupération du thème enregistré
const savedTheme = localStorage.getItem('theme') || 'light';    // Récupère le thème du stockage local ou utilise 'light' par défaut
htmlElement.setAttribute('data-theme', savedTheme);            // Applique le thème sauvegardé à l'élément HTML

// Application initiale du thème visuel
updateThemeDisplay(savedTheme);                               // Met à jour l'interface selon le thème sauvegardé

// Configuration du gestionnaire de changement de thème
themeToggle.addEventListener('click', () => {
    // Récupère le thème actuel
    const currentTheme = htmlElement.getAttribute('data-theme');
    // Détermine le nouveau thème (inverse du thème actuel)
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    // Application du nouveau thème
    htmlElement.setAttribute('data-theme', newTheme);          // Change l'attribut de thème
    localStorage.setItem('theme', newTheme);                   // Sauvegarde le nouveau thème
    updateThemeDisplay(newTheme);                             // Met à jour l'interface avec le nouveau thème
});

// Définition de la fonction de mise à jour de l'interface selon le thème
function updateThemeDisplay(theme) {
    // Gestion du thème sombre
    if (theme === 'dark') {
        logoImage.src = './img/logo-Ld-portfolio_1.webp';     // Change le logo pour la version sombre
        lightIcon.style.display = 'none';                     // Cache l'icône du mode clair
        darkIcon.style.display = 'block';                     // Affiche l'icône du mode sombre
    } 
    // Gestion du thème clair
    else {
        logoImage.src = './img/logo_portfolio_noir.webp';      // Change le logo pour la version claire
        lightIcon.style.display = 'block';                    // Affiche l'icône du mode clair
        darkIcon.style.display = 'none';                      // Cache l'icône du mode sombre
    }
}

// Configuration de l'accordéon des mentions légales
document.addEventListener('DOMContentLoaded', function () {
    // Sélection des éléments nécessaires
    const mentionsLegalesLink = document.querySelector('.mentions-legales-link');    // Lien des mentions légales
    const accordion = document.querySelector('.accordion');                          // Conteneur de l'accordéon
    const panel = document.querySelector('.panel');                                 // Panneau de contenu

    // Gestion du clic sur le lien des mentions légales
    mentionsLegalesLink.addEventListener('click', function (event) {
        event.preventDefault();                               // Empêche le comportement par défaut du lien
        accordion.classList.toggle('active');                 // Bascule la classe active
        panel.style.display = panel.style.display === 'block' ? 'none' : 'block';  // Bascule l'affichage du panneau
    });
});

