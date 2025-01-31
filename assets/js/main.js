// Attend que le DOM soit complètement chargé avant d'exécuter le code
document.addEventListener('DOMContentLoaded', () => {
    // Gestion du défilement fluide pour les liens d'ancrage
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        // Ajoute un écouteur de clic sur chaque lien
        anchor.addEventListener('click', function (e) {
            e.preventDefault(); // Empêche le comportement par défaut du lien
            
            // Récupère la cible du lien
            const target = document.querySelector(this.getAttribute('href'));
            
            // Défilement fluide vers la cible
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });

    
    // Gestion du formulaire de contact
    const form = document.querySelector('.contact-form');
    form.addEventListener('submit', (e) => {
        e.preventDefault(); // Empêche l'envoi traditionnel du formulaire
        
        // Réinitialise le formulaire après soumission
        form.reset();
    });

    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1 // Déclenche l'animation quand 10% de l'élément est visible
    };

    // Crée l'observateur d'intersection
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // Ajoute la classe 'visible' quand l'élément entre dans la vue
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe toutes les cartes de projets et de compétences
    document.querySelectorAll('.project-card, .skill-card').forEach(card => {
        observer.observe(card);
    });

    // Gestion du menu burger pour mobile
    const burgerMenu = document.querySelector('.burger-menu');
    const navLinks = document.querySelector('.nav-links');
    const body = document.body;

    // Gestion du clic sur le menu burger
    burgerMenu.addEventListener('click', () => {
        // Bascule les classes actives
        burgerMenu.classList.toggle('active');
        navLinks.classList.toggle('active');
        body.classList.toggle('menu-open');
    });

    // Ferme le menu quand un lien est cliqué
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            // Retire les classes actives
            burgerMenu.classList.remove('active');
            navLinks.classList.remove('active');
            body.classList.remove('menu-open');
        });
    });
});

// Création des bulles flottantes
function createBubbles() {
    const colors = ['#D4AFFF', '#6b64f3', '#ffffff'];
    const mainContainer = document.createElement('div');
    mainContainer.className = 'background-animation';
    document.body.appendChild(mainContainer);

    // Augmentation du nombre de bulles à 40
    for (let i = 0; i < 40; i++) {
        const bubble = document.createElement('div');
        bubble.className = 'floating-bubble';
        
        // Propriétés aléatoires pour chaque bulle
        bubble.style.left = `${Math.random() * 100}%`;
        bubble.style.width = `${Math.random() * 100 + 30}px`; // Tailles plus variées
        bubble.style.height = bubble.style.width;
        bubble.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        bubble.style.animationDuration = `${Math.random() * 15 + 5}s`; // Durées plus variées
        bubble.style.animationDelay = `${Math.random() * 8}s`; // Délais plus variés
        
        mainContainer.appendChild(bubble);
    }
}

// Démarrage de l'animation
document.addEventListener('DOMContentLoaded', createBubbles);


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

// Fonction de changement de langue
function switchLanguage(lang) {
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });
    
    // Mise à jour des boutons actifs
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById(`${lang}-btn`).classList.add('active');
    
    // Sauvegarde de la préférence
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


//gestion du thème jour nuit   
const themeToggle = document.querySelector('.theme-toggle');
const htmlElement = document.documentElement;
const logoImage = document.querySelector('.logo img');


const savedTheme = localStorage.getItem('theme') || 'light';
htmlElement.setAttribute('data-theme', savedTheme);


if (savedTheme === 'dark') {
    logoImage.src = 'assets/images/logo-Ld-portfolio_1.webp';
}

themeToggle.addEventListener('click', () => {
    const currentTheme = htmlElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    
    // Switch du logo
    if (newTheme === 'dark') {
        logoImage.src = 'assets/images/logo-Ld-portfolio_1.webp';
    } else {
        logoImage.src = 'assets/images/logo portfolio noir.png';
    }
    
    htmlElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
});

