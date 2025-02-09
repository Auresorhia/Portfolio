<?php
session_start();

// Vérifier si l'admin est connecté
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: /php/portfolio-crud/back-office/index.php");
    exit();
}

require_once __DIR__ . '/../../controllers/FormulaireController.php';

$formulaireController = new FormulaireController();
if($formulaireController->deleteAllForms()) {
    header('Location: /php/portfolio-crud/back-office/views/form/forms.php?message=Tous les formulaires ont été supprimés');
} else {
    header('Location: /php/portfolio-crud/back-office/views/form/forms.php?error=Une erreur est survenue');
}
exit();
?>
