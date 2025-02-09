<?php
session_start();
require_once __DIR__ . '/../../config/db.php';  // Connexion à la BDD
require_once __DIR__ . '/../../classes/FormulaireManager.php';  // Classe de gestion des formulaires

// Vérifier si l'admin est connecté
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: /php/portfolio-crud/back-office/index.php");
    exit();
}

// Vérifier si l'ID est présent dans l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Instancier le gestionnaire de formulaire et supprimer le formulaire
    $formManager = new FormulaireManager($pdo);
    if ($formManager->supprimerFormulaire($id)) {
        header("Location: /php/portfolio-crud/back-office/views/form/forms.php?message=Formulaire supprimé avec succès");
    } else {
        header("Location: /php/portfolio-crud/back-office/views/form/forms.php?error=Erreur lors de la suppression");
    }
} else {
    header("Location: /php/portfolio-crud/back-office/views/form/forms.php?error=ID invalide");
}
exit();
