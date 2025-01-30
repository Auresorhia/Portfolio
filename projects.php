<?php include "inc/head.inc.php";?>
    <title>Portfolio - Projets</title>
    <link rel="stylesheet" href="./asset/css/projects.css">
</head>
<body>
    <header>
        <?php include "inc/nav.inc.php";?>
    </header>
    <!-- Projet Principal -->
     <main>
        <section class="featured-project">
            <div class="featured-image">
                <img src="img/php-icon.webp" 
                    alt="Formulaire de Connexion">
            </div>
            <div class="featured-content">
                <h2>Formulaire de Connexion avec Animation</h2>
                <p>J'ai créé un formulaire de connexion en HTML et CSS, avec une animation de validation élégante, permettant une interaction fluide et moderne pour l'utilisateur.</p>
                <div class="tech-stack">
                    <img src ="./asset/img/img-noir/html-black.webp" class="tech" alt="icone du langage HTML" style="width: 50px">
                    <img src ="./asset/img/img-noir/css-black.webp" class="tech" alt="icone du langage CSS" style="width: 50px">
                    <img src ="./asset/img/img-noir/javaScript-black.webp" class="tech" alt="icone du langage JavaScript" style="width: 50px">
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
        
    <?php
        include "inc/footer.inc.php";
    ?>
    <script src="script.js"></script>
</body>
</html>
