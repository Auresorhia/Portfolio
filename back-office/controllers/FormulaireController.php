<?php

require_once __DIR__ . '/../config/db.php';

class FormulaireController {

// Méthode pour récupérer tous les formulaires
    public function showForms() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM contact_form ORDER BY created_at DESC"); // Récupérer tous les formulaires, triés par date
        return $stmt->fetchAll();
    }

// Méthode pour supprimer tous les formulaires
    public function deleteAllForms() {
        global $pdo;
        try {
            $stmt = $pdo->prepare("DELETE FROM contact_form");
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
}
?>