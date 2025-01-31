<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos - Aurélie</title>
    <link rel="stylesheet" href="asset/css/about.css">
</head>
<body>
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="/" aria-label="Accueil">
                    <img src="./asset/img/img-noir/logo-noir.webp" id="logo" alt="Logo du site">
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
        <section class="introduction" aria-labelledby="titre-introduction">
            <div class="intro">
                <div class="photo-nom">
                    <img src="img-blanc/photo.webp" id="photo-profile" alt="photo de profile de Aurélie"height="530">
                    <h1 id="titre-introduction">Aurélie</h1>
                </div>
                <div id="presentation">
                    <h2><strong>Développeuse Web</strong> en premiere année de bachelor
                    <br>Passionnée par la création de sites web, je me forme au développement front-end et back-office<br>
                    Bien que je n'aie pas encore d'expérience professionnelle, je suis motivée à mettre mes compétences en pratique et à contribuer à des projets concrets</h2>
                </div> 
            </div>
        </section>

        <section class="services" aria-labelledby="titre-services">
            <div class="container">
                <h3 id="titre-services">Ce que je peux apporter...</h3>
                <h4>Mes compétences au services de vos projets</h4>

                <div class="service">
                    <div class="container-service">
                        <img src="img-noir/html-black.webp" id="logo-html" alt="html">
                        <div class="container">
                            <h5>FRONT-END</h5>
                            <hr>
                            <h6>Je propose mon expertise en front-end pour concevoir des interfaces web modernes, responsives et adaptées aux besoins de vos projets</h6>
                        </div>
                    </div>
                </div>

                <div class="service">
                    <div class="container-service">
                        <img src="img-noir/html-black.webp" id="logo-html" alt="html">
                        <div class="container">
                            <h5>BACK-END</h5>
                            <hr>
                            <h6>Je propose mon expertise en back-office pour développer des fonctionnalités performantes, sécurisées e adaptées aix besoins de vos projets.</h6>
                        </div>
                    </div>
                </div>

                <div class="service">
                    <div class="container-service">
                        <img src="img-noir/html-black.webp" id="logo-html" alt="html">
                        <div class="container">
                            <h5>DESIGN</h5>
                            <hr>
                            <h6>Je dispose de bases en design, me permettant de contribuer à la création d'interfaces smples et attrayantes, tou en m'adaptant aux besoins des projets.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include "inc/footer.inc.php";
    ?>
</body>
</html>