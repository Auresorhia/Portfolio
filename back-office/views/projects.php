<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../index.php');
    exit();
}

require_once __DIR__ . '/../controllers/ProjectController.php';

$controller = new ProjectController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
        
    case 'edit':
        if ($id === null) {
            $_SESSION['message'] = 'ID du projet manquant';
            $_SESSION['message_type'] = 'error';
            header('Location: /php/portfolio-crud/back-office/views/projects.php');
            exit();
        }
        $controller->edit($id);
        break;
        
    case 'delete':
        if ($id === null) {
            echo json_encode(['success' => false, 'message' => 'ID du projet manquant']);
            exit();
        }
        try {
            if ($controller->delete($id)) {
                echo json_encode(['success' => true, 'message' => 'Projet supprimé avec succès']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Erreur lors de la suppression du projet']);
            }
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => $e->getMessage()]);
        }
        exit();
        break;
        
    default:
        $projects = $controller->index();
        include __DIR__ . '/../inc/head.php';
        ?>
        <title>Gestion des Projets - Back Office</title>
        </head>
        <body>
            <?php include __DIR__ . '/../inc/nav.php'; ?>
            
            <main class="container">
                <h1>Gestion des Projets</h1>
                
                <?php if (isset($_SESSION['message'])): ?>
                    <div class="alert alert-<?php echo $_SESSION['message_type']; ?>">
                        <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        unset($_SESSION['message_type']);
                        ?>
                    </div>
                <?php endif; ?>

                <div class="action-buttons d-flex justify-content-end mb-3">
                    <button class="btn btn-add" onclick="location.href='/php/portfolio-crud/back-office/views/projects.php?action=create'">Ajouter un nouveau projet</button>
                </div>

                <div class="projects-list">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Technologies</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($projects as $project): ?>
                                <tr>
                                    <td data-label="ID"><?php echo htmlspecialchars($project['id']); ?></td>
                                    <td data-label="Titre"><?php echo htmlspecialchars($project['title']); ?></td>
                                    <td data-label="Technologies"><?php echo htmlspecialchars($project['technologies']); ?></td>
                                    <td data-label="Description"><?php echo htmlspecialchars($project['description']); ?></td>
                                    <td data-label="Image">
                                        <?php if (isset($project['image_url']) && $project['image_url']): ?>
                                            <img src="/php/portfolio-crud/public/asset/img/<?php echo htmlspecialchars($project['image_url']); ?>" 
                                                 alt="<?php echo htmlspecialchars($project['title']); ?>" 
                                                 style="max-width: 100px;">
                                        <?php endif; ?>
                                    </td>
                                    <td data-label="Actions">
                                        <a href="/php/portfolio-crud/back-office/views/projects.php?action=edit&id=<?php echo $project['id']; ?>" class="btn-edit">Modifier</a>
                                        <button onclick="deleteProject(<?php echo $project['id']; ?>)" class="btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>

            <script>
            function deleteProject(id) {
                if (confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')) {
                    fetch('/php/portfolio-crud/back-office/views/projects.php?action=delete&id=' + id, {
                        method: 'POST'
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert(data.message || 'Erreur lors de la suppression du projet');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        alert('Une erreur est survenue lors de la suppression');
                    });
                }
            }
            </script>
            <script src="/php/portfolio-crud/public/asset/js/menu-burger.js"></script>
        </body>
    </html>
    <?php
    break;
}
