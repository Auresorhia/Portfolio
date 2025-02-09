<?php
session_start();

// Vérifier si l'administrateur est connecté
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../index.php");
    exit();
}

require('../config/db.php');

// Récupération du nombre de messages
$stmt = $pdo->query("SELECT COUNT(*) AS message_count FROM contact_form");
$result = $stmt->fetch();
$messageCount = $result['message_count'];  // Nombre de messages

// Récupération des formulaires (optionnel si tu veux afficher les messages eux-mêmes)
$stmt = $pdo->query("SELECT * FROM contact_form ORDER BY created_at DESC");
$formulaires = $stmt->fetchAll();

// Retrieve projects
require_once __DIR__ . '/../models/Project.php';
$projectModel = new Project();
$projects = $projectModel->getAllProjects();
$projectCount = count($projects);  // Number of projects

?>

<?php include __DIR__ . '/../inc/head.php'; ?>
<body>
    <main class="container">
        <h1>Tableau de bord</h1>
        <h2>Vous avez <?php echo $messageCount; ?> messages reçus.</h2>
        <h2>Vous avez <?php echo $projectCount; ?> projets.</h2>
        
        <div class="table-container">
            <table border="1">
                <thead>
                    <tr>
                        <th>Messages</th>
                        <th>Projets</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Affichage des messages et projets ligne par ligne
                $maxCount = max(count($formulaires), $projectCount); // Pour gérer l'affichage des messages et projets même si l'un a plus de lignes que l'autre
                for ($i = 0; $i < $maxCount; $i++):
                ?>
                    <tr>
                        <td>
                            <?php 
                            if (isset($formulaires[$i])) {
                                echo htmlspecialchars($formulaires[$i]['nom']) . " - " . htmlspecialchars($formulaires[$i]['email']) . " - " . htmlspecialchars($formulaires[$i]['created_at']);
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                            if (isset($projects[$i])) {
                                echo htmlspecialchars($projects[$i]['title']) . " - " . htmlspecialchars($projects[$i]['created_at']);
                            }
                            ?>
                        </td>
                    </tr>
                <?php endfor; ?>
             </tbody>
            </table>
        </div>
    </main>
    <script src="/php/portfolio-crud/public/asset/js/menu-burger.js"></script>
</body>
</html>
