"use strict"; // Active le mode strict pour éviter certaines erreurs et améliorer la sécurité du code

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

// Animation des cartes au scroll
const observerOptions = {
    threshold: 0.1 // Animation à 10% de visibilité
};

// Création d'un observateur d'intersection qui détecte quand les éléments deviennent visibles dans le viewport
const observer = new IntersectionObserver((entries) => {
    // Pour chaque élément observé
    entries.forEach(entry => {
        // Vérifie si l'élément entre dans la zone visible
        if (entry.isIntersecting) {
            // Ajoute la classe 'visible' à l'élément pour déclencher l'animation
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);


// Observe les cartes
document.querySelectorAll('.project-card, .skill-card').forEach(card => {
    observer.observe(card); // Observe chaque carte pour déclencher l'animation
});

// Gestion du menu burger
const burgerMenu = document.querySelector('.burger-menu'); // Sélectionne le bouton du menu burger
const navLinks = document.querySelector('.nav-links'); // Sélectionne les liens de navigation
const body = document.body; // Sélectionne l'élément body

// Ajoute un écouteur de clic sur le menu burger
burgerMenu.addEventListener('click', () => {
    burgerMenu.classList.toggle('active'); // Ajoute ou enlève la classe 'active' au menu burger
    navLinks.classList.toggle('active'); // Ajoute ou enlève la classe 'active' aux liens de navigation
    body.classList.toggle('menu-open'); // Ajoute ou enlève la classe 'menu-open' au body
});

// Fermeture du menu au clic sur un lien
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        burgerMenu.classList.remove('active'); // Enlève la classe 'active' du menu burger
        navLinks.classList.remove('active'); // Enlève la classe 'active' des liens de navigation
        body.classList.remove('menu-open'); // Enlève la classe 'menu-open' du body
    });
});

// Création des bulles d'animation
function createBubbles() {
    const colors = ['#D4AFFF', '#6b64f3', '#ffffff']; // Définit les couleurs des bulles
    const mainContainer = document.createElement('div'); // Crée un conteneur principal pour les bulles
    mainContainer.className = 'background-animation'; // Ajoute une classe pour le style
    document.body.appendChild(mainContainer); // Ajoute le conteneur au body

    // Création de 40 bulles
    for (let i = 0; i < 40; i++) {
        const bubble = document.createElement('div'); // Crée une nouvelle bulle
        bubble.className = 'floating-bubble'; // Ajoute une classe pour le style
        bubble.style.left = `${Math.random() * 100}%`; // Positionne la bulle de manière aléatoire
        bubble.style.width = `${Math.random() * 100 + 30}px`; // Définit une largeur aléatoire
        bubble.style.height = bubble.style.width; // Définit la hauteur égale à la largeur
        bubble.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)]; // Choisit une couleur aléatoire
        bubble.style.animationDuration = `${Math.random() * 15 + 5}s`; // Définit une durée d'animation aléatoire
        bubble.style.animationDelay = `${Math.random() * 8}s`; // Définit un délai d'animation aléatoire
        mainContainer.appendChild(bubble); // Ajoute la bulle au conteneur principal
    }
}

// Démarrage des animations
document.addEventListener('DOMContentLoaded', createBubbles); // Crée les bulles lorsque le contenu est chargé

// Attend que le DOM soit complètement chargé avant d'exécuter le code
document.addEventListener('DOMContentLoaded', () => {
    // Sélectionne tous les liens de navigation ayant la classe 'nav-links'
    const navLinks = document.querySelectorAll('.nav-links a');

    // Ajoute un écouteur d'événement sur chaque lien
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            // Bloque le comportement par défaut du lien (évite le saut brutal)
            e.preventDefault();

            // Récupère l'identifiant de la section cible stocké dans l'attribut data-target
            const targetId = link.getAttribute('data-target');

            // Trouve l'élément correspondant à cet identifiant dans le DOM
            const targetSection = document.getElementById(targetId);

            // Fait défiler la page jusqu'à la section cible
            targetSection.scrollIntoView({
                behavior: 'smooth' // Applique une animation de défilement fluide
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
        'presentation-p1': 'Je m\'appelle <strong>Léo Duriez</strong>, j\'ai <strong>19 ans</strong> et je suis étudiant en première année de <strong>"Développeur Web"</strong> à <strong>Digital Campus</strong> à Paris. Avant cela, j\'ai étudié en <strong>STAPS</strong> à Amiens, passionné de <strong>sport</strong>, mais j\'ai arrêté après six mois, réalisant que le système universitaire ne me convenait pas.',
        'presentation-p2': 'J\'ai ensuite travaillé en <strong>intérim</strong> avant de découvrir le programme de <strong>développeur web</strong>. Bien que je n\'aie pas encore d\'expérience dans ce domaine, je suis attiré par les <strong>nouvelles technologies</strong>, la <strong>logique</strong>, et la <strong>création numérique</strong>.',
        'presentation-p3': 'Je suis convaincu que ma <strong>persévérance</strong> et ma <strong>curiosité</strong> me permettront de réussir dans ce parcours. Je souhaite créer un <strong>portfolio</strong> pour mettre en valeur mes compétences et projets.',
        'projects-title': 'MES PROJETS',
        'project1-title': 'PROJET N°1',
        'project2-title': 'PROJET N°2',
        'project3-title': 'PROJET N°3',
        'project1-desc': 'Courte description',
        'project2-desc': 'Courte description',
        'project3-desc': 'Courte description',
        'skill-js-desc': 'Développement Front-end',
        'skill-html-css-desc': 'Structure et style web',
        'skill-php-desc': 'Développement Back-end',
        'skill-illustrator-desc': 'Design vectoriel',
        'skill-photoshop-desc': 'Retouche photo',
        'skill-indesign-desc': 'Mise en page',
        'see-more': 'Voir plus',
        'skills-title': 'MES COMPETENCES',
        'contact-title': 'CONTACTEZ MOI',
        'form-name': 'Nom :*',
        'form-name-placeholder': 'Nom',
        'form-email': 'Email :*',
        'form-message': 'Message :*',
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
        'download-cv': 'Download my CV',
        'about-title': 'About me',
        'skill-adaptation': 'Adaptability',
        'skill-teamwork': 'Team Spirit',
        'skill-curiosity': 'Curiosity',
        'presentation-p1': 'My name is <strong>Léo Duriez</strong>, I\'m <strong>19 years old</strong> and I\'m a first-year <strong>\‘Web Developer’</strong> student at <strong>Digital Campus</strong> in Paris. Before that, I studied <strong>STAPS</strong> in Amiens, with a passion for <strong>sport</strong>, but I stopped after six months, realising that the university system didn\'t suit me.',
        'presentation-p2': 'I then worked as a <strong>temp</strong> before discovering the <strong>web developer</strong> programme. Although I don\'t yet have any experience in this field, I\'m attracted by <strong>new technologies</strong>, <strong>logic</strong>, and <strong>digital creation</strong>.',
        'presentation-p3': 'I am convinced that my <strong>perseverance</strong> and <strong>curiosity</strong> will enable me to succeed in this journey. I want to create a <strong>portfolio</strong> to showcase my skills and projects.',
        'projects-title': 'MY PROJECTS',
        'project1-title': 'PROJECT N°1',
        'project2-title': 'PROJECT N°2',
        'project3-title': 'PROJECT N°3',
        'project1-desc': 'Short description',
        'project2-desc': 'Short description',
        'project3-desc': 'Short description',
        'skill-js-desc': 'Front-end Development',
        'skill-html-css-desc': 'Web structure and styling',
        'skill-php-desc': 'Back-end Development',
        'skill-illustrator-desc': 'Vector Design',
        'skill-photoshop-desc': 'Photo editing',
        'skill-indesign-desc': 'Layout Design',
        'see-more': 'See more',
        'skills-title': 'MY SKILLS',
        'contact-title': 'CONTACT ME',
        'form-name': 'Name :',
        'form-email': 'Email :',
        'form-message': 'Message :',
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
// Fonction principale pour changer la langue de l'interface
function switchLanguage(lang) {
    // Parcourt tous les éléments ayant un attribut data-translate
    document.querySelectorAll('[data-translate]').forEach(element => {
        // Récupère la clé de traduction depuis l'attribut
        const key = element.getAttribute('data-translate');
        
        // Vérifie si une traduction existe pour cette clé
        if (translations[lang][key]) {
            // Gestion différenciée du contenu selon qu'il contient du HTML ou non
            if (element.innerHTML.includes('<strong>')) {
                // Préserve le formatage HTML
                element.innerHTML = translations[lang][key];
            } else {
                // Utilise textContent pour le texte simple (plus sécurisé)
                element.textContent = translations[lang][key];
            }
        }
    });

    // Mise à jour visuelle des boutons de langue
    document.querySelectorAll('.lang-btn').forEach(btn => {
        // Retire la classe active de tous les boutons
        btn.classList.remove('active');
    });
    // Marque le bouton de la langue sélectionnée comme actif
    document.getElementById(`${lang}-btn`).classList.add('active');

    // Persiste le choix de langue dans le localStorage
    localStorage.setItem('preferred-language', lang);
}

// Configuration des écouteurs d'événements pour le changement de langue
document.getElementById('fr-btn').addEventListener('click', () => switchLanguage('fr'));
document.getElementById('en-btn').addEventListener('click', () => switchLanguage('en'));

// Initialisation de la langue au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    // Récupère la langue préférée ou utilise le français par défaut
    const preferredLanguage = localStorage.getItem('preferred-language') || 'fr';
    // Applique la langue
    switchLanguage(preferredLanguage);
});


// Permet de faire un effet de défilement lorsque tu cliques sur le logo
// Sélectionne le lien du logo
document.querySelector('.logo a').addEventListener('click', function(e) {
    e.preventDefault(); // Empêche le comportement par défaut du lien
    
    // Fait défiler la fenêtre vers le haut
    window.scrollTo({
        top: 0, // Position tout en haut
        behavior: 'smooth' // Animation de défilement fluide
    });
});

// Gestion du thème jour/nuit   
// Sélectionne les éléments nécessaires pour le thème
const themeToggle = document.querySelector('.theme-toggle'); // Bouton de changement de thème
const htmlElement = document.documentElement; // Élément HTML racine
const logoImage = document.querySelector('.logo img'); // Image du logo

// Récupère le thème sauvegardé ou utilise 'light' par défaut
const savedTheme = localStorage.getItem('theme') || 'light';
htmlElement.setAttribute('data-theme', savedTheme); // Applique le thème sauvegardé

// Applique le bon logo si le thème sauvegardé est sombre
if (savedTheme === 'dark') {
    logoImage.src = 'assets/images/logo-Ld-portfolio_1.webp'; // Change le logo pour le thème sombre
}

// Gère le changement de thème au clic
themeToggle.addEventListener('click', () => {
    const currentTheme = htmlElement.getAttribute('data-theme'); // Récupère le thème actuel
    const newTheme = currentTheme === 'light' ? 'dark' : 'light'; // Change le thème
    
    // Change le logo selon le thème
    if (newTheme === 'dark') {
        logoImage.src = 'assets/images/logo-Ld-portfolio_1.webp'; // Logo sombre
    } else {
        logoImage.src = 'assets/images/logo_portfolio_noir.webp'; // Logo clair
    }
    
    // Applique le nouveau thème
    htmlElement.setAttribute('data-theme', newTheme); // Change le thème dans l'élément HTML
    localStorage.setItem('theme', newTheme); // Sauvegarde le thème
});

// Gestion de l'affichage des mentions légales
document.addEventListener('DOMContentLoaded', function() {
    const mentionsLegalesLink = document.querySelector('.mentions-legales-link'); // Sélectionne le lien des mentions légales
    const accordion = document.querySelector('.accordion'); // Sélectionne l'accordéon
    const panel = document.querySelector('.panel'); // Sélectionne le panneau de l'accordéon

    mentionsLegalesLink.addEventListener('click', function(event) {
        event.preventDefault(); // Empêche le comportement par défaut
        accordion.classList.toggle('active'); // Active ou désactive l'accordéon
        panel.style.display = panel.style.display === 'block' ? 'none' : 'block'; // Affiche ou cache le panneau
    });
});