<?php 
require_once __DIR__ . '/../back-office/config/db.php';

// Récupérer tous les projets
$stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
$projects = $stmt->fetchAll();

// Récupérer le projet mis en avant (le premier projet)
$featuredProject = !empty($projects) ? $projects[0] : null;

include "inc/head.inc.php";
?>
    <title>Portfolio - Projets</title>
    <link rel="stylesheet" href="css/projects.css">
</head>
<body>
    <header>
        <?php include "inc/nav.inc.php";?>
    </header>
    <!-- Projet Principal -->
     <main>
        <?php if ($featuredProject): ?>
        <section class="featured-project">
            <div class="featured-image">
                <img src="asset/img/<?php echo htmlspecialchars($featuredProject['image_url']); ?>" 
                    alt="<?php echo htmlspecialchars($featuredProject['title']); ?>">
            </div>
            <div class="featured-content">
                <h2><?php echo htmlspecialchars($featuredProject['title']); ?></h2>
                <p><?php echo htmlspecialchars($featuredProject['description']); ?></p>
                <div class="tech-stack">
                    <?php 
                    $technologies = explode(',', $featuredProject['technologies']);
                    foreach ($technologies as $tech): 
                        $techImage = strtolower(trim($tech));
                    ?>
                        <img src="asset/img/img-noir/<?php echo $techImage; ?>-black.webp" 
                             class="tech" 
                             alt="icone du langage <?php echo htmlspecialchars($tech); ?>" 
                             style="width: 50px">
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Slider de Projets -->
         <section class="projects-slider">
            <div class="slider-container">
                <div class="slider-projects">
                    <?php foreach ($projects as $project): ?>
                    <div class="slide">
                        <img src="asset/img/<?php echo htmlspecialchars($project['image_url']); ?>" 
                             alt="<?php echo htmlspecialchars($project['title']); ?>">
                        <div class="slide-overlay">
                            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p><?php echo htmlspecialchars($project['description']); ?></p>
                            <div class="tech-stack">
                                <?php 
                                $technologies = explode(',', $project['technologies']);
                                foreach ($technologies as $tech): 
                                    $techImage = strtolower(trim($tech));
                                ?>
                                    <img src="asset/img/img-noir/<?php echo $techImage; ?>-black.webp" 
                                         class="tech" 
                                         alt="icone du langage <?php echo htmlspecialchars($tech); ?>" 
                                         style="width: 30px">
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <button class="slider-button prev">&lt;</button>
                <button class="slider-button next">&gt;</button>
            </div>
        </section>
    </main>
    <?php
        include "inc/footer.inc.php";
    ?>
    <script src="./asset/js/projects-mode-dark.js"></script>
    <script src="./asset/js/slider.js"></script>
    <script src="asset/js/menu-burger.js"></script>
</body>
</html>
