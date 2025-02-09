<?php 
require_once 'back-office/config/db.php';

// Récupérer tous les projets
$stmt = $pdo->query('SELECT * FROM projects ORDER BY id DESC');
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "public/inc/head.inc.php";
?>
    <title>Portfolio - Aurélie Lao</title>
    <link rel="stylesheet" href="public/css/accueil.css">

</head>
<body>
    <header>
    <?php include "public/inc/nav.inc.php";?>
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
                        <img src="public/asset/img/photo-fond.webp" id="photo-profile" alt="photo de profile de Aurélie" >
                    <div class="intro-btn">
                            <p>
                                Bonjour, je m'appelle Aurélie Lao. Je suis en première année de <strong>développement web</strong> à Digital Campus. Je cherche <strong>une alternance</strong> pour une durée de 2 ans.
                            </p>
                        <div class="button">
                            <a href="contact.php" id="contactez-moi">Contactez-moi</a>
                            <a href="public/asset/img/CV.pdf" id="cv">Mon CV</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section aria-labelledby="projects-title">
            <div class="projets">
                <h2>Mes Projets</h2>
                <div class="projets-container">
                    <?php foreach ($projects as $project): ?>
                    <div class="projet">
                        <img src="back-office/<?php echo htmlspecialchars($project['image_url']); ?>" 
                             alt="<?php echo htmlspecialchars($project['title']); ?>">
                        <div class="projet-info">
                            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p class="technologies"><?php echo htmlspecialchars($project['technologies']); ?></p>
                            <p class="description"><?php echo htmlspecialchars(substr($project['description'], 0, 100)) . '...'; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <hr>

        <section>
            <div class="competences">
                <h2>Mes compétences</h2>
                <div class="competences-container">
                    <button id="button-html" aria-label="HTML">
                        <img src="public/asset/icones-blanc/html-icon.webp" alt="Logo HTML">
                        <p>HTML</p>
                    </button>
                    <button id="button-css" aria-label="CSS">
                        <img src="public/asset/icones-blanc/css-white.webp" alt="Logo CSS">
                        <p>CSS</p>
                    </button>
                    <button id="button-wordpress" aria-label="WordPress">
                        <img src="public/asset/icones-blanc/wordPress-icon.webp" alt="Logo WordPress">
                        <p>WordPress</p>
                    </button>
                    <button id="button-php" aria-label="PHP">
                        <img src="public/asset/icones-blanc/php-icon.webp" alt="Logo PHP">
                        <p>PHP</p>
                    </button>
                    <button id="button-javascript" aria-label="JavaScript">
                        <img src="public/asset/icones-blanc/javaScript-icon.webp" alt="Logo JavaScript">
                        <p>JavaScript</p>
                    </button>
                    <button id="button-illustrator" aria-label="Illustrator">
                        <img src="public/asset/icones-blanc/illustrator-icon.webp" alt="Logo Illustrator">
                        <p>Illustrator</p>
                    </button>
                    <button id="button-photoshop" aria-label="Photoshop">
                        <img src="public/asset/icones-blanc/photoShop-icon.webp" alt="Logo Photoshop">
                        <p>PhotoShop</p>
                    </button>
                    <button id="button-indesign" aria-label="InDesign">
                        <img src="public/asset/icones-blanc/inDesign-icon.webp" alt="Logo InDesign">
                        <p>InDesign</p>
                    </button>
                </div>
            </div>
        </section>

    </main>
    <?php
    include "public/inc/footer.inc.php";
    ?>
    <script src="public/asset/js/accueil-mode-dark.js"></script>
    <script src="public/asset/js/menu-burger.js"></script>
</body>
</html>
