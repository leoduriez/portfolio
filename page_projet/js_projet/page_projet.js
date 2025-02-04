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

    // Création de 40 bulles avec des propriétés aléatoires
    for (let i = 0; i < 40; i++) {
        const bubble = document.createElement('div');
        bubble.className = 'floating-bubble';
        bubble.style.left = `${Math.random() * 100}%`;
        bubble.style.width = `${Math.random() * 100 + 30}px`;
        bubble.style.height = bubble.style.width;
        bubble.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        bubble.style.animationDuration = `${Math.random() * 15 + 5}s`;
        bubble.style.animationDelay = `${Math.random() * 8}s`;
        mainContainer.appendChild(bubble);
    }
}

// Démarre les animations quand le DOM est chargé
document.addEventListener('DOMContentLoaded', createBubbles);

// Implémentation de la navigation fluide
document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('data-target');
            const targetSection = document.getElementById(targetId);
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});

// Système de traduction
// Définition des traductions pour différentes langues
const translations = {
    fr: {
        'nav-projects': 'Projets',
        'nav-skills': 'Compétences',
        'nav-contact': 'Contact',
        'hero-title': 'Développeur Web Full Stack',
        'contact-title': 'Contactez-moi',
        'nav-about': 'À propos de moi',
    },
    en: {
        'nav-projects': 'Projects',
        'nav-skills': 'Skills',
        'nav-contact': 'Contact',
        'hero-title': 'Full Stack Web Developer',
        'contact-title': 'Contact Me',
        'nav-about': 'About me',
    }
};

// Fonction pour changer de langue
function switchLanguage(lang) {
    // Met à jour tous les éléments traduisibles
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });

    // Met à jour l'état des boutons de langue
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById(`${lang}-btn`).classList.add('active');

    // Sauvegarde la préférence de langue
    localStorage.setItem('preferred-language', lang);
}

// Initialise les écouteurs d'événements des boutons de langue
document.getElementById('fr-btn').addEventListener('click', () => switchLanguage('fr'));
document.getElementById('en-btn').addEventListener('click', () => switchLanguage('en'));

// Charge la langue préférée ou par défaut
document.addEventListener('DOMContentLoaded', () => {
    const preferredLanguage = localStorage.getItem('preferred-language') || 'fr';
    switchLanguage(preferredLanguage);
});

// Sélection des éléments
const themeToggle = document.querySelector('.theme-toggle');
const htmlElement = document.documentElement;
const logoImage = document.querySelector('.logo img');

// Charge le thème sauvegardé
const savedTheme = localStorage.getItem('theme') || 'light';
htmlElement.setAttribute('data-theme', savedTheme);

// Met à jour le logo si le thème est sombre
if (savedTheme === 'dark') {
    logoImage.src = './img/logo-Ld-portfolio_1.webp';
}

// Gestion du changement de thème
themeToggle.addEventListener('click', () => {
    const currentTheme = htmlElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    // Change le logo selon le thème
    if (newTheme === 'dark') {
        logoImage.src = './img/logo-Ld-portfolio_1.webp';
    } else {
        logoImage.src = './img/logo_portfolio_noir.png';
    }

    // Applique le nouveau thème
    htmlElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
});


// Fonctionnalité de l'accordéon des mentions légales
document.addEventListener('DOMContentLoaded', function() {
    const mentionsLegalesLink = document.querySelector('.mentions-legales-link');
    const accordion = document.querySelector('.accordion');
    const panel = document.querySelector('.panel');

    mentionsLegalesLink.addEventListener('click', function(event) {
        event.preventDefault();
        accordion.classList.toggle('active');
        panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
    });
});
