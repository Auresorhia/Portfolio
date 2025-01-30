<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Projets</title>
    <link rel="stylesheet" href="./asset/css/projects.css">
</head>
<body>
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="/" aria-label="Accueil">
                    <img src="./asset/img/img-blanc/logo-noir.webp" id="logo" alt="Logo du site">
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
    <!-- Projet Principal -->
    <section class="featured-project">
        <div class="featured-image">
            <img src="img/php-icon.webp" 
                 alt="Formulaire de Connexion">
        </div>
        <div class="featured-content">
            <h2>Formulaire de Connexion avec Animation</h2>
            <p>J'ai créé un formulaire de connexion en HTML et CSS, avec une animation de validation élégante, permettant une interaction fluide et moderne pour l'utilisateur.</p>
            <div class="tech-stack">
                <img src ="img/html-icon.webp" class="tech" alt="icone du langage HTML">
                <img src ="img/css-icon.webp" class="tech" alt="icone du langage CSS">
                <img src ="img/js-icon.webp" class="tech" alt="icone du langage JavaScript">
            </div>
        </div>
    </section>

    <!-- Slider de Projets -->
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d" 
                     alt="Slider d'images Dynamique">
                <div class="slide-overlay">
                    <h3>Slider d'images Dynamique</h3>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158" 
                     alt="Formulaire de Contact">
                <div class="slide-overlay">
                    <h3>Formulaire de Contact Fonctionnel</h3>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" 
                     alt="Forum de Discussion">
                <div class="slide-overlay">
                    <h3>Forum de Discussion</h3>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b" 
                     alt="Jeu de Snake">
                <div class="slide-overlay">
                    <h3>Jeu de Snake</h3>
                </div>
            </div>
        </div>
        <button class="slider-btn prev-btn">&lt;</button>
        <button class="slider-btn next-btn">&gt;</button>
    </div>
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
    <script src="slider.js"></script>
    <script src="menu.js"></script>
</body>
</html>
