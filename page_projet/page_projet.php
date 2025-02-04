<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets | Portfolio</title>
    <link rel="stylesheet" href="./css/page_projet.css">
    <a href="page_projet/page_projet.php"></a>
</head>

<body>
    <header>
        <div class="logo">
                <img src="./img/logo_portfolio_noir.png" alt="Logo">
        </div>

        <nav class="nav-container">
            <button class="back-button" onclick="window.location.href='../index.php'">
                <span class="back-arrow">←</span> Retour
            </button>

            <div class="theme-toggle">
                <img src="./img/soleil.png" alt="Light mode" class="light-icon">
                <img src="./img/lune.png" alt="Dark mode" class="dark-icon">
            </div>
        </nav>
        <div class="language-switcher">
            <button id="fr-btn" class="lang-btn">
                <img src="./img/france.png" alt="Français">
            </button>
            <button id="en-btn" class="lang-btn">
                <img src="./img/royaume-uni.png" alt="English">
            </button>
        </div>
    </header>

    <h1 class="projects-title">Mes Réalisations</h1>

    <main class="projects-containers">


        <div class="projects-grids">
            <article class="project-card">
                <div class="project-image">
                    <img src="./img/e-commerce.png" alt="e-commerce">
                </div>
                <div class="project-content">
                    <h2>Site E-commerce</h2>
                    <p class="project-description">Création d'une boutique en ligne responsive avec système de panier et paiement sécurisé.</p>
                    <div class="project-tech">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="btn-demo">Voir le site</a>
                        <a href="#" class="btn-github">GitHub</a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <img src="./img/site-web.jpg" alt="site web">
                </div>
                <div class="project-content">
                    <h2>Application Web</h2>
                    <p class="project-description">Dashboard administratif pour la gestion de données utilisateurs.</p>
                    <div class="project-tech">
                        <span>React</span>
                        <span>Node.js</span>
                        <span>MongoDB</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="btn-demo">Voir le site</a>
                        <a href="#" class="btn-github">GitHub</a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <img src="./img/projet-jeu.png" alt="jeux video">
                </div>
                <div class="project-content">
                    <h2>Jeux Vidéo</h2>
                    <p class="project-description">Développement d'un jeu vidéo interactif avec animations et niveaux progressifs.</p>
                    <div class="project-tech">
                        <span>HTML</span>
                        <span>SCSS</span>
                        <span>JavaScript</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="btn-demo">Voir le site</a>
                        <a href="#" class="btn-github">GitHub</a>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <footer>
        <p class="copyright">&copy; 2025 Duriez Léo - <a class="mentions-legales-link">Mentions légales</a></p>
        <div class="mentions-legales-container">
            <div class="accordion">
                <div class="panel">
                    <h2>Mentions légales</h2>

                    <section>
                        <h3>Edition du site</h3>
                        <p>
                            Le présent site, accessible à l’URL www.duriez-leo.fr (le « Site »), est édité par :
                        </p>
                        <p>
                            Léo Duriez, né le 25/06/2005,
                        </p>
                    </section>

                    <section>
                        <h3>Hébergement</h3>
                        <p>
                            Le Site est hébergé par la société O2Switch, situé 222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand, (contact téléphonique ou email : (+33) 4 44 44 60 40).
                        </p>
                    </section>

                    <section>
                        <h3>Directeur de publication</h3>
                        <p>
                            Le Directeur de la publication du Site est Léo Duriez.
                        </p>
                    </section>

                    <section>
                        <h3>Me contacter</h3>
                        <p>
                            Par téléphone : +33 6 22 50 96 55
                        </p>
                        <p>
                            Par email : <a href="mailto:leo.duriezj@gmail.com">leo.duriezj@gmail.com</a>
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js_projet/page_projet.js"></script>
</body>

</html>