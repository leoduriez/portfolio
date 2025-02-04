<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Léo Duriez</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
<header>
        <div class="logo">
            <a href="index.php">
                <img src="assets/images/logo_portfolio_noir.png" alt="Logo">
            </a>
        </div>
        <nav class="nav-container">
            
            <div class="burger-menu">
                <div class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- <ul class="nav-links">
                <li><a href="#skills">À propos de moi</a></li>
                <li><a href="#projects">Projets</a></li>
                <li><a href="#tools">Mes compétences</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul> -->
            <ul class="nav-links">
                <li><a href="#skills" data-target="skills" data-translate="nav-about">À propos de moi</a></li>
                <li><a href="#projects" data-target="projects" data-translate="nav-projects">Projets</a></li>
                <li><a href="#tools" data-target="tools" data-translate="nav-skills">Mes compétences</a></li>
                <li><a href="#contact" data-target="contact" data-translate="nav-contact">Contact</a></li>
            </ul>

            <div class="theme-toggle">
                <img src="assets/images/soleil.png" alt="Light mode" class="light-icon">
                <img src="assets/images/lune.png" alt="Dark mode" class="dark-icon">
            </div>


        </nav>
        <div class="language-switcher">
            <button id="fr-btn" class="lang-btn">
                <img src="assets/images/france.png" alt="Français">
            </button>
            <button id="en-btn" class="lang-btn">
                <img src="assets/images/royaume-uni.png" alt="English">
            </button>
        </div>
        

    </header>