<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="projects-page-title">Mes Projets | Portfolio</title>
    <link rel="stylesheet" href="./css/page_projet.css">
    <a href="page_projet/page_projet.php"></a>
</head>

<body>
    <header>
        <div class="logo">
                <img src="./img/logo_portfolio_noir.webp" alt="Logo">
        </div>

        <nav class="nav-container">
            <button class="back-button" onclick="window.location.href='../index.php'">
                <span class="back-arrow" data-translate="back-button">Retour</span>
            </button>

            <div class="theme-toggle">
                <img src="./img/soleil.webp" alt="Light mode" class="light-icon">
                <img src="./img/lune.webp" alt="Dark mode" class="dark-icon">
            </div>
        </nav>
        <div class="language-switcher">
            <button id="fr-btn" class="lang-btn">
                <img src="./img/france.webp" alt="Français">
            </button>
            <button id="en-btn" class="lang-btn">
                <img src="./img/royaume-uni.webp" alt="English">
            </button>
        </div>
    </header>

    <h1 class="projects-title" data-translate="my-projects">Mes Réalisations</h1>

    <main class="projects-containers">


        <div class="projects-grids">
            <article class="project-card">
                <div class="project-image">
                    <img src="./img/e-commerce.webp" alt="e-commerce">
                </div>
                <div class="project-content">
                    <h2 data-translate="ecommerce-title">Site E-commerce</h2>
                    <p class="project-description" data-translate="ecommerce-desc">Création d'une boutique en ligne responsive avec système de panier et paiement sécurisé.</p>
                    <div class="project-tech">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="btn-demo" data-translate="view-site">Voir le site</a>
                        <a href="#" class="btn-github">GitHub</a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <img src="./img/site-web.webp" alt="site web">
                </div>
                <div class="project-content">
                    <h2 data-translate="webapp-title">Application Web</h2>
                    <p class="project-description" data-translate="webapp-desc">Dashboard administratif pour la gestion de données utilisateurs.</p>
                    <div class="project-tech">
                        <span>React</span>
                        <span>Node.js</span>
                        <span>MongoDB</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="btn-demo" data-translate="view-site">Voir le site</a>
                        <a href="#" class="btn-github">GitHub</a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <img src="./img/projet-jeu.webp" alt="jeux video">
                </div>
                <div class="project-content">
                    <h2 data-translate="game-title">Jeux Vidéo</h2>
                    <p class="project-description" data-translate="game-desc">Développement d'un jeu vidéo interactif avec animations et niveaux progressifs.</p>
                    <div class="project-tech">
                        <span>HTML</span>
                        <span>SCSS</span>
                        <span>JavaScript</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="btn-demo" data-translate="view-site">Voir le site</a>
                        <a href="#" class="btn-github">GitHub</a>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <footer>
        <p class="copyright">&copy; 2025 Duriez Léo - <a class="mentions-legales-link" data-translate="rights-reserved">Mentions légales</a></p>
        <div class="mentions-legales-container">
            <div class="accordion">
                <div class="panel">
                    <h2 data-translate="legal-title">Mentions légales</h2>

                    <section>
                        <h3 data-translate="legal-edition">Edition du site</h3>
                        <p data-translate="legal-website">
                            Le présent site, accessible à l’URL www.duriez-leo.fr (le « Site »), est édité par :
                        </p>
                        <p data-translate="legal-identity">>
                            Léo Duriez, né le 25/06/2005,
                        </p>
                    </section>

                    <section>
                        <h3 data-translate="legal-hosting">Hébergement</h3>
                        <p data-translate="legal-hosting-info">
                            Le Site est hébergé par la société O2Switch, situé 222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand, (contact téléphonique ou email : (+33) 4 44 44 60 40).
                        </p>
                    </section>

                    <section>
                        <h3 data-translate="legal-director">Directeur de publication</h3>
                        <p data-translate="legal-director-info">
                            Le Directeur de la publication du Site est Léo Duriez.
                        </p>
                    </section>

                    <section>
                        <h3 data-translate="legal-contact">Me contacter</h3>
                        <p data-translate="legal-phone">
                            Par téléphone : +33 6 22 50 96 55
                        </p>
                        <p data-translate="legal-email">
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