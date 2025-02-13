<!DOCTYPE html>
<html lang="fr"> <!-- Déclare le document comme étant en HTML5 et spécifie la langue comme français -->
<head>
    <meta charset="UTF-8"> <!-- Définit l'encodage des caractères à UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Assure que le site est responsive sur les appareils mobiles -->
    <title>Portfolio - Léo Duriez</title> <!-- Titre de la page affiché dans l'onglet du navigateur -->
    <link rel="stylesheet" href="assets/styles/style.css"> <!-- Lien vers la feuille de style CSS -->
</head>
<body>
<header>
    <div class="logo"> <!-- Conteneur pour le logo -->
        <a href="index.php"> <!-- Lien vers la page d'accueil -->
            <img src="assets/images/logo_portfolio_noir.webp" alt="Logo"> <!-- Image du logo -->
        </a>
    </div>
    <nav class="nav-container"> <!-- Conteneur pour la navigation -->
        
        <div class="burger-menu"> <!-- Menu burger pour les appareils mobiles -->
            <div class="burger-icon"> <!-- Icône du menu burger -->
                <span></span> <!-- Trois barres pour l'icône burger -->
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- <ul class="nav-links"> -->
        <!-- Liste de navigation commentée -->
        <ul class="nav-links"> <!-- Liste des liens de navigation -->
            <li><a href="#skills" data-target="skills" data-translate="nav-about">À propos de moi</a></li> <!-- Lien vers la section "À propos de moi" -->
            <li><a href="#projects" data-target="projects" data-translate="nav-projects">Projets</a></li> <!-- Lien vers la section "Projets" -->
            <li><a href="#tools" data-target="tools" data-translate="nav-skills">Mes compétences</a></li> <!-- Lien vers la section "Mes compétences" -->
            <li><a href="#contact" data-target="contact" data-translate="nav-contact">Contact</a></li> <!-- Lien vers la section "Contact" -->
        </ul>

        <div class="theme-toggle"> <!-- Conteneur pour le changement de thème -->
            <img src="assets/images/soleil.webp" alt="Light mode" class="light-icon"> <!-- Icône pour le mode clair -->
            <img src="assets/images/lune.webp" alt="Dark mode" class="dark-icon"> <!-- Icône pour le mode sombre -->
        </div>

    </nav>
    <div class="language-switcher"> <!-- Conteneur pour le changement de langue -->
        <button id="fr-btn" class="lang-btn"> <!-- Bouton pour changer en français -->
            <img src="assets/images/france.webp" alt="Français"> <!-- Icône pour le français -->
        </button>
        <button id="en-btn" class="lang-btn"> <!-- Bouton pour changer en anglais -->
            <img src="assets/images/royaume-uni.webp" alt="English"> <!-- Icône pour l'anglais -->
        </button>
    </div>
</header>