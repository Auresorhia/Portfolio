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
                        <img src="./asset/img/img-blanc/photo.webp" id="photo-profile" alt="photo de profile de Aurélie" style="width: 600">
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
                        <img src="./asset/img/img-blanc/html-icon.webp" alt="Logo HTML" >
                        <p>HTML</p>
                    </div>
                    <div id="css">
                        <img src="./asset/img/img-blanc/css-icon.webp" alt="Logo CSS">
                        <p>CSS</p>
                    </div>
                    <div id="wordpress">
                        <img src="./asset/img/img-blanc/wordPress-icon.webp" alt="Logo Wordpress">
                        <p>WordPress</p>
                    </div>
                    <div id="php">
                        <img src="./asset/img/img-blanc/php-icon.webp" alt="Logo Php">
                        <p>PHP</p>
                    </div>
                    <div id="javascript">
                        <img src="./asset/img/img-blanc/javaScript-icon.webp" alt="Logo JavaScript">
                        <p>JavaScript</p>
                    </div>
                    <div id="illustrator">
                        <img src="./asset/img/img-blanc/illustrator-icon.webp" alt="Logo Illustrator">
                        <p>Illustrator</p>
                    </div>
                    <div id="photoshop">
                        <img src="./asset/img/img-blanc/photoShop-icon.webp" alt="Logo Photoshop">
                        <p>PhotoShop</p>
                    </div>
                    <div id="indesign">
                        <img src="./asset/img/img-blanc/inDesign-icon.webp" alt="Logo InDesign">
                        <p>InDesign</p>
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
