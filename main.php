<main> <!-- Conteneur principal de la page, qui contient toutes les sections importantes -->
    <section id="moi"> <!-- Section qui présente l'utilisateur -->
        <h1 data-translate="welcome-title">Bienvenue sur mon portfolio</h1> <!-- Titre principal avec traduction -->
        <h2>Léo Duriez</h2> <!-- Sous-titre avec le nom de l'utilisateur -->
        <p data-translate="dev-role">Développeur web - 2024</p> <!-- Description du rôle avec traduction -->
        <div class="avatar-container"> <!-- Conteneur pour l'avatar -->
            <img src="assets/images/avatar_leo.webp" alt="Avatar" class="avatar"> <!-- Image de l'avatar -->
        </div>
        <a href="assets/Leo Duriez CV.pdf" class="download-cv" data-translate="download-cv" target="_blank" rel="noopener noreferrer">Télécharger mon CV</a> <!-- Lien pour télécharger le CV -->

        <div class="social-card"> <!-- Conteneur pour les boutons de réseaux sociaux -->
            <button class="btn-github" onclick="window.open('https://github.com/leoduriez', '_blank')"> <!-- Bouton pour GitHub -->
                <img src="assets/images/signe-github.webp" alt="GitHub"> <!-- Icône de GitHub -->
            </button>
            <button class="btn-linkdin" onclick="window.open('https://www.linkedin.com/in/l%C3%A9o-duriez-b213462b7/', '_blank')"> <!-- Bouton pour LinkedIn -->
                <img src="assets/images/linkedin.webp" alt="linkedin"> <!-- Icône de LinkedIn -->
            </button>
        </div>
    </section>

    <section id="skills"> <!-- Section qui présente les compétences -->
        <div class="section-header">
            <h2 data-translate="about-title" data-text="A propos de moi">A propos de moi</h2> <!-- Titre de la section avec traduction -->
        </div>

        <div class="skills-container"> <!-- Conteneur pour les cartes de compétences -->
            <div class="skill-card"> <!-- Carte pour la compétence d'adaptation -->
                <img src="assets/images/discuter.webp" alt="Capacité d'adaptation"> <!-- Icône pour la compétence -->
                <h3 data-translate="skill-adaptation">Capacité d'adaptation</h3> <!-- Titre de la compétence avec traduction -->
            </div>
            <div class="skill-card"> <!-- Carte pour l'esprit d'équipe -->
                <img src="assets/images/esprit-dequipe.webp" alt="esprit-dequipe"> <!-- Icône pour l'esprit d'équipe -->
                <h3 data-translate="skill-teamwork">Esprit d'équipe</h3> <!-- Titre de la compétence avec traduction -->
            </div>
            <div class="skill-card"> <!-- Carte pour la curiosité -->
                <img src="assets/images/oeil.webp" alt="Curiosité"> <!-- Icône pour la curiosité -->
                <h3 data-translate="skill-curiosity">Curiosité</h3> <!-- Titre de la compétence avec traduction -->
            </div>
        </div>
    </section>

    <section id="presentation"> <!-- Section de présentation personnelle -->
        <div class="presentation-text"> <!-- Conteneur pour le texte de présentation -->
            <p data-translate="presentation-p1">Je m'appelle <strong>Léo Duriez</strong>, j'ai <strong>19 ans</strong> et je suis étudiant en première année de <strong>"Développeur Web"</strong> à <strong>Digital Campus</strong> à Paris. Avant cela, j'ai étudié en <strong>STAPS</strong> à Amiens, passionné de <strong>sport</strong>, mais j'ai arrêté après six mois, réalisant que le système universitaire ne me convenait pas.</p>
            <p data-translate="presentation-p2">J'ai ensuite travaillé en <strong>intérim</strong> avant de découvrir le programme de <strong>développeur web</strong>. Bien que je n'aie pas encore d'expérience dans ce domaine, je suis attiré par les <strong>nouvelles technologies</strong>, la <strong>logique</strong>, et la <strong>création numérique</strong>.</p>
            <p data-translate="presentation-p3">Je suis convaincu que ma <strong>persévérance</strong> et ma <strong>curiosité</strong> me permettront de réussir dans ce parcours. Je souhaite créer un <strong>portfolio</strong> pour mettre en valeur mes compétences et projets.</p>
        </div>
    </section>

    <section id="projects"> <!-- Section qui présente les projets -->
        <h2 data-translate="projects-title" data-text="MES PROJETS">MES PROJETS</h2> <!-- Titre de la section avec traduction -->
        <div class="projects-grid"> <!-- Conteneur pour la grille de projets -->
            <article class="project-card" onclick="window.location.href='./page_projet/page_projet.php'" style="cursor: pointer;"> <!-- Carte pour le projet 1 -->
                <h3 data-translate="project1-title">PROJET N°1</h3> <!-- Titre du projet avec traduction -->
                <img src="./assets/images/e-commerce.webp" alt="e-commerce"> <!-- Image du projet -->
                <h5 data-translate="project1-desc">Courte description</h5> <!-- Description du projet avec traduction -->
            </article>
            <article class="project-card" onclick="window.location.href='./page_projet/page_projet.php'" style="cursor: pointer;"> <!-- Carte pour le projet 2 -->
                <h3 data-translate="project2-title">PROJET N°2</h3>
                <img src="assets/images/site-web.webp" alt="site-web">
                <h5 data-translate="project2-desc">Courte description</h5>
            </article>
            <article class="project-card" onclick="window.location.href='./page_projet/page_projet.php'" style="cursor: pointer;"> <!-- Carte pour le projet 3 -->
                <h3 data-translate="project3-title">PROJET N°3</h3>
                <img src="assets/images/projet-jeu.webp" alt="jeu">
                <h5 data-translate="project3-desc">Courte description</h5>
            </article>
        </div>
    </section>

    <section id="tools"> <!-- Section qui présente les outils et compétences techniques -->
        <h2 data-translate="skills-title" data-text="MES COMPETENCES">MES COMPETENCES</h2> <!-- Titre de la section avec traduction -->
        <div class="tools-grid"> <!-- Conteneur pour la grille des outils -->
            <div class="card"> <!-- Carte pour JavaScript -->
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_js.webp" alt="JavaScript Logo"> <!-- Logo de JavaScript -->
                </div>
                <span data-translate="skill-js">JavaScript</span> <!-- Nom de la compétence avec traduction -->
                <p class="job" data-translate="skill-js-desc">Développement Front-end</p> <!-- Description de la compétence avec traduction -->
            </div>

            <div class="card"> <!-- Carte pour HTML-CSS -->
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_html_css.webp" alt="HTML-CSS Logo"> <!-- Logo HTML-CSS -->
                </div>
                <span>HTML-CSS</span> <!-- Nom de la compétence -->
                <p class="job" data-translate="skill-html-css-desc">Structure et style web</p> <!-- Description de la compétence avec traduction -->
            </div>

            <div class="card"> <!-- Carte pour PHP -->
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_php.webp" alt="PHP Logo"> <!-- Logo de PHP -->
                </div>
                <span>PHP</span> <!-- Nom de la compétence -->
                <p class="job" data-translate="skill-php-desc">Développement Back-end</p> <!-- Description de la compétence avec traduction -->
            </div>

            <div class="card"> <!-- Carte pour Illustrator -->
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_illustrator.webp" alt="Illustrator Logo"> <!-- Logo d'Illustrator -->
                </div>
                <span>Illustrator</span> <!-- Nom de la compétence -->
                <p class="job" data-translate="skill-illustrator-desc">Design vectoriel</p> <!-- Description de la compétence avec traduction -->
            </div>

            <div class="card"> <!-- Carte pour Photoshop -->
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_Photoshop.webp" alt="Photoshop Logo"> <!-- Logo de Photoshop -->
                </div>
                <span>Photoshop</span> <!-- Nom de la compétence -->
                <p class="job" data-translate="skill-photoshop-desc">Retouche photo</p> <!-- Description de la compétence avec traduction -->
            </div>

            <div class="card"> <!-- Carte pour InDesign -->
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_indesign.webp" alt="InDesign Logo"> <!-- Logo d'InDesign -->
                </div>
                <span>InDesign</span> <!-- Nom de la compétence -->
                <p class="job" data-translate="skill-indesign-desc">Mise en page</p> <!-- Description de la compétence avec traduction -->
            </div>
        </div>
    </section>

    <section id="contact"> <!-- Section de contact -->
        <h2 data-translate="contact-title" data-text="CONTACTEZ MOI">CONTACTEZ MOI</h2> <!-- Titre de la section avec traduction -->
        <!-- Message de confirmation -->
        <?php if (isset($_GET['success']) && $_GET['success'] == "true"): ?>
            <p style="color: green;">✅ Votre message a bien été envoyé !</p> <!-- Message de succès -->
        <?php elseif (isset($_GET['error'])): ?>
            <p style="color: red;">❌ <?= htmlspecialchars($_GET['error']) ?></p> <!-- Message d'erreur -->
        <?php endif; ?>
        <form action="back/process/process_message.php" method="POST" class="contact-form"> <!-- Formulaire de contact -->
            <div class="input-container">
                <label for="name" data-translate="form-name">Nom :</label> <!-- Étiquette pour le champ nom -->
                <input type="text" id="name" name="name" placeholder="" required> <!-- Champ de saisie pour le nom -->
            </div>
            <div class="input-container">
                <label for="email" data-translate="form-email">Email :</label> <!-- Étiquette pour le champ email -->
                <input type="email" id="email" name="email" placeholder="" required> <!-- Champ de saisie pour l'email -->
            </div>
            <div class="input-container">
                <label for="message" data-translate="form-message">Message :</label> <!-- Étiquette pour le champ message -->
                <textarea id="message" name="message" placeholder="" required></textarea> <!-- Champ de saisie pour le message -->
            </div>
            <button type="submit" data-translate="form-submit">Envoyer</button> <!-- Bouton d'envoi du formulaire -->
        </form>
    </section>
</main>