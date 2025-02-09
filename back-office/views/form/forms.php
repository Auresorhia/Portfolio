<?php
require_once __DIR__ . '/../../controllers/FormulaireController.php';  // Inclure le contrôleur
$formulaireController = new FormulaireController();
$forms = $formulaireController->showForms();
?>
<?php include __DIR__ . '/../../inc/head.php'; ?>
    <title>Gestion des formulaires - Admin</title>
</head>
<body>
    <?php include __DIR__ . '/../../inc/nav.php'; ?>
    
    <main class="container">
        <h1>Gestion des formulaires</h1>
        
        <?php if(isset($_GET['message'])): ?>
            <div class="success-message">
                <?php echo htmlspecialchars($_GET['message']); ?>
            </div>
        <?php endif; ?>
        
        <?php if(isset($_GET['error'])): ?>
            <div class="error-message">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <?php if(count($forms) > 0): ?>
            <div class="delete-all-container">
                <a href="/php/portfolio-crud/back-office/views/form/delete-all.php" class="delete-all-btn" onclick="return confirm('Êtes-vous sûr de vouloir supprimer tous les formulaires ?');">Supprimer tous les formulaires</a>
            </div>
        <?php endif; ?>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date d'envoi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($forms as $form): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($form['id']); ?></td>
                        <td><?php echo htmlspecialchars($form['nom']); ?></td>
                        <td><?php echo htmlspecialchars($form['email']); ?></td>
                        <td><?php echo htmlspecialchars($form['message']); ?></td>
                        <td><?php echo htmlspecialchars($form['created_at']); ?></td>
                        <td>
                            <a href="/php/portfolio-crud/back-office/views/form/delete.php?id=<?php echo $form['id']; ?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
<script src="/php/portfolio-crud/public/asset/js/menu-burger.js"></script>
</html>