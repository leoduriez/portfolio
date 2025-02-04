<main>
    <section id="moi">
        <h1 data-translate="welcome-title">Bienvenue sur mon portfolio</h1>
        <h2>Léo Duriez</h2>
        <p data-translate="dev-role">Développeur web - 2024</p>
        <div class="avatar-container">
            <img src="assets/images/avatar_leo.png" alt="Avatar" class="avatar">
        </div>
        <a href="assets/Leo Duriez CV.pdf" class="download-cv" target="_blank" rel="noopener noreferrer">Télécharger mon CV
        </a>

        <div class="social-card">
            <button class="btn-github" onclick="window.open('https://github.com/leoduriez', '_blank')">
                <img src="assets/images/signe-github.webp" alt="GitHub">
            </button>

            <button class="btn-linkdin" onclick="window.open('https://www.linkedin.com/in/l%C3%A9o-duriez-b213462b7/', '_blank')">
                <img src="assets/images/linkedin.webp" alt="linkedin">
            </button>
        </div>

    </section>

    <section id="skills">
        <div class="section-header">
            <h2 data-translate="about-title" data-text="A propos de moi">A propos de moi</h2>
        </div>

        <div class="skills-container">
            <div class="skill-card">
                <img src="assets/images/discuter.png" alt="Capacité d'adaptation">
                <h3 data-translate="skill-adaptation">Capacité d'adaptation</h3>
            </div>
            <div class="skill-card">
                <img src="assets/images/esprit-dequipe.png" alt="esprit-dequipe">
                <h3 data-translate="skill-teamwork">Esprit d'equipe</h3>
            </div>
            <div class="skill-card">
                <img src="assets/images/oeil.png" alt="Curiosité">
                <h3 data-translate="skill-curiosity">Curiosité</h3>
            </div>
        </div>
    </section>

    <section id="presentation">
        <div class="presentation-text">
            <p data-translate="presentation-p1">Je m'appelle <strong>Léo Duriez</strong>, j'ai <strong>19 ans</strong> et je suis étudiant en première année de <strong>"Développeur Web"</strong> à <strong>Digital Campus</strong> à Paris. Avant cela, j'ai étudié en <strong>STAPS</strong> à Amiens, passionné de <strong>sport</strong>, mais j'ai arrêté après six mois, réalisant que le système universitaire ne me convenait pas.</p>
            <p data-translate="presentation-p2">J'ai ensuite travaillé en <strong>intérim</strong> avant de découvrir le programme de <strong>développeur web</strong>. Bien que je n'aie pas encore d'expérience dans ce domaine, je suis attiré par les <strong>nouvelles technologies</strong>, la <strong>logique</strong>, et la <strong>création numérique</strong>.</p>
            <p data-translate="presentation-p3">Je suis convaincu que ma <strong>persévérance</strong> et ma <strong>curiosité</strong> me permettront de réussir dans ce parcours. Je souhaite créer un <strong>portfolio</strong> pour mettre en valeur mes compétences et projets.</p>
        </div>
    </section>

    <section id="projects">
        <h2 data-translate="projects-title" data-text="MES PROJETS">MES PROJETS</h2>
        <div class="projects-grid">
            <article class="project-card" onclick="window.location.href='./page_projet/page_projet.php'" style="cursor: pointer;">
                <h3 data-translate="project1-title">PROJET N°1</h3>
                <img src="./assets/images/e-commerce.png" alt="e-commerce">
                <h5 data-translate="project1-desc">Courte déscription</h5>
            </article>
            <article class="project-card" onclick="window.location.href='./page_projet/page_projet.php'" style="cursor: pointer;">
                <h3 data-translate="project2-title">PROJET N°2</h3>
                <img src="assets/images/site-web.jpg" alt="site-web">
                <h5 data-translate="project2-desc">Courte déscription</h5>
            </article>
            <article class="project-card" onclick="window.location.href='./page_projet/page_projet.php'" style="cursor: pointer;">
                <h3 data-translate="project3-title">PROJET N°3</h3>
                <img src="assets/images/projet-jeu.png" alt="jeu">
                <h5 data-translate="project3-desc">Courte déscription</h5>
            </article>
        </div>
    </section>

    <section id="tools">
        <h2 data-translate="skills-title" data-text="MES COMPETENCES">MES COMPETENCES</h2>
        <div class="tools-grid">
            <div class="card">
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_js.png" alt="JavaScript Logo">
                </div>
                <span data-translate="skill-js">JavaScript</span>
                <p class="job" data-translate="skill-js-desc">Développement Front-end</p>
            </div>

            <div class="card">
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_html_css.webp" alt="HTML-CSS Logo">
                </div>
                <span>HTML-CSS</span>
                <p class="job">Structure et style web</p>
            </div>

            <div class="card">
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_php.png" alt="PHP Logo">
                </div>
                <span>PHP</span>
                <p class="job">Développement Back-end</p>
            </div>

            <div class="card">
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_illustrator.png" alt="Illustrator Logo">
                </div>
                <span>Illustrator</span>
                <p class="job">Design vectoriel</p>
            </div>

            <div class="card">
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_Photoshop.png" alt="Photoshop Logo">
                </div>
                <span>Photoshop</span>
                <p class="job">Retouche photo</p>
            </div>

            <div class="card">
                <div class="card-border-top"></div>
                <div class="img">
                    <img src="assets/images/logo_indesign.avif" alt="InDesign Logo">
                </div>
                <span>InDesign</span>
                <p class="job">Mise en page</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2 data-translate="contact-title" data-text="CONTACTEZ MOI">CONTACTEZ MOI</h2>
        <form class="contact-form">
            <div class="input-container">
                <label for="name" data-translate="form-name">Nom :</label>
                <input type="text" id="name" name="name" placeholder="Nom" required>
            </div>
            <div class="input-container">
                <label for="email" data-translate="form-email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-container">
                <label for="message" data-translate="form-message">Message :</label>
                <textarea id="message" name="message" placeholder="Message" required></textarea>
            </div>
            <button type="submit" data-translate="form-submit">Envoyer</button>
        </form>



    </section>
</main>