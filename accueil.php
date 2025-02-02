<?php include "inc/head.inc.php";?>
    <title>Portfolio - Aurélie Lao</title>
    <link rel="stylesheet" href="asset/css/accueil.css">
</head>
<body>
    <header>
    <?php include "inc/nav.inc.php";?>
    </header>
    <main>
        <!-- Section Introduction -->
        <section aria-labelledby="intro-title">
            <div class="intro">
                <div class="bienvenu">
                    <h1 id="intro-title">&lt;<span>/</span>Aurélie&gt;</h1>
                    <h2 id="last-name">Lao</h2>
                    <h3>Développeuse web</h3>
                    <h4>Cherche une alternance</h4>
                </div>
                <div class="photo-intro">
                        <img src="./asset/img/img-blanc/photo-fond.webp" id="photo-profile" alt="photo de profile de Aurélie" >
                    <div class="intro-btn">
                            <p>
                                Bonjour, je m'appelle Aurélie Lao. Je suis en première année de <strong>développement web</strong> à Digital Campus. Je cherche <strong>une alternance</strong> pour une durée de 2 ans.
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
                    <button id="button-html" aria-label="HTML">
                        <img src="./asset/img/img-blanc/html-icon.webp" alt="Logo HTML">
                        <p>HTML</p>
                    </button>
                    <button id="button-css" aria-label="CSS">
                        <img src="./asset/img/img-blanc/css-icon.webp" alt="Logo CSS">
                        <p>CSS</p>
                    </button>
                    <button id="button-wordpress" aria-label="WordPress">
                        <img src="./asset/img/img-blanc/wordPress-icon.webp" alt="Logo WordPress">
                        <p>WordPress</p>
                    </button>
                    <button id="button-php" aria-label="PHP">
                        <img src="./asset/img/img-blanc/php-icon.webp" alt="Logo PHP">
                        <p>PHP</p>
                    </button>
                    <button id="button-javascript" aria-label="JavaScript">
                        <img src="./asset/img/img-blanc/javaScript-icon.webp" alt="Logo JavaScript">
                        <p>JavaScript</p>
                    </button>
                    <button id="button-illustrator" aria-label="Illustrator">
                        <img src="./asset/img/img-blanc/illustrator-icon.webp" alt="Logo Illustrator">
                        <p>Illustrator</p>
                    </button>
                    <button id="button-photoshop" aria-label="Photoshop">
                        <img src="./asset/img/img-blanc/photoShop-icon.webp" alt="Logo Photoshop">
                        <p>PhotoShop</p>
                    </button>
                    <button id="button-indesign" aria-label="InDesign">
                        <img src="./asset/img/img-blanc/inDesign-icon.webp" alt="Logo InDesign">
                        <p>InDesign</p>
                    </button>
                </div>
            </div>
        </section>

    </main>
    <?php
    include "inc/footer.inc.php";
    ?>
    <script src="asset/js/accueil-mode-dark.js"></script>
</body>
</html>
