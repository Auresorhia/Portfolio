<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio d'Aurélie Lao, développeuse web à la recherche d'une alternance de 2 ans. Découvrez son parcours et ses projets."> <!--Description pour amélioré la visibilité de la page web-->
    <title>Portfolio - Aurélie Lao</title>
    <link rel="stylesheet" href="accueil.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="/" aria-label="Accueil">
                    <img src="./img-blanc/logo-noir.webp" id="logo" alt="Logo du site">
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="accueil.php" class="btn">Accueil</a></li>
                <li><a href="about.php" class="btn">À propos</a></li>
                <li><a href="projects.php" class="btn">Projets</a></li>
                <li><a href="contact.php" class="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Section Introduction -->
        <section aria-labelledby="intro-title">
            <div class="intro">
                <div class="bienvenu">
                    <h1 id="intro-title">&lt;<span>/</span>Aurélie&gt;</h1>
                    <div id="lao">
                        <h2>Lao</h2>
                    </div>
                    <h3>Développeuse web</h3>
                    <h4>Cherche une alternance</h4>
                </div>
                <div class="photo-intro">
                        <img src="img-blanc/photo.webp" id="photo-profile" alt="photo de profile de Aurélie" style="width: 600px">
                    <div class="intro-btn">
                            <p>
                                Bonjour, je m'appelle Aurélie Lao. Je suis en première année de développement web à Digital Campus. Je cherche une alternance pour une durée de 2 ans.
                            </p>
                        <button>Contactez-moi</button>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section aria-labelledby="projects-title">
            <div class="projets">
                <h2>Mes Projets</h2>
                <div class="projets-container">
                    <div class="projet">
                        <img src="images/formulaire.jpg" alt="Formulaire">
                        <p>Formulaire</p>
                    </div>
                    <div class="projet">
                        <img src="images/slider.jpg" alt="Slider d'images">
                        <p>Slider d'images</p>
                    </div>
                    <div class="projet">
                        <img src="images/contact.jpg" alt="Formulaire de Contact">
                        <p>Formulaire de Contact</p>
                    </div>
                    <div class="projet">
                        <img src="images/forum.jpg" alt="Forum">
                        <p>Forum</p>
                    </div>
                    <div class="projet">
                        <img src="images/snake.jpg" alt="Jeu de Snake">
                        <p>Jeu de Snake</p>
                    </div>
                </div>
            </div>            
        </section>

        <hr>

        <section>
            <div class="competences">
                <h2>Mes compétences</h2>
                <div class="competences-container">
                <div id="html">
                        <img src="./img-blanc/html-icon.webp" alt="Logo HTML" >
                        <p>HTML</p>
                    </div>
                    <div id="css">
                        <img src="./img-blanc/css-icon.webp" alt="Logo CSS">
                        <p>CSS</p>
                    </div>
                    <div id="wordpress">
                        <img src="./img-blanc/wordPress-icon.webp" alt="Logo Wordpress">
                        <p>WordPress</p>
                    </div>
                    <div id="php">
                        <img src="./img-blanc/php-icon.webp" alt="Logo Php">
                        <p>PHP</p>
                    </div>
                    <div id="javascript">
                        <img src="./img-blanc/javaScript-icon.webp" alt="Logo JavaScript">
                        <p>JavaScript</p>
                    </div>
                    <div id="illustrator">
                        <img src="./img-blanc/illustrator-icon.webp" alt="Logo Illustrator">
                        <p>Illustrator</p>
                    </div>
                    <div id="photoshop">
                        <img src="./img-blanc/photoShop-icon.webp" alt="Logo Photoshop">
                        <p>PhotoShop</p>
                    </div>
                    <div id="indesign">
                        <img src="./img-blanc/inDesign-icon.webp" alt="Logo InDesign">
                        <p>InDesign</p>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <nav>
                <ul>
                    <li><a href="/about">À propos</a></li>
                    <li><a href="/privacy-policy">Politique de confidentialité</a></li>
                    <li><a href="/terms">Conditions d'utilisation</a></li>
                </ul>
            </nav>
    
            <!-- Information de mes contact -->
            <section class="contact-info">
                <p>Contactez-moi : <a href="mailto:@gmail.com">laoaurelie404@gmail.com</a></p>
                <p>Téléphone : 06 13 02 54 38</p>
            </section>
    
            <!--les réseaux sociaux -->
            <section class="social-media">
                <a href="https://github.com/AureSorhia" target="_blank">Github</a>
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </section>
    
            <!-- Informations de copyright -->
            <section class="copyright">
                <p>&copy; 2025 aurelie-lao.com. Tous droits réservés.</p>
            </section>
        </div>
    </footer>
</body>
</html>
