<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="À propos d'Aurélie - Développeuse Web en première année de bachelor">
    <title>À propos - Aurélie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar" aria-label="Navigation principale">
            <div class="logo">
                <a href="/" aria-label="Retour à l'accueil">
                    <img src="./img-blanc/logo-noir.webp" id="logo" alt="Logo du site" width="400" height="400">
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="accueil.php" class="btn">Accueil</a></li>
                <li><a href="about.php" class="btn" aria-current="page">À propos</a></li>
                <li><a href="projects.php" class="btn">Projets</a></li>
                <li><a href="contact.php" class="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="introduction" aria-labelledby="titre-introduction">
            <div class="intro">
                <div class="photo-nom">
                    <img src="img-blanc/photo.webp" id="photo-profile" alt="Portrait d'Aurélie" width="200" height="200">
                    <h1 id="titre-introduction">Aurélie</h1>
                </div>
                <div class="presentation">
                    <h2>
                        <strong>Développeuse <span>Web</span></strong> en première année de bachelor
                    <p>Passionnée par la création de sites web, je me forme au développement front-end et back-office.</p>
                    <p>Bien que je n'aie pas encore d'expérience professionnelle, je suis motivée à mettre mes compétences en pratique et à contribuer à des projets concrets.</p>
                    </h2>
              </div> 
            </div>
        </section>

        <section class="services" aria-labelledby="titre-services">
            <div class="container-container">
                <h2 id="titre-services">Ce que je peux apporter...</h2>
                <p class="subtitle">Mes compétences au service de vos projets</p>

                <div class="service">
                    <article class="container-service">
                        <img src="img-noir/html-black.webp" alt="Icône HTML" width="100" height="100">
                        <div class="container">
                            <h3>FRONT-END</h3>
                            <hr>
                            <p>Je propose mon expertise en front-end pour concevoir des interfaces web modernes, responsives et adaptées aux besoins de vos projets.</p>
                        </div>
                    </article>
                </div>

                <div class="service">
                    <article class="container-service">
                        <img src="img-noir/html-black.webp" alt="Icône back-end" width="100" height="100">
                        <div class="container">
                            <h3>BACK-END</h3>
                            <hr>
                            <p>Je propose mon expertise en back-office pour développer des fonctionnalités performantes, sécurisées et adaptées aux besoins de vos projets.</p>
                        </div>
                    </article>
                </div>

                <div class="service">
                    <article class="container-service">
                        <img src="img-noir/html-black.webp" alt="Icône design" width="100" height="100">
                        <div class="container">
                            <h3>DESIGN</h3>
                            <hr>
                            <p>Je dispose de bases en design, me permettant de contribuer à la création d'interfaces simples et attrayantes, tout en m'adaptant aux besoins des projets.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <nav aria-label="Navigation secondaire">
                <ul>
                    <li><a href="/about">À propos</a></li>
                    <li><a href="/privacy-policy">Politique de confidentialité</a></li>
                    <li><a href="/terms">Conditions d'utilisation</a></li>
                </ul>
            </nav>
    
            <section class="contact-info">
                <h2>Informations de contact</h2>
                <p>Email : <a href="mailto:laoaurelie404@gmail.com">laoaurelie404@gmail.com</a></p>
                <p>Téléphone : <a href="tel:+33613025438">06 13 02 54 38</a></p>
            </section>
    
            <section class="social-media">
                <h2>Réseaux sociaux</h2>
                <a href="https://github.com/AureSorhia" target="_blank" rel="noopener noreferrer">Github</a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">Instagram</a>
            </section>
    
            <section class="copyright">
                <p>&copy; 2025 aurelie-lao.com. Tous droits réservés.</p>
            </section>
        </div>
    </footer>
</body>
</html>