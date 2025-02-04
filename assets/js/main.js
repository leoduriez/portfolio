"use strict";

// Attend que tout le contenu HTML soit chargé avant d'exécuter le code
document.addEventListener('DOMContentLoaded', () => {
    // Sélectionne tous les liens avec un href commençant par # (liens d'ancrage)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        // Ajoute un écouteur de clic sur chaque lien
        anchor.addEventListener('click', function (e) {
            e.preventDefault(); // Empêche le comportement par défaut du lien
            
            // Récupère l'élément cible à partir de l'attribut href
            const target = document.querySelector(this.getAttribute('href'));
            
            // Fait défiler la page jusqu'à l'élément cible de manière fluide
            target.scrollIntoView({
                behavior: 'smooth', // Animation fluide
                block: 'start' // Aligne le haut de l'élément avec le haut de la fenêtre
            });
        });
    });
});

// Gestion du formulaire de contact
const form = document.querySelector('.contact-form'); // Sélectionne le formulaire de contact

form.addEventListener('submit', (e) => { // Ajoute un écouteur sur la soumission du formulaire
    e.preventDefault(); // Empêche l'envoi traditionnel du formulaire
    form.reset(); // Vide tous les champs du formulaire après soumission
});


    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1 // Animation à 10% de visibilité
    };

    // Observateur d'intersection pour les animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe les cartes
    document.querySelectorAll('.project-card, .skill-card').forEach(card => {
        observer.observe(card);
    });

    // Gestion du menu burger
    const burgerMenu = document.querySelector('.burger-menu');
    const navLinks = document.querySelector('.nav-links');
    const body = document.body;

    burgerMenu.addEventListener('click', () => {
        burgerMenu.classList.toggle('active');
        navLinks.classList.toggle('active');
        body.classList.toggle('menu-open');
    });

    // Fermeture du menu au clic
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            burgerMenu.classList.remove('active');
            navLinks.classList.remove('active');
            body.classList.remove('menu-open');
        });
    });

// Création des bulles d'animation
function createBubbles() {
    const colors = ['#D4AFFF', '#6b64f3', '#ffffff'];
    const mainContainer = document.createElement('div');
    mainContainer.className = 'background-animation';
    document.body.appendChild(mainContainer);

    // Création de 40 bulles
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

// Démarrage des animations
document.addEventListener('DOMContentLoaded', createBubbles);

// Navigation fluide
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
// Système de traduction - Définition des textes traduits
const translations = {
    fr: {
        'nav-projects': 'Projets', // Menu navigation projets
        'nav-skills': 'Compétences', // Menu navigation compétences  
        'nav-contact': 'Contact', // Menu navigation contact
        'hero-title': 'Développeur Web Full Stack', // Titre héro
        'contact-title': 'Contactez-moi', // Titre section contact
        'nav-about': 'À propos de moi', // Menu navigation à propos
        'welcome-title': 'Bienvenue sur mon portfolio',
        'dev-role': 'Développeur web - 2024',
        'download-cv': 'Télécharger mon CV',
        'about-title': 'A propos de moi',
        'skill-adaptation': 'Capacité d\'adaptation',
        'skill-teamwork': 'Esprit d\'équipe',
        'skill-curiosity': 'Curiosité',
        'presentation-p1': 'Je m\'appelle <strong>Léo Duriez</strong>, j\'ai <strong>19 ans</strong> et je suis étudiant en première année de <strong>"Développeur Web"</strong> à <strong>Digital Campus</strong> à Paris.',
        'presentation-p2': 'J\'ai ensuite travaillé en <strong>intérim</strong> avant de découvrir le programme de <strong>développeur web</strong>.',
        'presentation-p3': 'Je suis convaincu que ma <strong>persévérance</strong> et ma <strong>curiosité</strong> me permettront de réussir dans ce parcours.',
        'projects-title': 'MES PROJETS',
        'project1-title': 'PROJET N°1',
        'project2-title': 'PROJET N°2',
        'project3-title': 'PROJET N°3',
        'project1-desc': 'Courte description',
        'project2-desc': 'Courte description',
        'project3-desc': 'Courte description',
        'see-more': 'Voir plus',
        'skills-title': 'MES COMPETENCES',
        'contact-title': 'CONTACTEZ MOI',
        'form-name': 'Nom :',
        'form-email': 'Email :',
        'form-message': 'Message :',
        'form-submit': 'Envoyer',
        'form-name-placeholder': 'Nom',
        'form-email-placeholder': 'Email',
        'form-message-placeholder': 'Message',
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
        'nav-projects': 'Projects',
        'nav-skills': 'Skills',
        'nav-contact': 'Contact', 
        'hero-title': 'Full Stack Web Developer',
        'contact-title': 'Contact Me',
        'nav-about': 'About me',
        'welcome-title': 'Welcome to my portfolio',
        'dev-role': 'Web Developer - 2024',
        'download-cv': 'Download CV',
        'about-title': 'About me',
        'skill-adaptation': 'Adaptability',
        'skill-teamwork': 'Team Spirit',
        'skill-curiosity': 'Curiosity',
        'presentation-p1': 'My name is <strong>Léo Duriez</strong>, I\'m <strong>19 years old</strong> and I\'m a first-year student in <strong>"Web Development"</strong> at <strong>Digital Campus</strong> in Paris.',
        'presentation-p2': 'I then worked as a <strong>temp</strong> before discovering the <strong>web developer</strong> program.',
        'presentation-p3': 'I am convinced that my <strong>perseverance</strong> and <strong>curiosity</strong> will allow me to succeed in this journey.',
        'projects-title': 'MY PROJECTS',
        'project1-title': 'PROJECT #1',
        'project2-title': 'PROJECT #2',
        'project3-title': 'PROJECT #3',
        'project1-desc': 'Short description',
        'project2-desc': 'Short description',
        'project3-desc': 'Short description',
        'see-more': 'See more',
        'skills-title': 'MY SKILLS',
        'contact-title': 'CONTACT ME',
        'form-name': 'Name:',
        'form-email': 'Email:',
        'form-message': 'Message:',
        'form-submit': 'Send',
        'form-name-placeholder': 'Name',
        'form-email-placeholder': 'Email',
        'form-message-placeholder': 'Message',
        'legal-notice': 'Legal Notice',
        'legal-title': 'Legal Notice',
        'legal-edition': 'Website Edition',
        'legal-website': 'This website, accessible at www.duriez-leo.fr (the "Site"), is published by:',
        'legal-identity': 'Léo Duriez, born on 06/25/2005,',
        'legal-hosting': 'Hosting',
        'legal-hosting-info': 'The Site is hosted by O2Switch, located at 222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand, (phone or email contact: (+33) 4 44 44 60 40).',
        'legal-director': 'Publication Director',
        'legal-director-info': 'The Publication Director of the Site is Léo Duriez.',
        'legal-contact': 'Contact Me',
        'legal-phone': 'By phone: +33 6 22 50 96 55',
        'legal-email': 'By email: leo.duriezj@gmail.com'
    }
};

// Fonction pour changer la langue
function switchLanguage(lang) {
    // Parcourt tous les éléments avec data-translate
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });

    // Met à jour l'état actif des boutons de langue
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById(`${lang}-btn`).classList.add('active');

    // Sauvegarde la préférence de langue
    localStorage.setItem('preferred-language', lang);
}


// Initialisation des écouteurs d'événements pour les boutons de langue
document.getElementById('fr-btn').addEventListener('click', () => switchLanguage('fr'));
document.getElementById('en-btn').addEventListener('click', () => switchLanguage('en'));

// Chargement de la langue préférée ou par défaut
document.addEventListener('DOMContentLoaded', () => {
    const preferredLanguage = localStorage.getItem('preferred-language') || 'fr';
    switchLanguage(preferredLanguage);
});

// Permet de faire un effet de scrollement quand tu cliques sur le logo
// Sélectionne le lien du logo
document.querySelector('.logo a').addEventListener('click', function(e) {
    // Empêche le comportement par défaut du lien
    e.preventDefault();
    
    // Fait défiler la fenêtre vers le haut
    window.scrollTo({
        top: 0, // Position tout en haut
        behavior: 'smooth' // Animation de défilement fluide
    });
});



//gestion du thème jour nuit   
// Sélectionne les éléments nécessaires pour le thème
const themeToggle = document.querySelector('.theme-toggle'); // Bouton de changement de thème
const htmlElement = document.documentElement; // Élément HTML racine
const logoImage = document.querySelector('.logo img'); // Image du logo

// Récupère le thème sauvegardé ou utilise 'light' par défaut
const savedTheme = localStorage.getItem('theme') || 'light';
htmlElement.setAttribute('data-theme', savedTheme);

// Applique le bon logo si le thème sauvegardé est sombre
if (savedTheme === 'dark') {
    logoImage.src = 'assets/images/logo-Ld-portfolio_1.webp';
}

// Gère le changement de thème au clic
themeToggle.addEventListener('click', () => {
    const currentTheme = htmlElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    
    // Change le logo selon le thème
    if (newTheme === 'dark') {
        logoImage.src = 'assets/images/logo-Ld-portfolio_1.webp';
    } else {
        logoImage.src = 'assets/images/logo_portfolio_noir.png';
    }
    
    // Applique le nouveau thème
    htmlElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme); // Sauvegarde le thème
});




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